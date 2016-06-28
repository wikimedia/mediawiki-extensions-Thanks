<?php

class EchoFlowThanksPresentationModel extends Flow\FlowPresentationModel {
	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	public function getIconType() {
		return 'thanks';
	}

	public function getHeaderMessage() {
		if ( $this->isBundled() ) {
			$msg = $this->msg( 'notification-bundle-header-flow-thank' );
			$msg->params( $this->getBundleCount() );
			$msg->plaintextParams( $this->getTopicTitle() );
			$msg->params( $this->getViewingUserForGender() );
			return $msg;
		} else {
			$msg = parent::getHeaderMessage();
			$msg->plaintextParams( $this->getTopicTitle() );
			$msg->params( $this->getTruncatedTitleText( $this->event->getTitle(), true ) );
			$msg->params( $this->getViewingUserForGender() );
			return $msg;
		}
	}

	public function getCompactHeaderMessage() {
		$msg = parent::getCompactHeaderMessage();
		$msg->params( $this->getViewingUserForGender() );
		return $msg;
	}

	public function getBodyMessage() {
		$excerpt = $this->event->getExtraParam( 'excerpt' );
		if ( $excerpt ) {
			$msg = new RawMessage( '$1' );
			$msg->plaintextParams( $excerpt );
			return $msg;
		}
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
		if ( $this->isBundled() ) {
			return [ $this->getBoardLink() ];
		} else {
			return [ $this->getAgentLink(), $this->getBoardLink() ];
		}
	}
}
