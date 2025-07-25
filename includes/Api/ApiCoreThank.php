<?php

namespace MediaWiki\Extension\Thanks\Api;

use MediaWiki\Api\ApiBase;
use MediaWiki\Api\ApiMain;
use MediaWiki\Extension\Notifications\DiscussionParser;
use MediaWiki\Extension\Thanks\Storage\Exceptions\InvalidLogType;
use MediaWiki\Extension\Thanks\Storage\Exceptions\LogDeleted;
use MediaWiki\Extension\Thanks\Storage\LogStore;
use MediaWiki\Logging\DatabaseLogEntry;
use MediaWiki\Logging\LogEntry;
use MediaWiki\Notification\NotificationService;
use MediaWiki\Notification\RecipientSet;
use MediaWiki\Notification\Types\WikiNotification;
use MediaWiki\Permissions\PermissionManager;
use MediaWiki\Revision\RevisionRecord;
use MediaWiki\Revision\RevisionStore;
use MediaWiki\Title\Title;
use MediaWiki\User\User;
use MediaWiki\User\UserFactory;
use MediaWiki\User\UserIdentity;
use Wikimedia\ParamValidator\ParamValidator;
use Wikimedia\ParamValidator\TypeDef\IntegerDef;

/**
 * API module to send thanks notifications for revisions and log entries.
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiCoreThank extends ApiThank {

	private NotificationService $notifications;
	protected RevisionStore $revisionStore;
	protected UserFactory $userFactory;

	public function __construct(
		ApiMain $main,
		string $action,
		PermissionManager $permissionManager,
		LogStore $storage,
		NotificationService $notifications,
		RevisionStore $revisionStore,
		UserFactory $userFactory
	) {
		parent::__construct(
			$main,
			$action,
			$permissionManager,
			$storage
		);
		$this->notifications = $notifications;
		$this->revisionStore = $revisionStore;
		$this->userFactory = $userFactory;
	}

	/**
	 * Perform the API request.
	 * @suppress PhanTypeMismatchArgumentNullable T240141
	 * @suppress PhanPossiblyUndeclaredVariable Phan get's confused by the badly arranged code
	 */
	public function execute() {
		// Initial setup.
		$user = $this->getUser();
		$this->dieOnBadUser( $user );
		$this->dieOnUserBlockedFromThanks( $user );
		$params = $this->extractRequestParams();
		$revcreation = false;

		$this->requireOnlyOneParameter( $params, 'rev', 'log' );

		// Extract type and ID from the parameters.
		if ( isset( $params['rev'] ) && !isset( $params['log'] ) ) {
			$type = 'rev';
			$id = $params['rev'];
		} elseif ( !isset( $params['rev'] ) && isset( $params['log'] ) ) {
			$type = 'log';
			$id = $params['log'];
		} else {
			$this->dieWithError( 'thanks-error-api-params', 'thanks-error-api-params' );
		}

		$recipientUsername = null;
		// Determine thanks parameters.
		if ( $type === 'log' ) {
			$logEntry = $this->getLogEntryFromId( $id );
			// If there's an associated revision, thank for that instead.
			if ( $logEntry->getAssociatedRevId() ) {
				$type = 'rev';
				$id = $logEntry->getAssociatedRevId();
			} else {
				// If there's no associated revision, die if the user is sitewide blocked
				$excerpt = '';
				$title = $logEntry->getTarget();
				$recipient = $this->getUserFromLog( $logEntry );
				$recipientUsername = $recipient->getName();
			}
		}
		if ( $type === 'rev' ) {
			$revision = $this->getRevisionFromId( $id );
			$excerpt = DiscussionParser::getEditExcerpt( $revision, $this->getLanguage() );
			$title = $this->getTitleFromRevision( $revision );
			$this->dieOnUserBlockedFromTitle( $user, $title );

			$recipient = $this->getUserFromRevision( $revision );
			$recipientUsername = $recipient->getName();

			// If there is no parent revid of this revision, it's a page creation.
			if ( !$this->revisionStore->getPreviousRevision( $revision ) ) {
				$revcreation = true;
			}
		}

		// Send thanks.
		if ( $this->userAlreadySentThanks( $user, $type, $id ) ) {
			$this->markResultSuccess( $recipientUsername );
		} else {
			$this->dieOnBadRecipient( $user, $recipient );
			$this->sendThanks(
				$user,
				$type,
				$id,
				$excerpt,
				$recipient,
				$this->getSourceFromParams( $params ),
				$title,
				$revcreation
			);
		}
	}

	/**
	 * Check the session data for an indication of whether this user has already sent this thanks.
	 * @param User $user The user being thanked.
	 * @param string $type Either 'rev' or 'log'.
	 * @param int $id The revision or log ID.
	 * @return bool
	 */
	protected function userAlreadySentThanks( User $user, $type, $id ) {
		if ( $type === 'rev' ) {
			// For b/c with old-style keys
			$type = '';
		}
		return (bool)$user->getRequest()->getSessionData( "thanks-thanked-$type$id" );
	}

	private function getRevisionFromId( int $revId ): RevisionRecord {
		$revision = $this->revisionStore->getRevisionById( $revId );
		// Revision ID 1 means an invalid argument was passed in.
		// FIXME Get rid of this limitation! T344475
		if ( !$revision || $revision->getId() === 1 ) {
			$this->dieWithError( 'thanks-error-invalidrevision', 'invalidrevision' );
		} elseif ( $revision->isDeleted( RevisionRecord::DELETED_TEXT ) ) {
			$this->dieWithError( 'thanks-error-revdeleted', 'revdeleted' );
		}
		// @phan-suppress-next-line PhanTypeMismatchReturnNullable T240141
		return $revision;
	}

	/**
	 * Get the log entry from the ID.
	 * @param int $logId The log entry ID.
	 * @return DatabaseLogEntry
	 */
	protected function getLogEntryFromId( $logId ): DatabaseLogEntry {
		$logEntry = null;
		try {
			$logEntry = $this->storage->getLogEntryFromId( $logId );
		} catch ( InvalidLogType $e ) {
			$err = $this->msg( 'thanks-error-invalid-log-type', $e->getLogType() );
			$this->dieWithError( $err, 'thanks-error-invalid-log-type' );
		} catch ( LogDeleted ) {
			$this->dieWithError( 'thanks-error-log-deleted', 'thanks-error-log-deleted' );
		}

		if ( !$logEntry ) {
			$this->dieWithError( 'thanks-error-invalid-log-id', 'thanks-error-invalid-log-id' );
		}
		// @phan-suppress-next-line PhanTypeMismatchReturnNullable T240141
		return $logEntry;
	}

	private function getTitleFromRevision( RevisionRecord $revision ): Title {
		$title = Title::castFromPageIdentity( $revision->getPage() );
		if ( !$title instanceof Title ) {
			$this->dieWithError( 'thanks-error-notitle', 'notitle' );
		}
		// @phan-suppress-next-line PhanTypeMismatchReturnNullable T240141
		return $title;
	}

	/**
	 * Set the source of the thanks, e.g. 'diff' or 'history'
	 * @param string[] $params Incoming API parameters, with a 'source' key.
	 * @return string The source, or 'undefined' if not provided.
	 */
	private function getSourceFromParams( $params ) {
		if ( $params['source'] ) {
			return trim( $params['source'] );
		} else {
			return 'undefined';
		}
	}

	/**
	 * @param RevisionRecord $revision
	 * @return User
	 */
	private function getUserFromRevision( RevisionRecord $revision ) {
		$recipient = $revision->getUser();
		if ( !$recipient ) {
			$this->dieWithError( 'thanks-error-invalidrecipient', 'invalidrecipient' );
		}
		// @phan-suppress-next-line PhanTypeMismatchArgumentNullable T240141
		return $this->userFactory->newFromUserIdentity( $recipient );
	}

	/**
	 * @param LogEntry $logEntry
	 * @return UserIdentity
	 */
	private function getUserFromLog( LogEntry $logEntry ) {
		$recipient = $logEntry->getPerformerIdentity();
		return $this->userFactory->newFromUserIdentity( $recipient );
	}

	/**
	 * Create the thanks notification event, and log the thanks.
	 * @param User $user The thanks-sending user.
	 * @param string $type The thanks type ('rev' or 'log').
	 * @param int $id The log or revision ID.
	 * @param string $excerpt The excerpt to display as the thanks notification. This will only
	 * be used if it is not possible to retrieve the relevant excerpt at the time the
	 * notification is displayed (in order to account for changing visibility in the meantime).
	 * @param User $recipient The recipient of the thanks.
	 * @param string $source Where the thanks was given.
	 * @param Title $title The title of the page for which thanks is given.
	 * @param bool $revcreation True if the linked revision is a page creation.
	 */
	protected function sendThanks(
		User $user, $type, $id, $excerpt, User $recipient, $source, Title $title, $revcreation
	) {
		$uniqueId = $type . '-' . $id;
		// Do one last check to make sure we haven't sent Thanks before
		if ( $this->haveAlreadyThanked( $user, $uniqueId ) ) {
			// Pretend the thanks were sent
			$this->markResultSuccess( $recipient->getName() );
			return;
		}

		// Create the notification
		$this->notifications->notify(
			new WikiNotification( 'edit-thank', $title, $user, [
				$type . 'id' => $id,
				'source' => $source,
				'excerpt' => $excerpt,
				'revcreation' => $revcreation,
			] ),
			new RecipientSet( $recipient )
		);

		// And mark the thank in session for a cheaper check to prevent duplicates (Phab:T48690).
		$user->getRequest()->setSessionData( "thanks-thanked-$type$id", true );
		// Set success message
		$this->markResultSuccess( $recipient->getName() );
		$this->logThanks( $user, $recipient, $uniqueId );
	}

	/** @inheritDoc */
	public function getAllowedParams() {
		return [
			'rev' => [
				ParamValidator::PARAM_TYPE => 'integer',
				IntegerDef::PARAM_MIN => 1,
				ParamValidator::PARAM_REQUIRED => false,
			],
			'log' => [
				ParamValidator::PARAM_TYPE => 'integer',
				IntegerDef::PARAM_MIN => 1,
				ParamValidator::PARAM_REQUIRED => false,
			],
			'token' => [
				ParamValidator::PARAM_TYPE => 'string',
				ParamValidator::PARAM_REQUIRED => true,
			],
			'source' => [
				ParamValidator::PARAM_TYPE => 'string',
				ParamValidator::PARAM_REQUIRED => false,
			],
		];
	}

	/** @inheritDoc */
	public function getHelpUrls() {
		return [
			'https://www.mediawiki.org/wiki/Extension:Thanks#API_Documentation',
		];
	}

	/**
	 * @see ApiBase::getExamplesMessages()
	 * @return array
	 */
	protected function getExamplesMessages() {
		return [
			'action=thank&revid=456&source=diff&token=123ABC'
				=> 'apihelp-thank-example-1',
		];
	}
}
