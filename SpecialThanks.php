<?php

class SpecialThanks extends FormSpecialPage {

	/** @var array $result */
	protected $result;

	public function __construct() {
		parent::__construct( 'Thanks' );
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
				'type' => 'int',
				'label-message' => 'thanks-form-revid',
				'default' => $this->getRequest()->getInt( 'revid', $this->par ) ?: '',
			)
		);
	}

	/**
	 * Make it look pretty
	 * @param HTMLForm $form
	 */
	protected function alterForm( HTMLForm $form ) {
		$form->setDisplayFormat( 'vform' );
		$form->setWrapperLegend( false );
	}

	/**
	 * Calls the API internally
	 * @param array $data
	 * @return Status
	 */
	public function onSubmit( array $data ) {
		if ( !isset( $data['revid'] ) ) {
			return Status::newFatal( 'thanks-error-invalidrevision' );
		}

		$request = new DerivativeRequest(
			$this->getRequest(),
			array(
				'action' => 'thank',
				'rev' => (int)$data['revid'],
				'source' => 'specialpage',
				'token' => $this->getUser()->getEditToken(),
			),
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

		$result = $api->getResult()->getData();
		$this->result = $result['result'];
		return Status::newGood();
	}

	/**
	 * Handles error codes returned by the API
	 * @param $code
	 * @return Status
	 */
	protected function handleErrorCodes( $code ) {
		$status = new Status;
		switch ( $code ) {
			case 'invalidrevision':
			case 'ratelimited':
				$status->fatal( "thanks-error-$code" );
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
	 * Display a message to the user
	 */
	public function onSuccess() {
		$recipient = User::newFromName( $this->result['recipient'] );
		$link = Linker::userLink( $recipient->getId(), $recipient->getName() );
		$this->getOutput()->addHTML( $this->msg( 'thanks-thanked-notice' )
			->rawParams( $link )
			->params( $recipient->getName() )->parse()
		);
	}

	public function isListed() {
		return false;
	}
}
