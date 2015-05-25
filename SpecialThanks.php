<?php

class SpecialThanks extends FormSpecialPage {

	 /**
	  * API result
	  * @var array $result
	  */
	protected $result;

	/**
	 * 'rev' for revision or 'flow' for Flow comment, null if no ID is specified
	 * @var string $type
	 */
	protected $type;

	/**
	 * Revision ID ('0' = invalid) or Flow UUID
	 * @var string $id
	 */
	protected $id;

	public function __construct() {
		parent::__construct( 'Thanks' );
	}

	/**
	 * Set the type and ID or UUID of the request.
	 * @param string $par
	 */
	protected function setParameter( $par ) {
		if ( $par === null || $par === '' ) {
			$this->type = null;
			return;
		}

		$tokens = explode( '/', $par );
		if ( $tokens[0] === 'Flow' ) {
			if ( count( $tokens ) === 1 || $tokens[1] === '' ) {
				$this->type = null;
			} else {
				$this->type = 'flow';
				$this->id = $tokens[1];
			}
		} else {
			$this->type = 'rev';
			if ( !( ctype_digit( $par ) ) ) { // Revision ID is not an integer.
				$this->id = '0';
			} else {
				$this->id = $par;
			}
		}
	}

	/**
	 * HTMLForm fields
	 * @return Array
	 */
	protected function getFormFields() {
		return array(
			'revid' => array(
				'id' => 'mw-thanks-form-revid',
				'name' => 'revid',
				'type' => 'hidden',
				'label-message' => 'thanks-form-revid',
				'default' => $this->id,
			)
		);
	}

	/**
	 * Return the confirmation or error message.
	 * @return string
	 */
	protected function preText() {
		if ( $this->type === null ) {
			$msgKey = 'thanks-error-no-id-specified';
		} elseif ( $this->type === 'rev' && $this->id === '0' ) {
			$msgKey = 'thanks-error-invalidrevision';
		} elseif ( $this->type === 'flow' ) {
			$msgKey = 'flow-thanks-confirmation-special';
		} else {
			$msgKey = 'thanks-confirmation-special';
		}
		return '<p>' . $this->msg( $msgKey )->escaped() . '</p>';
	}

	/**
	 * Format the submission form.
	 * @param HTMLForm $form
	 */
	protected function alterForm( HTMLForm $form ) {
		if ( $this->type === null || $this->type === 'rev' && $this->id === '0' ) {
			$form->suppressDefaultSubmit( true );
		} else {
			$form->setSubmitText( $this->msg( 'thanks-submit' )->escaped() );
		}
	}

	/**
	 * @return string
	 */
	protected function getDisplayFormat() {
		return 'vform';
	}

	/**
	 * Call the API internally.
	 * @param array $data
	 * @return Status
	 */
	public function onSubmit( array $data ) {
		if ( !isset( $data['revid'] ) ) {
			return Status::newFatal( 'thanks-error-invalidrevision' );
		}

		if ( $this->type === 'rev' ) {
			$requestData = array(
				'action' => 'thank',
				'rev' => (int)$data['revid'],
				'source' => 'specialpage',
				'token' => $this->getUser()->getEditToken(),
			);
		} else {
			$requestData = array(
				'action' => 'flowthank',
				'postid' => $data['revid'],
				'token' => $this->getUser()->getEditToken(),
			);
		}

		$request = new DerivativeRequest(
			$this->getRequest(),
			$requestData,
			true // posted
		);

		$api = new ApiMain(
			$request,
			true // enable write mode
		);

		try {
			$api->execute();
		} catch ( UsageException $e ) {
			return $this->handleErrorCodes( $e->getCodeString() );
		}

		if ( defined( 'ApiResult::META_CONTENT' ) ) {
			$this->result = $api->getResult()->getResultData( array( 'result' ) );
		} else {
			$result = $api->getResult()->getData();
			$this->result = $result['result'];
		}
		return Status::newGood();
	}

	/**
	 * Handle error codes returned by the API.
	 *
	 * @param $code
	 * @return Status
	 */
	protected function handleErrorCodes( $code ) {
		$status = new Status;
		switch ( $code ) {
			case 'invalidrevision':
			case 'invalidpostid':
			case 'ratelimited':
				// Message keys used here:
				// * thanks-error-invalidrevision
				// * thanks-error-invalidpostid
				// * thanks-error-ratelimited
				$status->fatal( 'thanks-error-' . $code );
				break;
			case 'notloggedin':
			case 'blockedtext':
				$status->fatal( $code );
				break;
			default:
				$status->fatal( 'thanks-error-undefined' );
		}
		return $status;
	}

	/**
	 * Display a message to the user.
	 */
	public function onSuccess() {
		$recipient = User::newFromName( $this->result['recipient'] );
		$link = Linker::userLink( $recipient->getId(), $recipient->getName() );

		if ( $this->type === 'rev' ) {
			$msgKey = 'thanks-thanked-notice';
		} else {
			$msgKey = 'flow-thanks-thanked-notice';
		}

		$this->getOutput()->addHTML( $this->msg( $msgKey )
			->rawParams( $link )
			->params( $recipient->getName() )->parse()
		);
	}

	public function isListed() {
		return false;
	}
}
