<?php

declare( strict_types=1 );

namespace MediaWiki\Extension\Thanks;

use MediaWiki\DomainEvent\DomainEvent;
use MediaWiki\User\UserIdentity;
use Wikimedia\Timestamp\ConvertibleTimestamp;

class UserThankedEvent extends DomainEvent {
	public const TYPE = 'UserThanked';

	public function __construct(
		private readonly UserIdentity $performer,
		private readonly UserIdentity $recipient,
		ConvertibleTimestamp $timestamp,
	) {
		parent::__construct( $timestamp );
		$this->declareEventType( self::TYPE );
	}

	public function getPerformer(): UserIdentity {
		return $this->performer;
	}

	public function getRecipient(): UserIdentity {
		return $this->recipient;
	}
}
