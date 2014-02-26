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

	protected function logThanks( User $user, User $recipient ) {
		$logEntry = new ManualLogEntry( 'thanks', 'thank' );
		$logEntry->setPerformer( $user );
		$target = $recipient->getUserPage();
		$logEntry->setTarget( $target );
		$logId = $logEntry->insert();
		$logEntry->publish( $logId, 'udp' );
	}

	public function needsToken() {
		return true;
	}

	// Writes to the Echo database and sometimes log tables.
	public function isWriteMode() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}
}
