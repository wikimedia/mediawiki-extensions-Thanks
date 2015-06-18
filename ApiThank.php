<?php
/**
 * Base API module for Thanks
 *
 * @ingroup API
 * @ingroup Extensions
 */
abstract class ApiThank extends ApiBase {
	protected function dieIfEchoNotInstalled() {
		if ( !class_exists( 'EchoNotifier' ) ) {
			$this->dieUsage( 'Echo is not installed on this wiki', 'echonotinstalled' );
		}
	}

	protected function dieOnBadUser( User $user ) {
		if ( $user->isAnon() ) {
			$this->dieUsage( 'Anonymous users cannot send thanks', 'notloggedin' );
		} elseif ( $user->pingLimiter( 'thanks-notification' ) ) {
			$this->dieUsageMsg( array( 'actionthrottledtext' ) );
		} elseif ( $user->isBlocked() ) {
			$this->dieUsageMsg( array( 'blockedtext' ) );
		}
	}

	protected function dieOnBadRecipient( User $user, User $recipient ) {
		global $wgThanksSendToBots;

		if ( $user->getId() === $recipient->getId() ) {
			$this->dieUsage( 'You cannot thank yourself', 'invalidrecipient' );
		} elseif ( !$wgThanksSendToBots && in_array( 'bot', $recipient->getGroups() ) ) {
			$this->dieUsage( 'Bots cannot be thanked', 'invalidrecipient' );
		}
	}

	protected function markResultSuccess( $recipientName ) {
		$this->getResult()->addValue( null, 'result', array(
			'success' => 1,
			'recipient' => $recipientName,
		) );
	}

	/**
	 * This checks the log_search data
	 *
	 * @param User $thanker
	 * @param string $uniqueId
	 * @return bool Whether thanks has already been sent
	 */
	protected function haveAlreadyThanked( User $thanker, $uniqueId ) {
		$dbw = wfGetDB( DB_MASTER );
		return (bool)$dbw->selectRow(
			array( 'log_search', 'logging' ),
			array( 'ls_value' ),
			array(
				'log_user' => $thanker->getId(),
				'ls_field' => 'thankid',
				'ls_value' => $uniqueId,
			),
			__METHOD__,
			array(),
			array( 'logging' => array( 'INNER JOIN', 'ls_log_id=log_id' ) )
		);
	}

	/**
	 * @param User $user
	 * @param User $recipient
	 * @param string $uniqueId A unique Id to identify the event being thanked for, to use
	 *                         when checking for duplicate thanks
	 */
	protected function logThanks( User $user, User $recipient, $uniqueId ) {
		global $wgThanksLogging;
		if ( !$wgThanksLogging ) {
			return;
		}
		$logEntry = new ManualLogEntry( 'thanks', 'thank' );
		$logEntry->setPerformer( $user );
		$logEntry->setRelations( array( 'thankid' => $uniqueId ) );
		$target = $recipient->getUserPage();
		$logEntry->setTarget( $target );
		$logId = $logEntry->insert();
		$logEntry->publish( $logId, 'udp' );
	}

	public function needsToken() {
		return 'csrf';
	}

	// Writes to the Echo database and sometimes log tables.
	public function isWriteMode() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}
}
