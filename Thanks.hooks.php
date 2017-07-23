<?php
use Flow\Model\UUID;

/**
 * Hooks for Thanks extension
 *
 * @file
 * @ingroup Extensions
 */

class ThanksHooks {
	/**
	 * ResourceLoaderTestModules hook handler
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ResourceLoaderTestModules
	 *
	 * @param array $testModules
	 * @param ResourceLoader $resourceLoader
	 * @return bool
	 */
	public static function onResourceLoaderTestModules( array &$testModules,
		ResourceLoader &$resourceLoader
	) {
		if ( class_exists( 'SpecialMobileDiff' ) ) {
			$testModules['qunit']['tests.ext.thanks.mobilediff'] = [
				'localBasePath' => __DIR__,
				'remoteExtPath' => 'Thanks',
				'dependencies' => [ 'ext.thanks.mobilediff' ],
				'scripts' => [
					'tests/qunit/test_ext.thanks.mobilediff.js',
				],
				'targets' => [ 'desktop', 'mobile' ],
			];
		}
		return true;
	}

	/**
	 * Handler for HistoryRevisionTools and DiffRevisionTools hooks.
	 * Inserts 'thank' link into revision interface
	 * @param $rev Revision object to add the thank link for
	 * @param &$links array Links to add to the revision interface
	 * @param $oldRev Revision object of the "old" revision when viewing a diff
	 * @return bool
	 */
	public static function insertThankLink( $rev, &$links, $oldRev = null, User $user ) {
		$recipientId = $rev->getUser();
		$recipient = User::newFromId( $recipientId );
		// Make sure Echo is turned on.
		// Don't let users thank themselves.
		// Exclude anonymous users.
		// Exclude users who are blocked.
		// Check whether bots are allowed to receive thanks.
		if ( class_exists( 'EchoNotifier' )
			&& !$user->isAnon()
			&& $recipientId !== $user->getId()
			&& !$user->isBlocked()
			&& self::canReceiveThanks( $recipient )
			&& !$rev->isDeleted( Revision::DELETED_TEXT )
			&& ( !$oldRev || $rev->getParentId() == $oldRev->getId() )
		) {
			$links[] = self::generateThankElement( $rev, $recipient );
		}
		return true;
	}

	/**
	 * Check whether a user is allowed to receive thanks or not
	 *
	 * @param User $user Recipient
	 * @return bool true if allowed, false if not
	 */
	protected static function canReceiveThanks( User $user ) {
		global $wgThanksSendToBots;

		if ( $user->isAnon() ) {
			return false;
		}

		if ( !$wgThanksSendToBots && in_array( 'bot', $user->getGroups() ) ) {
			return false;
		}

		return true;
	}

	/**
	 * Helper for self::insertThankLink
	 * Creates either a thank link or thanked span based on users session
	 * @param $rev Revision object to generate the thank element for
	 * @param $recipient User who receives thanks notification
	 * @return string
	 */
	protected static function generateThankElement( $rev, $recipient ) {
		global $wgUser;
		// User has already thanked for revision
		if ( $wgUser->getRequest()->getSessionData( "thanks-thanked-{$rev->getId()}" ) ) {
			return Html::element(
				'span',
				[ 'class' => 'mw-thanks-thanked' ],
				wfMessage( 'thanks-thanked', $wgUser, $recipient->getName() )->text()
			);
		}

		// Add 'thank' link
		$tooltip = wfMessage( 'thanks-thank-tooltip' )
				->params( $wgUser->getName(), $recipient->getName() )
				->text();

		return Html::element(
			'a',
			[
				'class' => 'mw-thanks-thank-link',
				'href' => SpecialPage::getTitleFor( 'Thanks', $rev->getId() )->getFullURL(),
				'title' => $tooltip,
				'data-revision-id' => $rev->getId(),
			],
			wfMessage( 'thanks-thank', $wgUser, $recipient->getName() )->text()
		);
	}

	/**
	 * Handler for PageHistoryBeforeList hook.
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/PageHistoryBeforeList
	 * @param &$page WikiPage|Article|ImagePage|CategoryPage|Page The page for which the history
	 *   is loading.
	 * @param $context RequestContext object
	 * @return bool true in all cases
	 */
	public static function onPageHistoryBeforeList( &$page, $context ) {
		global $wgThanksConfirmationRequired;
		if ( class_exists( 'EchoNotifier' )
			&& $context->getUser()->isLoggedIn()
		) {
			// Load the module for the thank links
			$context->getOutput()->addModules( [ 'ext.thanks.revthank' ] );
			$context->getOutput()->addJsConfigVars( 'thanks-confirmation-required',
				$wgThanksConfirmationRequired );
		}
		return true;
	}

	/**
	 * Handler for DiffViewHeader hook.
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/DiffViewHeader
	 * @param $diff DifferenceEngine
	 * @param $oldRev Revision object of the "old" revision (may be null/invalid)
	 * @param $newRev Revision object of the "new" revision
	 * @return bool true in all cases
	 */
	public static function onDiffViewHeader( $diff, $oldRev, $newRev ) {
		global $wgThanksConfirmationRequired;
		if ( class_exists( 'EchoNotifier' )
			&& $diff->getUser()->isLoggedIn()
		) {
			// Load the module for the thank link
			$diff->getOutput()->addModules( [ 'ext.thanks.revthank' ] );
			$diff->getOutput()->addJsConfigVars( 'thanks-confirmation-required',
				$wgThanksConfirmationRequired );
		}
		return true;
	}

