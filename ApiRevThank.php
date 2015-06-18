<?php
/**
 * API module to send thanks notifications for revisions
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiRevThank extends ApiThank {
	public function execute() {
		$this->dieIfEchoNotInstalled();

		$user = $this->getUser();
		$this->dieOnBadUser( $user );

		$params = $this->extractRequestParams();
		$revision = $this->getRevisionFromParams( $params );

		if ( $this->userAlreadySentThanksForRevision( $user, $revision ) ) {
			$this->markResultSuccess( $revision->getUserText() );
		} else {
			$recipient = $this->getUserFromRevision( $revision );
			$this->dieOnBadRecipient( $user, $recipient );
			$this->sendThanks(
				$user,
				$revision,
				$recipient,
				$this->getSourceFromParams( $params )
			);
		}
	}

	protected function userAlreadySentThanksForRevision( User $user, Revision $revision ) {
		return $user->getRequest()->getSessionData( "thanks-thanked-{$revision->getId()}" );
	}

	private function getRevisionFromParams( $params ) {
		$revision = Revision::newFromId( $params['rev'] );

		// Revision ID 1 means an invalid argument was passed in.
		if ( !$revision || $revision->getId() === 1 ) {
			$this->dieUsage( 'Revision ID is not valid', 'invalidrevision' );
		} elseif ( $revision->isDeleted( Revision::DELETED_TEXT ) ) {
			$this->dieUsage( 'Revision has been deleted', 'revdeleted' );
		}
		return $revision;
	}

	private function getTitleFromRevision( Revision $revision ) {
		$title = Title::newFromID( $revision->getPage() );
		if ( !$title instanceof Title ) {
			$this->dieUsage( 'Page title could not be retrieved', 'notitle' );
		}
		return $title;
	}

	/**
	 * Set the source of the thanks, e.g. 'diff' or 'history'
	 */
	private function getSourceFromParams( $params ) {
		if ( $params['source'] ) {
			return trim( $params['source'] );
		} else {
			return 'undefined';
		}
	}

	private function getUserFromRevision( Revision $revision ) {
		$recipient = $revision->getUser();
		if ( !$recipient ) {
			$this->dieUsage( 'No valid recipient found', 'invalidrecipient' );
		}
		return User::newFromId( $recipient );
	}

	private function sendThanks( User $user, Revision $revision, User $recipient, $source  ) {
		$uniqueId = "rev-{$revision->getId()}";
		// Do one last check to make sure we haven't sent Thanks before
		if ( $this->haveAlreadyThanked( $user, $uniqueId ) ) {
			// Pretend the thanks were sent
			$this->markResultSuccess( $recipient->getName() );
			return;
		}

		$title = $this->getTitleFromRevision( $revision );
		// Create the notification via Echo extension
		EchoEvent::create( array(
			'type' => 'edit-thank',
			'title' => $title,
			'extra' => array(
				'revid' => $revision->getId(),
				'thanked-user-id' => $recipient->getId(),
				'source' => $source,
			),
			'agent' => $user,
		) );

		// And mark the thank in session for a cheaper check to prevent duplicates (Bug 46690).
		$user->getRequest()->setSessionData( "thanks-thanked-{$revision->getId()}", true );
		// Set success message
		$this->markResultSuccess( $recipient->getName() );
		$this->logThanks( $user, $recipient, $uniqueId );
	}

	/**
	 * @deprecated since MediaWiki core 1.25
	 */
	public function getDescription() {
		return array(
			'This API is for sending thank you notifications from one editor to another.',
		);
	}

	/**
	 * @deprecated since MediaWiki core 1.25
	 */
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

	public function getHelpUrls() {
		return array(
			'https://www.mediawiki.org/wiki/Extension:Thanks#API_Documentation',
		);
	}

	/**
	 * @deprecated since MediaWiki core 1.25
	 */
	public function getExamples() {
		return array(
			'api.php?action=thank&revid=123&source=diff&token=xyz456'
				=> 'Send thanks for revision with the ID 123, with the source being a diff page',
		);
	}

	/**
	 * @see ApiBase::getExamplesMessages()
	 */
	protected function getExamplesMessages() {
		return array(
			'action=thank&revid=456&source=diff&token=123ABC'
				=> 'apihelp-thank-example-1',
		);
	}
}
