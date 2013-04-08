( function ( $, mw ) {
	'use strict';

	$( 'a.mw-thanks-thank-link' ).click( function( e ) {
		var source, $thankLink = $( this );
		e.preventDefault();
		if ( mw.config.get( 'wgAction' ) === 'history' ) {
			source = 'history';
		} else {
			source = 'diff';
		}
		( new mw.Api ).get( {
			'action' : 'thank',
			'rev' : $thankLink.attr( 'data-revision-id' ),
			'source' : source,
			'token' : mw.user.tokens.values.editToken
		} )
		.done( function( data ) {
			$thankLink.before( mw.msg( 'thanks-thanked' ) );
			$thankLink.remove();
		} )
		.fail( function( errorCode, details ) {
			// TODO: use something besides alert for the error messages
			switch( errorCode ) {
				case 'invalidrevision':
					alert( mw.msg( 'thanks-error-invalidrevision' ) );
					break;
				case 'ratelimited':
					alert( mw.msg( 'thanks-error-ratelimited' ) );
					break;
				default:
					alert( mw.msg( 'thanks-error-undefined' ) );
			}
		} );
	} );

} )( jQuery, mediaWiki );
