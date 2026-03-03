<?php

namespace MediaWiki\Extension\Thanks\Tests\Unit;

use MediaWiki\Config\HashConfig;
use MediaWiki\Extension\Thanks\Hooks;
use MediaWiki\User\TempUser\TempUserDetailsLookup;
use MediaWiki\User\User;
use MediaWiki\User\UserFactory;
use MediaWiki\User\UserIdentity;
use MediaWikiUnitTestCase;

/**
 * @covers \MediaWiki\Extension\Thanks\Hooks
 */
class HooksTest extends MediaWikiUnitTestCase {

	/**
	 * @dataProvider provideCanReceiveThanksExpiry
	 */
	public function testCanReceiveThanksExpiry( bool $isExpired, bool $expected ) {
		$recipient = $this->createMock( UserIdentity::class );
		$recipient->method( 'isRegistered' )->willReturn( true );

		$legacyUser = $this->createMock( User::class );
		$legacyUser->method( 'isSystemUser' )->willReturn( false );

		$userFactory = $this->createMock( UserFactory::class );
		$userFactory->method( 'newFromUserIdentity' )->willReturn( $legacyUser );

		$tempUserDetailsLookup = $this->createMock( TempUserDetailsLookup::class );
		$tempUserDetailsLookup->method( 'isExpired' )
			->with( $recipient )
			->willReturn( $isExpired );

		// Allow thanking bots so the bot branch short-circuits and expiry is the only discriminator.
		$config = new HashConfig( [ 'ThanksSendToBots' => true ] );

		$this->assertSame(
			$expected,
			Hooks::canReceiveThanks( $config, $userFactory, $tempUserDetailsLookup, $recipient )
		);
	}

	public static function provideCanReceiveThanksExpiry() {
		return [
			'expired temporary user cannot receive thanks' => [ true, false ],
			'active user can receive thanks' => [ false, true ],
		];
	}

	public static function provideGetSessionKey() {
		return [
			[ 'rev', 123, 'thanks-thanked-rev123' ],
			[ 'revision', 456, 'thanks-thanked-rev456' ],
			[ 'log', '1000', 'thanks-thanked-log1000' ],
			[ 'foo', 'bar', 'thanks-thanked-foobar' ],
		];
	}

	/**
	 * @dataProvider provideGetSessionKey
	 */
	public function testGetSessionKey( string $type, $id, string $expected ) {
		$this->assertSame( $expected, Hooks::getSessionKey( $type, $id ) );
	}

}
