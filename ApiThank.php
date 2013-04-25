<?php
/**
 * API module to send thanks notifications
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiThank extends ApiBase {
	public function execute() {
		global $wgThanksLogging;

		if ( !class_exists( 'EchoNotifier' ) ) {
			$this->dieUsage( 'Echo is not installed on this wiki', 'echonotinstalled' );
		}

		$agent = $this->getUser();
		if ( $agent->isAnon() ) {
			$this->dieUsage( 'Anonymous users cannot send thanks', 'notloggedin' );
		}
		if ( $agent->pingLimiter( 'thanks-notification' ) ) {
			$this->dieUsageMsg( array( 'actionthrottledtext' ) );
		}
		if ( $agent->isBlocked() ) {
			$this->dieUsageMsg( array( 'blockedtext' ) );
		}
		$params = $this->extractRequestParams();
		$rev = Revision::newFromId( $params['rev'] );
		$result = array();
		if ( !$rev ) {
			$this->dieUsage( 'Revision ID is not valid', 'invalidrevision' );
		} else {
			$title = Title::newFromID( $rev->getPage() );
			if ( !$title ) {
				$this->dieUsage( 'Page title could not be retrieved', 'notitle' );
			}

			// Get the user ID of the user who performed the edit
			$recipient = $rev->getUser();

			if ( !$recipient ) {
				$this->dieUsage( 'No valid recipient found', 'invalidrecipient' );
			} else {
				// Set the source of the thanks, e.g. 'diff' or 'history'
				if ( $params['source'] ) {
					$source = trim( $params['source'] );
				} else {
					$source = 'undefined';
				}
				// Create the notification via Echo extension
				EchoEvent::create( array(
					'type' => 'edit-thank',
					'title' => $title,
					'extra' => array(
						'revid' => $rev->getId(),
						'thanked-user-id' => $recipient,
						'source' => $source,
					),
					'agent' => $agent,
				) );
				// Mark the thank in session to prevent duplicates (Bug 46690)
				$agent->getRequest()->setSessionData( "thanks-thanked-{$rev->getId()}", true );
				// Set success message
				$result['success'] = '1';
				// Log it if we're supposed to log it
				if ( $wgThanksLogging ) {
					$logEntry = new ManualLogEntry( 'thanks', 'thank' );
					$logEntry->setPerformer( $agent );
					$target = User::newFromId( $recipient )->getUserPage();
					$logEntry->setTarget( $target );
					$logid = $logEntry->insert();
				}
			}
		}
		$this->getResult()->addValue( null, 'result', $result );
	}

	public function getDescription() {
		return array(
			'This API is for sending thank you notifications from one editor to another.',
		);
	}

	public function getParamDescription() {
		return array(
			'rev' => 'A revision ID for an edit that you want to thank someone for',
			'token' => 'An edit token (to prevent CSRF abuse)',
			'source' => "A short string describing the source of the request, for example, 'diff' or 'history'",
		);
	}

	public function getAllowedParams() {
		return array(
			'rev' => array(
				ApiBase::PARAM_TYPE => 'integer',
				ApiBase::PARAM_MIN => 1,
				ApiBase::PARAM_REQUIRED => true,
			),
			'token' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'source' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => false,
			)
		);
	}

	public function needsToken() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}

	public function getVersion() {
		return __CLASS__ . '-1.0';
	}
}
