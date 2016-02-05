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
		$msg->params( $this->language->truncate( $this->event->getExtraParam( 'topic-title' ), self::SECTION_TITLE_RECOMMENDED_LENGTH ) );
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

		return array(
			'url' => $title->getFullURL( array(
				'workflow' => $this->event->getExtraParam( 'workflow' )
			) ),
			'label' => $this->msg( 'notification-link-text-view-post' )->text(),
		);
	}

	public function getSecondaryLinks() {
		$titleLink = array(
			'url' => $this->event->getTitle()->getLocalURL(),
			'label' => $this->event->getTitle()->getPrefixedText(),
			'description' => '',
			'icon' => 'speechBubbles',
			'prioritized' => true,
		);

		return array( $this->getAgentLink(), $titleLink );
	}
}
