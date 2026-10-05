<?php

declare( strict_types=1 );

namespace MediaWiki\Extension\Thanks;

interface UserThankedListener {
	public function handleUserThankedEvent( UserThankedEvent $event ): void;
}
