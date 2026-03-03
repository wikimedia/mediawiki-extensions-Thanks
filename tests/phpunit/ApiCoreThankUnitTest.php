<?php

use MediaWiki\Api\ApiMain;
use MediaWiki\Api\ApiUsageException;
use MediaWiki\Block\DatabaseBlock;
use MediaWiki\Block\UserBlockTarget;
use MediaWiki\Extension\Thanks\Api\ApiCoreThank;
use MediaWiki\Tests\Api\ApiTestCase;
use MediaWiki\User\TempUser\TempUserDetailsLookup;
use MediaWiki\User\User;
use MediaWiki\User\UserIdentityValue;

/**
 * Unit tests for the Thanks API module
 *
 * @group Thanks
 * @group API
 * @group Database
 *
 * @author Addshore
 */
class ApiCoreThankUnitTest extends ApiTestCase {

	protected function getModule() {
		$services = $this->getServiceContainer();
		return new ApiCoreThank(
			new ApiMain(),
			'thank',
			$services->getPermissionManager(),
			$services->getService( 'ThanksLogStore' ),
			$services->getNotificationService(),
			$services->getRevisionStore(),
			$services->getUserFactory(),
			$services->getTempUserDetailsLookup()
		);
	}

	private static function makeBlockParams( $options ) {
		$options = array_merge( [
			'target' => new UserBlockTarget( new UserIdentityValue( 2, 'Test user' ) ),
			'by' => new UserIdentityValue( 1, 'TestUser' ),
			'reason' => __METHOD__,
			'timestamp' => wfTimestamp( TS_MW ),
			'expiry' => 'infinity',
		], $options );
		return $options;
	}

	/**
	 * @dataProvider provideDieOnBadUser
	 * @covers \MediaWiki\Extension\Thanks\Api\ApiThank::dieOnBadUser
	 * @covers \MediaWiki\Extension\Thanks\Api\ApiThank::dieOnUserBlockedFromThanks
	 */
	public function testDieOnBadUser(
		$mockisNamed,
		$mockPingLimited,
		$mockBlockParams,
		$dieMethod,
		$expectedError
	) {
		$user = $this->createMock( User::class );
		if ( $mockisNamed !== null ) {
			$user->expects( $this->once() )
				->method( 'isNamed' )
				->willReturn( $mockisNamed );
		}
		if ( $mockPingLimited !== null ) {
			$user->expects( $this->once() )
				->method( 'pingLimiter' )
				->willReturn( $mockPingLimited );
		}
		if ( $mockBlockParams !== null ) {
			$mockBlock = new DatabaseBlock( $mockBlockParams );
			$user->expects( $this->once() )
				->method( 'getBlock' )
				->willReturn( $mockBlock );
		}

		$module = $this->getModule();
		$method = new ReflectionMethod( $module, $dieMethod );

		if ( $expectedError ) {
			$this->expectApiErrorCodeFromCallback( $expectedError, static function () use ( $method, $module, $user ) {
				$method->invoke( $module, $user );
			} );
		} else {
			$method->invoke( $module, $user );
			// perhaps the method should return true.. For now we must do this
			$this->assertTrue( true );
		}
	}

	public static function provideDieOnBadUser() {
		return [
			'anon' => [
				false,
				null,
				null,
				'dieOnBadUser',
				'notloggedin',
			],
			'ping' => [
				true,
				true,
				null,
				'dieOnBadUser',
				'ratelimited',
			],
			'sitewide blocked' => [
				null,
				null,
				self::makeBlockParams( [] ),
				'dieOnUserBlockedFromThanks',
				'blocked',
			],
			'partial blocked' => [
				null,
				null,
				self::makeBlockParams( [ 'sitewide' => false ] ),
				'dieOnUserBlockedFromThanks',
				false,
			],
		];
	}

	/**
	 * @covers \MediaWiki\Extension\Thanks\Api\ApiThank::dieOnBadRecipient
	 */
	public function testDieOnBadRecipientExpiredTempUser() {
		$tempUserDetailsLookup = $this->createMock( TempUserDetailsLookup::class );
		$tempUserDetailsLookup->method( 'isExpired' )
			->willReturn( true );

		$services = $this->getServiceContainer();
		$module = new ApiCoreThank(
			new ApiMain(),
			'thank',
			$services->getPermissionManager(),
			$services->getService( 'ThanksLogStore' ),
			$services->getNotificationService(),
			$services->getRevisionStore(),
			$services->getUserFactory(),
			$tempUserDetailsLookup
		);

		$user = $this->createMock( User::class );
		$user->method( 'getId' )->willReturn( 1 );
		$recipient = $this->createMock( User::class );
		$recipient->method( 'getId' )->willReturn( 2 );

		$method = new ReflectionMethod( $module, 'dieOnBadRecipient' );

		try {
			$method->invoke( $module, $user, $recipient );
			$this->fail( 'Expected ApiUsageException for an expired temporary recipient' );
		} catch ( ApiUsageException $exception ) {
			$this->assertApiErrorCode( 'invalidrecipient', $exception );
			$this->assertStatusMessage(
				'thanks-error-invalidrecipient-expired',
				$exception->getStatusValue()
			);
		}
	}

	// @todo test userAlreadySentThanksForRevision
	// @todo test getRevisionFromParams
	// @todo test getTitleFromRevision
	// @todo test getSourceFromParams
	// @todo test getUserIdFromRevision
	// @todo test markResultSuccess
	// @todo test sendThanks

}
