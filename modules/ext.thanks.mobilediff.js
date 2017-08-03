( function ( mw, $ ) {
	/**
	 * Attempt to execute a thank operation for a given edit
	 *
	 * @param {string} name The username of the user who made the edit
	 * @param {string} revision The revision the user created
	 * @param {string} recipientGender The gender of the user who made the edit
	 * @return {Promise} The thank operation's status.
	 */
	function thankUser( name, revision, recipientGender ) {
		var d = $.Deferred();
		( new mw.Api() ).postWithToken( 'csrf', {
			action: 'thank',
			rev: revision,
			source: 'mobilediff'
		} ).done( function () {
			mw.notify( mw.msg( 'thanks-thanked-notice', name, recipientGender, mw.user ) );
			d.resolve();
		} )
			.fail( function ( errorCode ) {
				// FIXME: What is "popup" and where is it defined?
				/* eslint-disable no-undef */
				switch ( errorCode ) {
					case 'invalidrevision':
						popup.show( mw.msg( 'thanks-error-invalidrevision' ) );
						break;
					case 'ratelimited':
						popup.show( mw.msg( 'thanks-error-ratelimited', recipientGender ) );
						break;
					default:
						popup.show( mw.msg( 'thanks-error-undefined', errorCode ) );
				}
				/* eslint-enable no-undef */
				d.reject();
			} );
		return d;
	}

	/**
	 * Create a thank button for a given edit
	 *
	 * @param {string} name The username of the user who made the edit
	 * @param {string} rev The revision the user created
	 * @param {string} gender The gender of the user who made the edit
	 * @return {html} The HTML of the button.
	 */
	function createThankLink( name, rev, gender ) {
		var thankImg = mw.config.get( 'wgExtensionAssetsPath' ) + '/Thanks/WhiteSmiley.png',
			thankImgTag = '<img width="25" height="20" src="' + thankImg + '" class="mw-mf-action-button-icon"/>',
			$thankBtn;

		// Don't make thank button for self
		if ( name !== mw.config.get( 'wgUserName' ) ) {
			// See if user has already been thanked for this edit
			if ( mw.config.get( 'wgThanksAlreadySent' ) ) {
				$thankBtn = $( '<button class="mw-mf-action-button mw-ui-button mw-ui-progressive thanked">' )
					.prop( 'disabled', true )
					.html( thankImgTag + mw.message( 'thanks-button-thanked', mw.user ).escaped() );
			} else {
				$thankBtn = $( '<button class="mw-mf-action-button mw-ui-button mw-ui-progressive">' )
					.html( thankImgTag + mw.message( 'thanks-button-thank', mw.user, gender ).escaped()
					)
					.on( 'click', function () {
						var $this = $( this );
						if ( !$this.hasClass( 'thanked' ) ) {
							thankUser( name, rev, gender ).done( function () {
								$this.addClass( 'thanked' ).prop( 'disabled', true )
									.html( thankImgTag + mw.message( 'thanks-button-thanked', mw.user, gender ).escaped() );
							} );
						}
					} );
			}
			return $thankBtn;
		}
	}

	/**
	 * Initialise a thank button in the given container.
	 *
	 * @param {jQuery} $user existing element with data attributes associated describing a user.
	 * @param {jQuery} $container to render button in
	 */
	function init( $user, $container ) {
		var username = $user.data( 'user-name' ),
			rev = $user.data( 'revision-id' ),
			gender = $user.data( 'user-gender' ),
			$thankBtn;

		$thankBtn = createThankLink( username, rev, gender );
		if ( $thankBtn ) {
			$thankBtn.prependTo( $container );
		}

	}

	$( function () {
		init( $( '.mw-mf-user' ), $( '#mw-mf-userinfo' ) );
	} );

	// Expose for testing purposes
	mw.thanks = $.extend( {}, mw.thanks || {}, {
		_mobileDiffInit: init
	} );
}( mediaWiki, jQuery ) );
