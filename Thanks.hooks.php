<?php
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
			$testModules['qunit']['tests.ext.thanks.mobilediff'] = array(
				'localBasePath' => __DIR__,
				'remoteExtPath' => 'Thanks',
				'dependencies' => array( 'ext.thanks.mobilediff' ),
				'scripts' => array(
					'tests/qunit/test_ext.thanks.mobilediff.js',
				),
				'targets' => array( 'desktop', 'mobile' ),
			);
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
	public static function insertThankLink( $rev, &$links, $oldRev = null ) {
		global $wgUser, $wgThanksSendToBots;
		// Make sure Echo is turned on.
		// Exclude anonymous users.
		// Don't let users thank themselves.
		// Exclude users who are blocked.
		if ( class_exists( 'EchoNotifier' )
			&& !$wgUser->isAnon()
			&& $rev->getUser() !== $wgUser->getId()
			&& !$wgUser->isBlocked()
			&& !$rev->isDeleted( Revision::DELETED_TEXT )
			&& ( !$oldRev || $rev->getParentId() == $oldRev->getId() )
		) {
			$recipient = User::newFromId( $rev->getUser() );
			$recipientAllowed = true;
			// If bots are not allowed, exclude them as recipients
			if ( !$wgThanksSendToBots ) {
				$recipientAllowed = !in_array( 'bot', $recipient->getGroups() );
			}
			if ( $recipientAllowed && !$recipient->isAnon() ) {
				$links[] = self::generateThankElement( $rev, $recipient );
			}
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
				array( 'class' => 'mw-thanks-thanked' ),
				wfMessage( 'thanks-thanked', $wgUser, $recipient->getName() )->text()
			);
		}

		// Add 'thank' link
		$tooltip = wfMessage( 'thanks-thank-tooltip' )
				->params( $wgUser->getName(), $recipient->getName() )
				->text();

		return Html::element(
			'a',
			array(
				'class' => 'mw-thanks-thank-link',
				'href' => SpecialPage::getTitleFor( 'Thanks', $rev->getId() )->getFullURL(),
				'title' => $tooltip,
				'data-revision-id' => $rev->getId(),
			),
			wfMessage( 'thanks-thank', $wgUser, $recipient->getName() )->text()
		);
	}

	/**
	 * Handler for PageHistoryBeforeList hook.
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/PageHistoryBeforeList
	 * @param &$page WikiPage|Article|ImagePage|CategoryPage|Page The page that the history is loading for.
	 * @param $context RequestContext object
	 * @return bool true in all cases
	 */
	public static function onPageHistoryBeforeList( &$page, $context ) {
		global $wgThanksConfirmationRequired;
		if ( class_exists( 'EchoNotifier' )
			&& $context->getUser()->isLoggedIn()
		) {
			// Load the module for the thank links
			$context->getOutput()->addModules( array( 'ext.thanks.revthank' ) );
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
			$diff->getOutput()->addModules( array( 'ext.thanks.revthank' ) );
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
	public static function onBeforeCreateEchoEvent( &$notifications, &$notificationCategories, &$icons ) {
		$notificationCategories['edit-thank'] = array(
			'priority' => 3,
			'tooltip' => 'echo-pref-tooltip-edit-thank',
		);

		$notifications['edit-thank'] = array(
			'primary-link' => array( 'message' => 'notification-link-text-view-edit', 'destination' => 'diff' ),
			'category' => 'edit-thank',
			'group' => 'positive',
			'formatter-class' => 'EchoThanksFormatter',
			'title-message' => 'notification-thanks',
			'title-params' => array( 'agent', 'difflink', 'title' ),
			'flyout-message' => 'notification-thanks-flyout2',
			'flyout-params' => array( 'agent', 'title' ),
			'payload' => array( 'summary' ),
			'email-subject-message' => 'notification-thanks-email-subject',
			'email-subject-params' => array( 'agent' ),
			'email-body-batch-message' => 'notification-thanks-email-batch-body',
			'email-body-batch-params' => array( 'agent', 'title' ),
			'icon' => 'thanks',
		);

		$notifications['flow-thank'] = array(
			'primary-link' => array ( 'message' => 'notification-link-text-view-post', 'destination' => 'post' ),
			'category' => 'edit-thank',
			'group' => 'positive',
			'formatter-class' => 'EchoFlowThanksFormatter',
			'title-message' => 'notification-flow-thanks',
			'title-params' => array( 'agent', 'postlink', 'topictitle', 'title', 'user' ),
			'flyout-message' => 'notification-flow-thanks-flyout',
			'flyout-params' => array( 'agent', 'topictitle', 'title', 'user' ),
			'email-subject-message' => 'notification-flow-thanks-email-subject',
			'email-subject-params' => array( 'agent', 'user' ),
			'email-body-batch-message' => 'notification-flow-thanks-email-batch-body',
			'email-body-batch-params' => array( 'agent', 'topictitle', 'title', 'user' ),
			'icon' => 'thanks',
		);

		$icons['thanks'] = array(
			'path' => 'Thanks/ThankYou.png',
		);

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
	 * Handler for AddNewAccount hook
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/AddNewAccount
	 * @param $user User object that was created.
	 * @param $byEmail bool True when account was created "by email".
	 * @return bool
	 */
	public static function onAccountCreated( $user, $byEmail ) {
		// New users get echo preferences set that are not the default settings for existing users.
		// Specifically, new users are opted into email notifications for thanks.
		$user->setOption( 'echo-subscriptions-email-edit-thank', true );
		$user->saveSettings();
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
		// If the Echo and MobileFrontend extensions are installed and the user is
		// logged in, show a 'Thank' link.
		if ( class_exists( 'EchoNotifier' )
			&& class_exists( 'SpecialMobileDiff' )
			&& $output->getUser()->isLoggedIn()
		) {
			$output->addModules( array( 'ext.thanks.mobilediff' ) );
			$rev = $revisions[1];
			if ( $rev ) {
				if ( $output->getRequest()->getSessionData( 'thanks-thanked-' . $rev->getId() ) ) {
					// User already sent thanks for this revision
					$output->addJsConfigVars( 'wgThanksAlreadySent', true );
				}
			}
		}
		return true;
	}

	/**
	 * Hook to add PHPUnit test cases.
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/UnitTestsList
	 *
	 * @param array &$files
	 *
	 * @return boolean
	 */
	public static function registerUnitTests( array &$files ) {
		// @codeCoverageIgnoreStart
		$files[] = __DIR__ . '/tests/';
		return true;
		// @codeCoverageIgnoreEnd
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
}
