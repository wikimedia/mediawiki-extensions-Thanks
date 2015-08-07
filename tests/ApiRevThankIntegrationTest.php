<?php

/**
 * Integration tests for the Thanks API module
 *
 * @covers ApiRevThank
 *
 * @group Thanks
 * @group Database
 * @group medium
 * @group API
 *
 * @author Adam Shorland
 */
class ApiRevThankTest extends ApiTestCase {

	public function setUp() {
		parent::setUp();
		$this->doLogin( 'sysop' );
		\DeferredUpdates::clearPendingUpdates();
	}

	public function testRequestWithoutToken(){
		$this->setExpectedException( 'UsageException', 'The token parameter must be set' );
		$this->doApiRequest( array(
			'action' => 'thank',
			'source' => 'someSource',
			'rev' => 1,
		) );
	}

	public function testValidRequest(){
		list( $result,, ) = $this->doApiRequestWithToken( array(
			'action' => 'thank',
			'rev' => $this->newRevId(),
		) );
		$this->assertSuccess( $result );
	}

	public function testValidRequestWithSource(){
		list( $result,, ) = $this->doApiRequestWithToken( array(
			'action' => 'thank',
			'source' => 'someSource',
			'rev' => $this->newRevId(),
		) );
		$this->assertSuccess( $result );
	}

	protected function newRevId(){
		// You can't thank yourself, kind of hacky
		$this->setMwGlobals( 'wgUser', self::$users['uploader']->getUser() );

		/** @var Status $result */
		$result = $this->editPage( 'thanks' . rand( 0, 100 ), 'thanks' . rand( 0, 100 ), 'thanksSummary' );
		$result = $result->getValue();
		/** @var Revision $revision */
		$revision = $result['revision'];

		$this->setMwGlobals( 'wgUser', self::$users['sysop']->getUser() );

		return $revision->getId();
	}

	protected function assertSuccess( $result ){
		$this->assertEquals( array(
			'result' => array(
				'success' => 1,
				'recipient' => self::$users['uploader']->username,
			),
		), $result );
	}

	public function testInvalidRequest(){
		$this->setExpectedException( 'UsageException' );
		$this->doApiRequestWithToken( array( 'action' => 'thank' ) );
	}

}
