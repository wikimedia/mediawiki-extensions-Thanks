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
		$msg->params( $this->event->getTitle()->getPrefixedText() );

		$msg->params( $this->getViewingUserForGender() );
		return $msg;
	}

	public function getPrimaryLink() {
		return array(
			$this->event->getTitle()->getLocalURL( array(
				'oldid' => 'prev',
				'diff' => $this->event->getExtraParam( 'revid' )
			) ),
			$this->msg( 'notification-link-text-view-edit' )->text()
		);
	}

	// TODO add thanking user as secondary link once we can make that look nice (T115421)
	/*
	public function getSecondaryLinks() {
		$agent = $this->event->getAgent();
		if ( !$agent || !$this->userCan( Revision::DELETED_USER ) ) {
			return array();
		}

		$url = $agent->getUserPage()->getLocalURL();
		return array(
			$url => $agent->getName()
		);
	}
	*/
}
