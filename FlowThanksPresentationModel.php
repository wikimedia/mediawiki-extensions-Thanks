<?php
class EchoFlowThanksPresentationModel extends EchoEventPresentationModel {
	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	public function getIconType() {
		return 'thanks';
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'topic-title' ) );
		$msg->params( $this->event->getTitle()->getPrefixedText() );

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

		return array(
			$title->getFullURL( array(
				'workflow' => $this->event->getExtraParam( 'workflow' )
			) ),
			$this->msg( 'notification-link-text-view-post' )->text()
		);
	}

	public function getSecondaryLinks() {
		$agent = $this->event->getAgent();
		if ( !$agent || !$this->userCan( Revision::DELETED_USER ) ) {
			return array();
		}

		return array(
			array(
				'url' => $agent->getUserPage()->getLocalURL(),
				'label' => $agent->getName(),
				'icon' => 'userAvatar',
				'prioritized' => true,
			),
			array(
				'url' => $this->event->getTitle()->getLocalURL(),
				'label' => $this->event->getTitle()->getPrefixedText(),
				'icon' => 'speechBubbles',
				'prioritized' => true,
			),
		);
	}
}
