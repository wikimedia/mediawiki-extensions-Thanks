<?php
class EchoThanksPresentationModel extends EchoEventPresentationModel {
	public function canRender() {
		return (bool)$this->event->getTitle();
	}

	public function getIconType() {
		return 'thanks';
	}

	public function getHeaderMessage() {
		if ( $this->isBundled() ) {
			$msg = $this->msg( 'notification-bundle-header-edit-thank' );
			$msg->params( $this->getBundleCount() );
			$msg->params( $this->getTruncatedTitleText( $this->event->getTitle(), true ) );
			$msg->params( $this->getViewingUserForGender() );
			return $msg;
		} else {
			$msg = $this->getMessageWithAgent( 'notification-header-edit-thank' );
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
		$comment = $this->getEditComment();
		if ( $comment ) {
			$msg = new RawMessage( '$1' );
			$msg->plaintextParams( $comment );
			return $msg;
		}
	}

	private function getRevisionEditSummary() {
		if ( !$this->userCan( Revision::DELETED_COMMENT ) ) {
			return false;
		}

		$revId = $this->event->getExtraParam( 'revid', false );
		if ( !$revId ) {
			return false;
		}

		$revision = Revision::newFromId( $revId );
		if ( !$revision ) {
			return false;
		}

		$summary = $revision->getComment( Revision::RAW );
		return $summary ?: false;
	}

	private function getEditComment() {
		// try to get edit summary
		$summary = $this->getRevisionEditSummary();
		if ( $summary ) {
			return $summary;
		}

		// fallback on edit excerpt
		if ( $this->userCan( Revision::DELETED_TEXT ) ) {
			return $this->event->getExtraParam( 'excerpt', false );
		}
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
		$pageLink = $this->getPageLink( $this->event->getTitle(), null, true );
		if ( $this->isBundled() ) {
			return [ $pageLink ];
		} else {
			return [ $this->getAgentLink(), $pageLink ];
		}
	}
}
