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

	public function doesWrites() {
		return true;
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
		return [
			'revid' => [
				'id' => 'mw-thanks-form-revid',
				'name' => 'revid',
				'type' => 'hidden',
				'label-message' => 'thanks-form-revid',
				'default' => $this->id,
			]
		];
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
		return 'ooui';
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
			$requestData = [
				'action' => 'thank',
				'rev' => (int)$data['revid'],
				'source' => 'specialpage',
				'token' => $this->getUser()->getEditToken(),
			];
		} else {
			$requestData = [
				'action' => 'flowthank',
				'postid' => $data['revid'],
				'token' => $this->getUser()->getEditToken(),
			];
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
		} catch ( ApiUsageException $e ) {
			return Status::wrap( $e->getStatusValue() );
		}

		$this->result = $api->getResult()->getResultData( [ 'result' ] );
		return Status::newGood();
	}

	/**
	 * Display a message to the user.
	 */
	public function onSuccess() {
		$sender = $this->getUser();
		$recipient = User::newFromName( $this->result['recipient'] );
		$link = Linker::userLink( $recipient->getId(), $recipient->getName() );

		if ( $this->type === 'rev' ) {
			$msgKey = 'thanks-thanked-notice';
		} else {
			$msgKey = 'flow-thanks-thanked-notice';
		}

		$this->getOutput()->addHTML( $this->msg( $msgKey )
			->rawParams( $link )
			->params( $recipient->getName(), $sender->getName() )->parse()
		);
	}

	public function isListed() {
		return false;
	}
}
