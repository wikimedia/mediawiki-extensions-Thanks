<?php

class EchoFlowThanksFormatter extends EchoBasicFormatter {

	/**
	 * @param $event EchoEvent
	 * @param $param
	 * @param $message Message
	 * @param $user User
	 */
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'postlink' ) {
			$this->setTitleLink(
				$event,
				$message,
				array(
					'class' => 'mw-echo-diff',
					'linkText' => $this->getMessage( 'notification-flow-thanks-post-link' )->text(),
					'param' => array(
						'workflow' => $event->getExtraParam( 'workflow' ),
					),
					'fragment' => "flow-post-{$event->getExtraParam( 'post-id' )}",
				)
			);
		} elseif ( $param === 'topictitle' ) {
			$message->params( $event->getExtraParam( 'topic-title' ) );
		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}

	/**
	 * Overriding implementation in EchoBasicFormatter to support Flow posts
	 *
	 * @param EchoEvent $event
	 * @param User $user The user receiving the notification
	 * @param String $destination The destination type for the link, e.g. 'agent'
	 * @return Array including target and query parameters
	 */
	protected function getLinkParams( $event, $user, $destination ) {
		$target = null;
		$query = array();

		if ( $destination === 'post' ) {
			$target = $event->getTitle();
			if ( $target ) {
				$target->setFragment( '#flow-post-' . $event->getExtraParam( 'post-id' ) );
				$query['workflow'] = $event->getExtraParam( 'workflow' );
			}
			return array( $target, $query );
		} else {
			return parent::getLinkParams( $event, $user, $destination );
		}
	}
}
