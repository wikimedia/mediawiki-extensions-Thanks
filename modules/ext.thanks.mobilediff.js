( function( M, $ ) {
	var api = M.require( 'api' ),
		popup = M.require( 'notifications' ),
		schema = M.require( 'loggingSchemas/MobileWebClickTracking' );

	function thankUser( name, revision, gender ) {
		var d = $.Deferred();
		api.getToken( 'edit' ).done( function( token ) {
			api.get( {
				'action' : 'thank',
				'rev' : revision,
				'source' : 'mobilediff',
				'token' : token
			} )
			.done( function() {
				popup.show( mw.msg( 'thanks-thanked-notice', name, gender ) );
				d.resolve();
			} )
			.fail( function( errorCode ) {
				switch( errorCode ) {
					case 'invalidrevision':
						popup.show( mw.msg( 'thanks-error-invalidrevision' ) );
						break;
					case 'ratelimited':
						popup.show( mw.msg( 'thanks-error-ratelimited' ) );
						break;
					default:
						popup.show( mw.msg( 'thanks-error-undefined' ) );
				}
				d.reject();
			} );
		} );
		return d;
	}

	/**
	 * Create a thank button for a given edit
	 *
	 * @param name String The username of the user who made the edit
	 * @param rev String The revision the user created
	 * @param gender String The gender of the user who made the edit
	 */
	function createThankLink( name, rev, gender ) {
		var thankImg = mw.config.get( 'wgExtensionAssetsPath' ) + '/Thanks/WhiteSmiley.png';
		// Don't make thank button for self
		if ( name !== mw.config.get( 'wgUserName' ) ) {
			return $( '<button class="mw-mf-action-button">' )
				.html( '<img width="25" height="20" src="' + thankImg + '" class="mw-mf-action-button-icon"/>' +
					mw.message( 'thanks-button-thank', mw.user ).escaped()
				)
				.on( 'click', function() {
					var $thankLink = $( this );
					schema.log( 'diff-thank', name );
					if ( !$thankLink.hasClass( 'thanked' ) ) {
						thankUser( name, rev, gender  ).done( function() {
							$thankLink.addClass( 'thanked' ).attr( 'disabled', true );
							$thankLink.html( '<img width="25" height="20" src="' + thankImg + '" class="mw-mf-action-button-icon"/>' +
								mw.message( 'thanks-button-thanked', mw.user ).escaped()
							);
						} );
					}
				} );
		}
	}

	$( function() {
		var $user = $( '.mw-mf-user' ),
			username = $user.data( 'user-name' ),
			rev = $user.data( 'revision-id' ),
			gender = $user.data( 'user-gender' ),
			$thankBtn;

		if ( !$user.hasClass( 'mw-mf-anon' ) ) {
			$thankBtn = createThankLink( username, rev, gender );
			if ( $thankBtn ) {
				$thankBtn.prependTo( '#mw-mf-userinfo' );
			}
		}
	} );
} )( mw.mobileFrontend, jQuery );
