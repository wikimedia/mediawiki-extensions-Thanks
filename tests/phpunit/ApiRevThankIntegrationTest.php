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
 * @author Addshore
 */
class ApiRevThankIntegrationTest extends ApiTestCase {

	/**
	 * @var int filled in setUp
	 */
	private $revId;

	public function setUp() {
		parent::setUp();

		// You can't thank yourself, kind of hacky but just use this other user
		$this->doLogin( 'uploader' );
		$result = $this->editPage( __CLASS__ . rand( 0, 100 ), __CLASS__ . rand( 0, 100 ) );
		/** @var Status $result */
		$result = $result->getValue();
		/** @var Revision $revision */
		$revision = $result['revision'];
		$this->revId = $revision->getId();

		$this->doLogin( 'sysop' );
		DeferredUpdates::clearPendingUpdates();
	}

	public function testRequestWithoutToken() {
		$this->setExpectedException( 'ApiUsageException', 'The "token" parameter must be set.' );
		$this->doApiRequest( [
			'action' => 'thank',
			'source' => 'someSource',
			'rev' => 1,
		] );
	}

	public function testValidRequest() {
		list( $result,, ) = $this->doApiRequestWithToken( [
			'action' => 'thank',
			'rev' => $this->revId,
		] );
		$this->assertSuccess( $result );
	}

	public function testValidRequestWithSource() {
		list( $result,, ) = $this->doApiRequestWithToken( [
			'action' => 'thank',
			'source' => 'someSource',
			'rev' => $this->revId,
		] );
		$this->assertSuccess( $result );
	}

	protected function assertSuccess( $result ) {
		$this->assertEquals( [
			'result' => [
				'success' => 1,
				'recipient' => self::$users['uploader']->getUser()->getName(),
			],
		], $result );
	}

	public function testInvalidRequest() {
		$this->setExpectedException( 'ApiUsageException' );
		$this->doApiRequestWithToken( [ 'action' => 'thank' ] );
	}

}
