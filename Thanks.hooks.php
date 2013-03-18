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
	 * @param &$tools array Links to add to the revision interface
	 * @return bool
	 */
	public static function insertThankLink( $rev, &$links ) {
		global $wgUser, $wgThanksSendToBots;
		// Make sure Echo is turned on.
		// Exclude anonymous users.
		// Don't let users thank themselves.
		// Exclude users who don't want to participate in feature experiments.
		// Exclude users who are blocked.
		if ( class_exists( 'EchoNotifier' )
			&& !$wgUser->isAnon()
			&& $rev->getUser() !== $wgUser->getId()
			&& !$wgUser->getOption( 'vector-noexperiments' )
			&& !$wgUser->isBlocked()
		) {
			$recipient = User::newFromId( $rev->getUser() );
			$recipientAllowed = true;
			// If bots are not allowed, exclude them as recipients
			if ( !$wgThanksSendToBots ) {
				$recipientAllowed = !in_array( 'bot', $recipient->getGroups() );
			}
			if ( $recipientAllowed && !$recipient->isAnon() ) {
				// Add 'thank' link
				$tooltip = wfMessage( 'thanks-thank-tooltip' )->escaped();
				$thankLink = Html::element(
					'a',
					array(
						'class' => 'mw-thanks-thank-link',
						'href' => '#',
						'title' => $tooltip,
						'data-revision-id' => $rev->getId(),
					),
					wfMessage( 'thanks-thank' )->plain()
				);
				$links[] = $thankLink;
			}
		}
		return true;
	}

	/**
	 * Handler for PageHistoryBeforeList hook.
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/PageHistoryBeforeList
	 * @param &$page WikiPage|Article|ImagePage|CategoryPage|Page The page that the history is loading for.
	 * @param $context RequestContext object
	 * @return bool true in all cases
	 */
	public static function onPageHistoryBeforeList( &$page, $context ) {
		if ( class_exists( 'EchoNotifier' )
			&& $context->getUser()->isLoggedIn()
		) {
			// Load the module for the thank links
			$context->getOutput()->addModules( array( 'ext.thanks' ) );
		}
		return true;
	}

	/**
	 * Handler for DiffViewHeader hook.
	 * @see http://www.mediawiki.org/wiki/Manual:Hooks/DiffViewHeader
	 * @param $diff WikiPage|Article|ImagePage|CategoryPage|Page The page that the history is loading for.
	 * @param $oldRev Revision object of the "old" revision (may be null/invalid)
	 * @param $newRev Revision object of the "new" revision
	 * @return bool true in all cases
	 */
	public static function onDiffViewHeader( $diff, $oldRev, $newRev ) {
		if ( class_exists( 'EchoNotifier' )
			&& $diff->getUser()->isLoggedIn()
		) {
			// Load the module for the thank link
			$diff->getOutput()->addModules( array( 'ext.thanks' ) );
		}
		return true;
	}

	/**
	 * Add extension event to $wgEchoEnabledEvents
	 * @param $wgEchoEnabledEvents array a list of enabled echo events
	 * @param $wgEchoEventDetails array details for echo events
	 */
	public static function onBeforeCreateEchoEvent( &$wgEchoNotifications, &$wgEchoNotificationCategories ) {

		$wgEchoNotificationCategories['edit-thank'] = array(
			'priority' => 3,
		);

		$wgEchoNotifications['edit-thank'] = array(
			'category' => 'edit-thank',
			'group' => 'interactive',
			'formatter-class' => 'EchoThanksFormatter',
			'title-message' => 'notification-thanks',
			'title-params' => array( 'agent', 'difflink', 'title' ),
			'flyout-message' => 'notification-thanks-flyout',
			'flyout-params' => array( 'agent', 'difflink', 'title' ),
			'payload' => array( 'summary' ),
			'email-subject-message' => 'notification-thanks-email-subject',
			'email-subject-params' => array( 'agent' ),
			'email-body-message' => 'notification-thanks-email-body',
			'email-body-params' => array( 'agent', 'title', 'difflink', 'email-footer' ),
			'email-body-batch-message' => 'notification-thanks-email-batch-body',
			'email-body-batch-params' => array( 'agent', 'title' ),
			'icon' => 'gratitude',
		);

		return true;
	}

	/**
	 * Add user to be notified on echo event
	 * @param $event EchoEvent
	 * @param $users array
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
}
