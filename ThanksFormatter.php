<?php

class EchoThanksFormatter extends EchoBasicFormatter {

	/**
	 * @param $event EchoEvent
	 * @param $param
	 * @param $message Message
	 * @param $user User
	 */
	protected function processParam( $event, $param, $message, $user ) {
		if ( $param === 'difflink' ) {
			$eventData = $event->getExtra();
			if ( !isset( $eventData['revid'] ) ) {
				$message->params( '' );
				return;
			}
			$this->setTitleLink(
				$event,
				$message,
				array(
					'class' => 'mw-echo-diff',
					'linkText' => wfMessage( 'notification-thanks-diff-link' )->text(),
					'param' => array(
						'oldid' => $eventData['revid'],
						'diff' => 'prev',
					)
				)
			);

		} else {
			parent::processParam( $event, $param, $message, $user );
		}
	}
}
