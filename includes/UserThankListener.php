<?php

declare( strict_types=1 );

namespace MediaWiki\Extension\Thanks;

interface UserThankListener {
	public function handleUserThankEvent( UserThankEvent $event ): void;
}
