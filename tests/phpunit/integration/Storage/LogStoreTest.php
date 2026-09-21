<?php

namespace MediaWiki\Extension\Thanks\Tests\Integration\Storage;

use InvalidArgumentException;
use MediaWiki\CheckUser\Services\CheckUserInsert;
use MediaWiki\Config\ServiceOptions;
use MediaWiki\Extension\Thanks\Storage\LogStore;
use MediaWiki\Extension\Thanks\UserThankEvent;
use MediaWiki\RecentChanges\RecentChange;
use MediaWiki\Registration\ExtensionRegistry;
use MediaWiki\Tests\ExpectCallbackTrait;
use MediaWiki\Tests\User\TempUser\TempUserTestTrait;
use MediaWiki\Utils\MWTimestamp;
use MediaWikiIntegrationTestCase;
use TestUser;
use Wikimedia\Timestamp\ConvertibleTimestamp;

/**
 * @covers \MediaWiki\Extension\Thanks\Storage\LogStore
 * @group Database
 */
class LogStoreTest extends MediaWikiIntegrationTestCase {
	use TempUserTestTrait;
	use ExpectCallbackTrait;

	public function testThankWhenPerformerIsTemporaryAccount() {
		$this->enableAutoCreateTempUser();

		$tempUser = ( new TestUser( '~1' ) )->getUser();

		$this->expectException( InvalidArgumentException::class );
		/** @var LogStore $thanksLogStore */
		$thanksLogStore = $this->getServiceContainer()->get( 'ThanksLogStore' );
		$thanksLogStore->thank( $tempUser, $this->getTestUser()->getUser(), 'abc' );
	}

	public function testThankWhenThanksLoggingDisabled() {
		$this->overrideConfigValue( 'ThanksLogging', false );

		/** @var LogStore $thanksLogStore */
		$thanksLogStore = $this->getServiceContainer()->get( 'ThanksLogStore' );
		$thanksLogStore->thank( $this->getTestSysop()->getUser(), $this->getTestUser()->getUser(), 'abc' );

		$this->newSelectQueryBuilder()
			->select( '1' )
			->from( 'logging' )
			->where( [ 'log_action' => 'thank', 'log_type' => 'thanks' ] )
			->caller( __METHOD__ )
			->assertEmptyResult();
	}

	/** @dataProvider provideThank */
	public function testThank( bool $checkUserInstalled ) {
		$this->overrideConfigValue( 'ThanksLogging', true );
		$this->clearHook( 'ManualLogEntryBeforePublish' );

		// If CheckUser is installed for this test case, then expect that the log entry is sent to be stored
		// in the CheckUser data tables. Otherwise, mock that it is not installed and expect no calls to do this
		$logIdFromRecentChange = null;
		if ( $checkUserInstalled ) {
			$this->markTestSkippedIfExtensionNotLoaded( 'CheckUser' );

			$mockCheckUserInsert = $this->createMock( CheckUserInsert::class );
			$mockCheckUserInsert->expects( $this->once() )
				->method( 'updateCheckUserData' )
				->with( $this->callback( function ( $actualRecentChange ) use ( &$logIdFromRecentChange ) {
					$this->assertInstanceOf( RecentChange::class, $actualRecentChange );
					$logIdFromRecentChange = $actualRecentChange->getAttribute( 'rc_logid' );
					return true;
				} ) );
			$this->setService( 'CheckUserInsert', $mockCheckUserInsert );
		} else {
			// Mock that CheckUser is not installed (as it may be installed)
			$mockExtensionRegistry = $this->createMock( ExtensionRegistry::class );
			$mockExtensionRegistry->method( 'isLoaded' )
				->with( 'CheckUser' )
				->willReturn( false );

			$serviceContainer = $this->getServiceContainer();
			if ( !$serviceContainer->hasService( 'CheckUserInsert' ) ) {
				// define as no-op and override afterwards to use MediaWikiIntegrationTestCase service reset
				$serviceContainer->defineService( 'CheckUserInsert', static fn () => null );
			}
			$this->setService(
				'CheckUserInsert',
				fn () => $this->fail( 'The CheckUserInsert service was expected to not be called' )
			);
		}

		$performer = $this->getTestSysop()->getUser();
		$recipient = $this->getTestUser()->getUser();
		$fakeTime = new ConvertibleTimestamp( '20260921120000' );
		MWTimestamp::setFakeTime( $fakeTime );

		$this->expectDomainEvent(
			UserThankEvent::TYPE,
			1,
			function ( UserThankEvent $event ) use ( $performer, $recipient, $fakeTime ): void {
				$this->assertSame( $performer, $event->getPerformer(), 'Performer' );
				$this->assertSame( $recipient, $event->getRecipient(), 'Recipient' );
				$this->assertEquals( $fakeTime, $event->getEventTimestamp(), 'Timestamp' );
			}
		);

		$thanksLogStore = new LogStore(
			$this->getServiceContainer()->getConnectionProvider(),
			$this->getServiceContainer()->getActorNormalization(),
			$mockExtensionRegistry ?? $this->getServiceContainer()->getExtensionRegistry(),
			$this->getServiceContainer()->getDomainEventDispatcher(),
			new ServiceOptions(
				LogStore::CONSTRUCTOR_OPTIONS,
				$this->getServiceContainer()->getMainConfig()
			)
		);
		$thanksLogStore->thank( $performer, $recipient, 'abc' );

		$this->newSelectQueryBuilder()
			->select( [ 'log_title', 'log_namespace', 'log_actor' ] )
			->from( 'logging' )
			->where( [ 'log_action' => 'thank', 'log_type' => 'thanks' ] )
			->caller( __METHOD__ )
			->assertRowValue( [
				$recipient->getUserPage()->getDBkey(),
				NS_USER,
				$performer->getActorId(),
			] );

		if ( $logIdFromRecentChange !== null ) {
			$logId = $this->newSelectQueryBuilder()
				->select( 'log_id' )
				->from( 'logging' )
				->where( [ 'log_action' => 'thank', 'log_type' => 'thanks' ] )
				->caller( __METHOD__ )
				->fetchField();
			$this->assertSame(
				(int)$logId,
				$logIdFromRecentChange,
				'Log ID in the RecentChange object passed to CheckUser differs to the log in the DB'
			);
		}
	}

	public static function provideThank(): array {
		return [
			'CheckUser is installed' => [ true ],
			'CheckUser is not installed' => [ false ],
		];
	}
}
