<?php

/**
 * Unit tests for the Thanks API module
 *
 * @group Thanks
 * @group API
 *
 * @author Adam Shorland
 */
class ApiRevThankUnitTest extends MediaWikiTestCase {

	static $moduleName = 'thank';

	protected function getModule() {
		return new ApiRevThank( new ApiMain(), self::$moduleName );
	}

	/**
	 * @dataProvider provideDieOnBadUser
	 * @covers ApiThank::dieOnBadUser
	 */
	public function testDieOnBadUser( $user, $expectedError ) {
		$module = $this->getModule();
		$method = new ReflectionMethod( $module, 'dieOnBadUser' );
		$method->setAccessible( true );

		if( $expectedError ) {
			$this->setExpectedException( 'UsageException', $expectedError );
		}

		$method->invoke( $module, $user );
		//perhaps the method should return true.. For now we must do this
		$this->assertTrue( true );
	}

	public function provideDieOnBadUser() {
		$testCases = array();

		$mockUser = $this->getMock( 'User' );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->will( $this->returnValue( true ) );

		$testCases[ 'anon' ] = array( $mockUser, 'Anonymous users cannot send thanks' );

		$mockUser = $this->getMock( 'User' );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->will( $this->returnValue( false ) );
		$mockUser->expects( $this->once() )
			->method( 'pingLimiter' )
			->will( $this->returnValue( true ) );

		$testCases[ 'ping' ] = array( $mockUser, "You've exceeded your rate limit. Please wait some time and try again" );

		$mockUser = $this->getMock( 'User' );
		$mockUser->expects( $this->once() )
			->method( 'isAnon' )
			->will( $this->returnValue( false ) );
		$mockUser->expects( $this->once() )
			->method( 'pingLimiter' )
			->will( $this->returnValue( false ) );
		$mockUser->expects( $this->once() )
			->method( 'isBlocked' )
			->will( $this->returnValue( true ) );

		$testCases[ 'blocked' ] = array( $mockUser, 'You have been blocked from editing' );

		return $testCases;
	}

	//@todo test userAlreadySentThanksForRevision
	//@todo test getRevisionFromParams
	//@todo test getTitleFromRevision
	//@todo test getSourceFromParams
	//@todo test getUserIdFromRevision
	//@todo test markResultSuccess
	//@todo test sendThanks

}
