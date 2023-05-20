<?php

use MediaWiki\Block\DatabaseBlock;
use MediaWiki\Extension\Thanks\ApiCoreThank;
use MediaWiki\User\UserIdentityValue;

/**
 * Unit tests for the Thanks API module
 *
 * @group Thanks
 * @group API
 *
 * @author Addshore
 */
class ApiCoreThankUnitTest extends ApiTestCase {

	protected function getModule() {
		return new ApiCoreThank( new ApiMain(), 'thank' );
	}

	private static function createBlock( $options ) {
		$options = array_merge( [
			'address' => 'Test user',
			'by' => new UserIdentityValue( 1, 'TestUser' ),
			'reason' => __METHOD__,
			'timestamp' => wfTimestamp( TS_MW ),
			'expiry' => 'infinity',
		], $options );
		return new DatabaseBlock( $options );
	}

	/**
	 * @dataProvider provideDieOnBadUser
	 * @covers \MediaWiki\Extension\Thanks\ApiThank::dieOnBadUser
	 * @covers \MediaWiki\Extension\Thanks\ApiThank::dieOnUserBlockedFromThanks
	 */
	public function testDieOnBadUser(
		$mockAnon,
		$mockPingLimited,
		$mockBlock,
		$dieMethod,
		$expectedError
	) {
		$user = $this->createMock( User::class );
		if ( $mockAnon !== null ) {
			$user->expects( $this->once() )
				->method( 'isAnon' )
				->willReturn( $mockAnon );
		}
		if ( $mockPingLimited !== null ) {
			$user->expects( $this->once() )
				->method( 'pingLimiter' )
				->willReturn( $mockPingLimited );
		}
		if ( $mockBlock !== null ) {
			$user->expects( $this->once() )
				->method( 'getBlock' )
				->willReturn( $mockBlock );
		}

		$module = $this->getModule();
		$method = new ReflectionMethod( $module, $dieMethod );
		$method->setAccessible( true );

		if ( $expectedError ) {
			$this->expectApiErrorCode( $expectedError );
		}

		$method->invoke( $module, $user );
		// perhaps the method should return true.. For now we must do this
		$this->assertTrue( true );
	}

	public static function provideDieOnBadUser() {
		return [
			'anon' => [
				true,
				null,
				null,
				'dieOnBadUser',
				'notloggedin'
			],
			'ping' => [
				false,
				true,
				null,
				'dieOnBadUser',
				'ratelimited'
			],
			'sitewide blocked' => [
				null,
				null,
				self::createBlock( [] ),
				'dieOnUserBlockedFromThanks',
				'blocked'
			],
			'partial blocked' => [
				null,
				null,
				self::createBlock( [ 'sitewide' => false ] ),
				'dieOnUserBlockedFromThanks',
				false
			],
		];
	}

	// @todo test userAlreadySentThanksForRevision
	// @todo test getRevisionFromParams
	// @todo test getTitleFromRevision
	// @todo test getSourceFromParams
	// @todo test getUserIdFromRevision
	// @todo test markResultSuccess
	// @todo test sendThanks

}
