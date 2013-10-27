<?php
/**
 * Hooks for Thanks extension
 *
 * @file
 * @ingroup Extensions
 */

class ThanksHooks {
	/**
	 * Handler for HistoryRevisionTools and DiffRevisionTools hooks.
	 * Inserts 'thank' link into revision interface
	 * @param $rev Revision object to add the thank link for
	 * @param &$links array Links to add to the revision interface
	 * @return bool
	 */
	public static function insertThankLink( $rev, &$links ) {
		global $wgUser, $wgThanksSendToBots;
		// Make sure Echo is turned on.
		// Exclude anonymous users.
		// Don't let users thank themselves.
		// Exclude users who are blocked.
		if ( class_exists( 'EchoNotifier' )
			&& !$wgUser->isAnon()
			&& $rev->getUser() !== $wgUser->getId()
			&& !$wgUser->isBlocked()
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
	 * @param $recipient User the user who receives thanks notification
	 * @return string
	 */
	protected static function generateThankElement( $rev, $recipient ) {
		global $wgUser;
		// User has already thanked for revision
		if ( $wgUser->getRequest()->getSessionData( "thanks-thanked-{$rev->getId()}" ) ) {
			return Html::element(
				'span',
				array( 'class' => 'mw-thanks-thanked' ),
				wfMessage( 'thanks-thanked', $wgUser )->parse()
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
				'href' => '#',
				'title' => $tooltip,
				'data-revision-id' => $rev->getId(),
			),
			wfMessage( 'thanks-thank' )->plain()
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
			$context->getOutput()->addModules( array( 'ext.thanks' ) );
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
			$diff->getOutput()->addModules( array( 'ext.thanks' ) );
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
			'primary-link' => array( 'message' => 'notification-link-text-respond-to-user', 'destination' => 'agent' ),
			'secondary-link' => array( 'message' => 'notification-link-text-view-edit', 'destination' => 'diff' ),
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
	 * @return bool true in all cases
	 */
	public static function onBeforeSpecialMobileDiffDisplay( &$output, $ctx ) {
		// If the Echo and MobileFrontend extensions are installed and the user is
		// logged in, show a 'Thank' link.
		if ( class_exists( 'EchoNotifier' )
			&& class_exists( 'SpecialMobileDiff' )
			&& $output->getUser()->isLoggedIn()
		) {
			$output->addModules( array( 'ext.thanks.mobilediff' ) );
		}
		return true;
	}
}
