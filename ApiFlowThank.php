<?php
/**
 * API module to send Flow thanks notifications
 *
 * This API does not prevent sending thanks using post IDs that refer to topic
 * titles, though Thank buttons are only shown for comments in the UI.
 *
 * @ingroup API
 * @ingroup Extensions
 */

use Flow\Container;
use Flow\Data\RootPostLoader;
use Flow\Exception\FlowException;
use Flow\Model\PostRevision;
use Flow\Model\UUID;

class ApiFlowThank extends ApiThank {
	public function execute() {
		$this->dieIfFlowNotInstalled();
		$this->dieIfEchoNotInstalled();

		$user = $this->getUser();
		$this->dieOnBadUser( $user );

		$params = $this->extractRequestParams();

		try {
			$postId = UUID::create( $params['postid'] );
		} catch ( FlowException $e ) {
			$this->dieUsage( 'Post ID is invalid', 'invalidpostid' );
		}

		$data = $this->getFlowData( $postId );

		$recipient = $this->getRecipientFromPost( $data['post'] );
		$this->dieOnBadRecipient( $user, $recipient );

		if ( $this->userAlreadySentThanksForId( $user, $postId ) ) {
			$this->markResultSuccess( $recipient->getName() );
			return;
		}

		$rootPost = $data['root'];
		$workflowId = $rootPost->getPostId();
		$rawTopicTitleText = Container::get( 'templating' )->getContent( $rootPost, 'wikitext' );
		// Truncate the title text to prevent issues with database storage.
		$topicTitleText = $this->getLanguage()->truncate( $rawTopicTitleText, 200 );
		$pageTitle = $this->getPageTitleFromRootPost( $rootPost );

		$this->sendThanks(
			$user,
			$recipient,
			$postId,
			$workflowId,
			$topicTitleText,
			$pageTitle
		);
	}

	private function dieIfFlowNotInstalled() {
		if ( !class_exists( 'FlowHooks' ) ) {
			$this->dieUsage( 'Flow is not installed on this wiki', 'flownotinstalled' );
		}
	}

	private function userAlreadySentThanksForId( User $user, UUID $id ) {
		return $user->getRequest()->getSessionData( "flow-thanked-{$id->getAlphadecimal()}" );
	}

	/**
	 * @param UUID $postId UUID of the post to thank for
	 * @return array containing 'post' and 'root' as keys
	 */
	private function getFlowData( UUID $postId ) {
		$rootPostLoader = Container::get( 'loader.root_post' );

		try {
			$data = $rootPostLoader->getWithRoot( $postId );
		} catch ( FlowException $e ) {
			$this->dieUsage( 'Post ID is invalid', 'invalidpostid' );
		}

		if ( $data['post'] === null ) {
			$this->dieUsage( 'Post ID is invalid', 'invalidpostid' );
		}
		return $data;
	}

	/**
	 * @param PostRevision $post
	 * @return User
	 */
	private function getRecipientFromPost( PostRevision $post ) {
		$recipient = User::newFromId( $post->getCreatorId() );
		if ( !$recipient->loadFromId() ) {
			$this->dieUsage( 'Recipient is invalid', 'invalidrecipient' );
		}
		return $recipient;
	}

	/**
	 * @param PostRevision $rootPost
	 * @return Title
	 */
	private function getPageTitleFromRootPost( PostRevision $rootPost ) {
		$workflow = Container::get( 'storage' )->get( 'Workflow', $rootPost->getPostId() );
		return $workflow->getArticleTitle();
	}

	/**
	 * @param User $user
	 * @param User $recipient
	 * @param UUID $postId
	 * @param UUID $workflowId
	 * @param string $topicTitleText
	 * @param Title $pageTitle
	 */
	private function sendThanks( User $user, User $recipient, UUID $postId, UUID $workflowId,
		$topicTitleText, Title $pageTitle ) {

		global $wgThanksLogging;

		// Create the notification via Echo extension
		EchoEvent::create( array(
			'type' => 'flow-thank',
			'title' => $pageTitle,
			'extra' => array(
				'post-id' => $postId->getAlphadecimal(),
				'workflow' => $workflowId->getAlphadecimal(),
				'thanked-user-id' => $recipient->getId(),
				'topic-title' => $topicTitleText,
			),
			'agent' => $user,
		) );

		// Mark the thank in session to prevent duplicates (Bug 46690).
		$user->getRequest()->setSessionData( "flow-thanked-{$postId->getAlphadecimal()}", true );
		// Set success message.
		$this->markResultSuccess( $recipient->getName() );
		// Log it if we're supposed to log it.
		if ( $wgThanksLogging ) {
			$this->logThanks( $user, $recipient );
		}
	}

	public function getDescription() {
		return array(
			'This API is for sending thank you notifications for Flow comments.',
		);
	}

	public function getParamDescription() {
		return array(
			'postid' => 'The UUID of the post to thank for',
			'token' => 'An edit token (to prevent CSRF abuse)',
		);
	}

	public function getAllowedParams() {
		return array(
			'postid' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'token' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
		);
	}

	public function getExamples() {
		return array(
			'api.php?action=flowthank&postid=abc123&token=xyz456+\\'
				=> 'Send thanks for the comment with UUID abc123',
		);
	}
}
