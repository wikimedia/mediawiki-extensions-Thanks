<?php
class EchoThanksPresentationModel extends EchoEventPresentationModel {
	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	public function getIconType() {
		return 'thanks';
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->getTruncatedTitleText( $this->event->getTitle(), true ) );
		$msg->params( $this->getViewingUserForGender() );
		return $msg;
	}

	public function getPrimaryLink() {
		return [
			'url' => $this->event->getTitle()->getLocalURL( [
				'oldid' => 'prev',
				'diff' => $this->event->getExtraParam( 'revid' )
			] ),
			'label' => $this->msg( 'notification-link-text-view-edit' )->text(),
		];
	}

	public function getSecondaryLinks() {
		return [ $this->getAgentLink() ];
	}
}