	/**
	 * Add Thanks events to Echo
	 *
	 * @param $notifications array of Echo notifications
	 * @param $notificationCategories array of Echo notification categories
	 * @param $icons array of icon details
	 * @return bool
	 */
	public static function onBeforeCreateEchoEvent(
		&$notifications, &$notificationCategories, &$icons
	) {
		$notificationCategories['edit-thank'] = [
			'priority' => 3,
			'tooltip' => 'echo-pref-tooltip-edit-thank',
		];

		$notifications['edit-thank'] = [
			'category' => 'edit-thank',
			'group' => 'positive',
			'section' => 'message',
			'presentation-model' => 'EchoThanksPresentationModel',
			'bundle' => [
				'web' => true,
				'expandable' => true,
			],
		];

		if ( class_exists( Flow\FlowPresentationModel::class ) ) {
			$notifications['flow-thank'] = [
				'category' => 'edit-thank',
				'group' => 'positive',
				'section' => 'message',
				'presentation-model' => 'EchoFlowThanksPresentationModel',
				'bundle' => [
					'web' => true,
					'expandable' => true,
				],
			];
		}

		$icons['thanks'] = [
			'path' => [
				'ltr' => 'Thanks/thanks-green-ltr.svg',
				'rtl' => 'Thanks/thanks-green-rtl.svg'
			]
		];

		return true;
	}

	/**
	 * Add user to be notified on echo event
	 * @param $event EchoEvent
	 * @param $users array
	 * @return bool
	 */
	public static function onEchoGetDefaultNotifiedUsers( $event, &$users ) {
		switch ( $event->getType() ) {
			case 'edit-thank':
			case 'flow-thank':
				$extra = $event->getExtra();
				if ( !$extra || !isset( $extra['thanked-user-id'] ) ) {
					break;
				}
				$recipientId = $extra['thanked-user-id'];
				$recipient = User::newFromId( $recipientId );
				$users[$recipientId] = $recipient;
				break;
		}
		return true;
	}

	/**
	 * Handler for LocalUserCreated hook
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/LocalUserCreated
	 * @param $user User object that was created.
	 * @param $autocreated bool True when account was auto-created
	 * @return bool
	 */
	public static function onAccountCreated( $user, $autocreated ) {
		// New users get echo preferences set that are not the default settings for existing users.
		// Specifically, new users are opted into email notifications for thanks.
		if ( !$autocreated ) {
			$user->setOption( 'echo-subscriptions-email-edit-thank', true );
			$user->saveSettings();
		}
		return true;
	}

	/**
	 * Add thanks button to SpecialMobileDiff page
	 * @param &$output OutputPage object
	 * @param $ctx MobileContext object
	 * @param $revisions Array of the two revisions that are being compared in the diff
	 * @return bool true in all cases
	 */
	public static function onBeforeSpecialMobileDiffDisplay( &$output, $ctx, $revisions ) {
		$rev = $revisions[1];

		// If the Echo and MobileFrontend extensions are installed and the user is
		// logged in or recipient is not a bot if bots cannot receive thanks, show a 'Thank' link.
		if ( $rev
			&& class_exists( 'EchoNotifier' )
			&& class_exists( 'SpecialMobileDiff' )
			&& self::canReceiveThanks( User::newFromId( $rev->getUser() ) )
			&& $output->getUser()->isLoggedIn()
		) {
			$output->addModules( [ 'ext.thanks.mobilediff' ] );

			if ( $output->getRequest()->getSessionData( 'thanks-thanked-' . $rev->getId() ) ) {
				// User already sent thanks for this revision
				$output->addJsConfigVars( 'wgThanksAlreadySent', true );
			}

		}
		return true;
	}

	/**
	 * So users can just type in a username for target and it'll work
	 * @param array $types
	 * @return bool
	 */
	public static function onGetLogTypesOnUser( array &$types ) {
		$types[] = 'thanks';
		return true;
	}

	/**
	 * Handler for BeforePageDisplay.  Inserts javascript to enhance thank
	 * links from static urls to in-page dialogs along with reloading
	 * the previously thanked state.
	 *
	 * @param OutputPage $out OutputPage object
	 * @param Skin $skin
	 * @return bool
	 */
	public static function onBeforePageDisplay( OutputPage $out, $skin ) {
		$title = $out->getTitle();
		if ( $title instanceof Title && $title->hasContentModel( 'flow-board' ) ) {
			$out->addModules( 'ext.thanks.flowthank' );
		}
		return true;
	}

	/**
	 * Conditionally load API module 'flowthank' depending on whether or not
	 * Flow is installed.
	 *
	 * @param ApiModuleManager $moduleManager Module manager instance
	 * @return bool
	 */
	public static function onApiMainModuleManager( ApiModuleManager $moduleManager ) {
		if ( class_exists( 'FlowHooks' ) ) {
			$moduleManager->addModule(
				'flowthank',
				'action',
				'ApiFlowThank'
			);
		}
		return true;
	}

	/**
	 * Handler for EchoGetBundleRule hook, which defines the bundle rules for each notification
	 *
	 * @param $event EchoEvent
	 * @param $bundleString string Determines how the notification should be bundled
	 * @return bool True for success
	 */
	public static function onEchoGetBundleRules( $event, &$bundleString ) {
		switch ( $event->getType() ) {
			case 'edit-thank':
				$bundleString = 'edit-thank';
				$revId = $event->getExtraParam( 'revid' );
				if ( $revId ) {
					$bundleString .= $event->getExtraParam( 'revid' );
				}
				break;
			case 'flow-thank':
				$bundleString = 'flow-thank';
				$postId = $event->getExtraParam( 'post-id' );
				if ( $postId ) {
					$bundleString .= $postId;
				}
				break;
		}
		return true;
	}
}
