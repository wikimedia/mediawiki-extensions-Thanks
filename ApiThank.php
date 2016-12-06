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
			$this->dieWithError( 'thanks-error-echonotinstalled', 'echonotinstalled' );
		}
	}

	protected function dieOnBadUser( User $user ) {
		if ( $user->isAnon() ) {
			$this->dieWithError( 'thanks-error-notloggedin', 'notloggedin' );
		} elseif ( $user->pingLimiter( 'thanks-notification' ) ) {
			$this->dieWithError( [ 'thanks-error-ratelimited', $user->getName() ], 'ratelimited' );
		} elseif ( $user->isBlocked() ) {
			$this->dieBlocked( $user->getBlock() );
		}
	}

	protected function dieOnBadRecipient( User $user, User $recipient ) {
		global $wgThanksSendToBots;

		if ( $user->getId() === $recipient->getId() ) {
			$this->dieWithError( 'thanks-error-invalidrecipient-self', 'invalidrecipient' );
		} elseif ( !$wgThanksSendToBots && in_array( 'bot', $recipient->getGroups() ) ) {
			$this->dieWithError( 'thanks-error-invalidrecipient-bot', 'invalidrecipient' );
		}
	}

	protected function markResultSuccess( $recipientName ) {
		$this->getResult()->addValue( null, 'result', [
			'success' => 1,
			'recipient' => $recipientName,
		] );
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
			[ 'log_search', 'logging' ],
			[ 'ls_value' ],
			[
				'log_user' => $thanker->getId(),
				'ls_field' => 'thankid',
				'ls_value' => $uniqueId,
			],
			__METHOD__,
			[],
			[ 'logging' => [ 'INNER JOIN', 'ls_log_id=log_id' ] ]
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
		$logEntry->setRelations( [ 'thankid' => $uniqueId ] );
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
}
