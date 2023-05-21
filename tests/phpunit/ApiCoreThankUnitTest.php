<?php

use MediaWiki\Block\DatabaseBlock;
use MediaWiki\Extension\Thanks\Api\ApiCoreThank;
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
		$services = $this->getServiceContainer();
		return new ApiCoreThank(
			new ApiMain(),
			'thank',
			$services->getPermissionManager(),
			$services->getRevisionStore(),
			$services->getUserFactory(),
			$services->getService( 'LogStore' )
		);
	}

	private function createBlock( $options ) {
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
	 * @covers \MediaWiki\Extension\Thanks\Api\ApiThank::dieOnBadUser
	 * @covers \MediaWiki\Extension\Thanks\Api\ApiThank::dieOnUserBlockedFromThanks
	 */
	public function testDieOnBadUser( $user, $dieMethod, $expectedError ) {
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

	public function provideDieOnBadUser() {
		$testCases = [];

		$mockUser = $this->createMock( User::class );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->willReturn( true );

		$testCases[ 'anon' ] = [
			$mockUser,
			'dieOnBadUser',
			'notloggedin'
		];

		$mockUser = $this->createMock( User::class );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->willReturn( false );
		$mockUser->expects( $this->once() )
			->method( 'pingLimiter' )
			->willReturn( true );

		$testCases[ 'ping' ] = [
			$mockUser,
			'dieOnBadUser',
			'ratelimited'
		];

		$mockUser = $this->createMock( User::class );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->willReturn( false );
		$mockUser->expects( $this->once() )
			->method( 'pingLimiter' )
			->willReturn( false );

		$mockUser = $this->createMock( User::class );
		$mockUser->expects( $this->once() )
			->method( 'getBlock' )
			->willReturn( $this->createBlock( [] ) );

		$testCases[ 'sitewide blocked' ] = [
			$mockUser,
			'dieOnUserBlockedFromThanks',
			'blocked'
		];

		$mockUser = $this->createMock( User::class );
		$mockUser->expects( $this->once() )
			->method( 'getBlock' )
			->willReturn(
				$this->createBlock( [ 'sitewide' => false ] )
			);

		$testCases[ 'partial blocked' ] = [
			$mockUser,
			'dieOnUserBlockedFromThanks',
			false
		];

		return $testCases;
	}

	// @todo test userAlreadySentThanksForRevision
	// @todo test getRevisionFromParams
	// @todo test getTitleFromRevision
	// @todo test getSourceFromParams
	// @todo test getUserIdFromRevision
	// @todo test markResultSuccess
	// @todo test sendThanks

}
