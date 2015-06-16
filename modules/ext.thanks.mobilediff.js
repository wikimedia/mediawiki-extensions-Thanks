( function ( mw, M, $ ) {
	var popup = M.require( 'toast' ),
		SchemaMobileWebClickTracking = M.require( 'loggingSchemas/SchemaMobileWebClickTracking' ),
		schema = new SchemaMobileWebClickTracking( {}, 'MobileWebDiffClickTracking' );

	/**
	 * Create a thank button for a given edit
	 *
	 * @param {String} name The username of the user who made the edit
	 * @param {String} revision The revision the user created
	 * @param {String} gender The gender of the user who made the edit
	 */
	function thankUser( name, revision, gender ) {
		var d = $.Deferred();
		( new mw.Api() ).postWithToken( 'edit', {
			action: 'thank',
			rev: revision,
			source: 'mobilediff'
		} ).done( function () {
			popup.show( mw.msg( 'thanks-thanked-notice', name, gender ) );
			d.resolve();
		} )
		.fail( function ( errorCode ) {
			switch ( errorCode ) {
				case 'invalidrevision':
					popup.show( mw.msg( 'thanks-error-invalidrevision' ) );
					break;
				case 'ratelimited':
					popup.show( mw.msg( 'thanks-error-ratelimited', gender ) );
					break;
				default:
					popup.show( mw.msg( 'thanks-error-undefined' ) );
			}
			d.reject();
		} );
		return d;
	}

	/**
	 * Create a thank button for a given edit
	 *
	 * @param {String} name The username of the user who made the edit
	 * @param {String} rev The revision the user created
	 * @param {String} gender The gender of the user who made the edit
	 */
	function createThankLink( name, rev, gender ) {
		var thankImg = mw.config.get( 'wgExtensionAssetsPath' ) + '/Thanks/WhiteSmiley.png',
			thankImgTag = '<img width="25" height="20" src="' + thankImg + '" class="mw-mf-action-button-icon"/>',
			$thankBtn;
		// Don't make thank button for self
		if ( name !== mw.config.get( 'wgUserName' ) ) {
			// See if user has already been thanked for this edit
			if ( mw.config.get( 'wgThanksAlreadySent' ) ) {
				$thankBtn = $( '<button class="mw-mf-action-button mw-ui-button mw-ui-constructive thanked">' )
					.prop( 'disabled', true )
					.html( thankImgTag + mw.message( 'thanks-button-thanked', mw.user ).escaped() );
			} else {
				$thankBtn = $( '<button class="mw-mf-action-button mw-ui-button mw-ui-constructive">' )
					.html( thankImgTag + mw.message( 'thanks-button-thank', mw.user, gender ).escaped()
					)
					.on( 'click', function () {
						var $this = $( this );
						schema.log( {
							name: 'thank',
							destination: name
						} );
						if ( !$this.hasClass( 'thanked' ) ) {
							thankUser( name, rev, gender  ).done( function () {
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
	 * @param {jQuery.Object} $user existing element with data attributes associated describing a user.
	 * @param {jQuery.Object} $container to render button in
	 */
	function init( $user, $container ) {
		var username = $user.data( 'user-name' ),
			rev = $user.data( 'revision-id' ),
			gender = $user.data( 'user-gender' ),
			$thankBtn;

		if ( !$user.hasClass( 'mw-mf-anon' ) ) {
			$thankBtn = createThankLink( username, rev, gender );
			if ( $thankBtn ) {
				$thankBtn.prependTo( $container );
			}
		}
	}

	$( function () {
		init( $( '.mw-mf-user' ), $( '#mw-mf-userinfo' ) );
	} );

	// Expose for testing purposes
	mw.thanks = $.extend( {}, mw.thanks || {}, {
		_mobileDiffInit: init
	} );
} )( mediaWiki, mw.mobileFrontend, jQuery );
