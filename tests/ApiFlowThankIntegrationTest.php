<?php

use Flow\Model\AbstractRevision;
use Flow\Model\PostRevision;
use Flow\Model\UUID;

/**
 * Integration tests for the Thanks Flow api module
 *
 * @covers ApiFlowThank
 *
 * @group Thanks
 * @gropu Database
 * @group medium
 * @group API
 * @group Flow
 *
 * @author Benjamin Chen
 */
class ApiFlowThankTest extends ApiTestCase {
	/**
	 * @var PostRevision
	 */
	public
		$topic,
		$postByOtherUser,
		$postByMe;

	public function setUp() {
		parent::setUp();

		if ( !class_exists( 'FlowHooks' ) ) {
			$this->markTestSkipped( 'Flow is not installed' );
		}

		// mock topic and post
		$this->topic = $this->generateObject();
		$this->postByOtherUser = $this->generateObject( array(
				'tree_orig_user_id' => self::$users[ 'uploader' ]->getUser()->getId(),
				'tree_parent_id' => $this->topic->getPostId()->getBinary(),
			), array(), 1 );
		$this->postByMe = $this->generateObject( array(
				'tree_orig_user_id' => self::$users[ 'sysop' ]->getUser()->getId(),
				'tree_parent_id' => $this->topic->getPostId()->getBinary(),
			), array(), 1 );

		// Set up mock classes in Container.
		$mockLoader = $this->getMockBuilder( '\Flow\Repository\RootPostLoader' )
			->disableOriginalConstructor()
			->getMock();
		$that = $this;
		$mockLoader->expects( $this->any() )
			->method( 'getWithRoot' )
			->will( $this->returnCallback(
				// Hard to work with class variables or callbacks,
				// using anonymous function instead.
				function( $postId ) use ( $that ) {
					switch ( $postId ) {
						case $that->postByOtherUser->getPostId():
							return array(
								'post' => $that->postByOtherUser,
								'root' => $that->topic
							);

						case $that->postByMe->getPostId():
							return array(
								'post' => $that->postByMe,
								'root' => $that->topic
							);

						default:
							return array( 'post' => null );
					}
				}
			) );

		$mockWorkflow = $this->getMock( '\Flow\Model\Workflow' );
		$mockWorkflow->expects( $this->any() )
			->method( 'getOwnerTitle' )
			->will( $this->returnValue( new Title() ));

		$mockStorage = $this->getMockBuilder( '\Flow\Data\ManagerGroup' )
			->disableOriginalConstructor()
			->getMock();

		$mockStorage->expects( $this->any() )
			->method( 'get' )
			->will( $this->returnValue( $mockWorkflow ) );


		$mockTemplating = $this->getMockBuilder( 'Flow\Templating' )
			->disableOriginalConstructor()
			->getMock();

		$mockTemplating->expects( $this->any() )
			->method( 'getContent' )
			->will( $this->returnValue( 'test content' ) );

		Flow\Container::reset();
		$container = Flow\Container::getContainer();
		$container[ 'loader.root_post' ] = $mockLoader;
		$container[ 'storage' ] = $mockStorage;
		$container[ 'templating' ] = $mockTemplating;

		$this->doLogin( 'sysop' );
		\DeferredUpdates::clearPendingUpdates();
	}

	public function testRequestWithoutToken(){
		$this->setExpectedException( 'UsageException', 'The token parameter must be set' );
		$this->doApiRequest( array(
			'action' => 'flowthank',
			'postid' => UUID::create( '42' )->getAlphadecimal(),
		) );
	}

	public function testInvalidRequest(){
		$this->setExpectedException( 'UsageException', 'The postid parameter must be set' );
		$this->doApiRequestWithToken( array( 'action' => 'flowthank' ) );
	}

	public function testValidRequest(){
		list( $result,, ) = $this->doApiRequestWithToken( array(
			'action' => 'flowthank',
			'postid' => $this->postByOtherUser->getPostId()->getAlphadecimal(),
		) );
		$this->assertSuccess( $result );
	}

	public function testRequestWithInvalidId(){
		$this->setExpectedException( 'UsageException', 'Post ID is invalid' );
		list( $result,, ) = $this->doApiRequestWithToken( array(
			'action' => 'flowthank',
			'postid' => UUID::create( '42' )->getAlphadecimal(),
		) );
	}

	public function testRequestWithOwnId(){
		$this->setExpectedException( 'UsageException', 'You cannot thank yourself' );
		list( $result,, ) = $this->doApiRequestWithToken( array(
			'action' => 'flowthank',
			'postid' => $this->postByMe->getPostId()->getAlphadecimal(),
		) );
	}

	protected function assertSuccess( $result ){
		$this->assertEquals( 1, $result[ 'result' ][ 'success' ] );
	}


	/**
	 * This method is obtained from Flow/tests/PostRevisionTestCase.php
	 *
	 * Returns an array, representing flow_revision & flow_tree_revision db
	 * columns.
	 *
	 * You can pass in arguments to override default data.
	 * With no arguments tossed in, default data (resembling a newly-created
	 * topic title) will be returned.
	 *
	 * @param array[optional] $row DB row data (only specify override columns)
	 * @return array
	 */
	protected function generateRow( array $row = array() ) {
		$uuidPost = UUID::create();
		$uuidRevision = UUID::create();

		$user = User::newFromName( 'UTSysop' );
		$userId = $user->getId();
		$userIp = null;

		return $row + array(
			// flow_revision
			'rev_id' => $uuidRevision->getBinary(),
			'rev_type' => 'post',
			'rev_user_id' => $userId,
			'rev_user_ip' => $userIp,
			'rev_user_wiki' => wfWikiId(),
			'rev_parent_id' => null,
			'rev_flags' => 'html',
			'rev_content' => 'test content',
			'rev_change_type' => 'new-post',
			'rev_mod_state' => AbstractRevision::MODERATED_NONE,
			'rev_mod_user_id' => null,
			'rev_mod_user_ip' => null,
			'rev_mod_user_wiki' => null,
			'rev_mod_timestamp' => null,
			'rev_mod_reason' => null,
			'rev_last_edit_id' => null,
			'rev_edit_user_id' => null,
			'rev_edit_user_ip' => null,
			'rev_edit_user_wiki' => null,

			// flow_tree_revision
			'tree_rev_descendant_id' => $uuidPost->getBinary(),
			'rev_type_id' => $uuidPost->getBinary(),
			'tree_rev_id' => $uuidRevision->getBinary(),
			'tree_orig_create_time' => wfTimestampNow(),
			'tree_orig_user_id' => $userId,
			'tree_orig_user_ip' => $userIp,
			'tree_orig_user_wiki' => wfWikiId(),
			'tree_parent_id' => null,
		);
	}

	/**
	 * This method is obtained from Flow/tests/PostRevisionTestCase.php
	 *
	 * Returns a PostRevision object.
	 *
	 * You can pass in arguments to override default data.
	 * With no arguments tossed in, a default revision (resembling a newly-
	 * created topic title) will be returned.
	 *
	 * @param array[optional] $row DB row data (only specify override columns)
	 * @param array[optional] $children Array of child PostRevision objects
	 * @param int[optional] $depth Depth of the PostRevision object
	 * @return PostRevision
	 */
	protected function generateObject( array $row = array(), $children = array(), $depth = 0 ) {
		$row = $this->generateRow( $row );

		$revision = PostRevision::fromStorageRow( $row );
		$revision->setChildren( $children );
		$revision->setDepth( $depth );

		return $revision;
	}

}
