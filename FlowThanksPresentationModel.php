<?php

class EchoFlowThanksPresentationModel extends Flow\FlowPresentationModel {
	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	public function getIconType() {
		return 'thanks';
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();

		$truncatedTopicTitle = $this->getTopicTitle();
		$msg->plaintextParams( $truncatedTopicTitle );
		$msg->params( $this->getTruncatedTitleText( $this->event->getTitle(), true ) );

		$msg->params( $this->getViewingUserForGender() );
		return $msg;
	}

	public function getPrimaryLink() {
		$title = $this->event->getTitle();
		// Make a link to #flow-post-{postid}
		$title = Title::makeTitle(
			$title->getNamespace(),
			$title->getDBKey(),
			'flow-post-' . $this->event->getExtraParam( 'post-id' )
		);

		return [
			'url' => $title->getFullURL( [
				'workflow' => $this->event->getExtraParam( 'workflow' )
			] ),
			'label' => $this->msg( 'notification-link-text-view-post' )->text(),
		];
	}

	public function getSecondaryLinks() {
		return [ $this->getAgentLink(), $this->getBoardLink() ];
	}
}
