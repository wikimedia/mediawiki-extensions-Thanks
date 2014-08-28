( function ( $, mw ) {
	'use strict';

	var reloadThankedState = function() {
		$( 'a.mw-thanks-thank-link' ).each( function( idx, el ) {
			var $thankLink = $( el );
			if ( mw.thanks.thanked.contains( $thankLink ) ) {
				$thankLink.before( mw.msg( 'thanks-thanked' ) );
				$thankLink.remove();
			}
		} );
	};

	var confirmThanks = function( $thankLink ) {
		var recipient = $thankLink.parent().find( '.mw-userlink' ).text();
		if ( recipient === '' ) { // for Diff view
			recipient = $thankLink.parents( '.diff-ntitle' ).find( '.mw-userlink' ).text();
		}
		var $dialog = $( '<div>' ).msg( 'thanks-confirmation', mw.user, recipient );
		$dialog.dialog( {
			autoOpen: false,
			width: 400,
			modal: true,
			resizable: false,
			buttons: [
				{
					text: mw.msg( 'ok' ),
					'class': 'ui-button-green',
					click: function() {
						$( this ).dialog( "close" );
						sendThanks( $thankLink );
					}
				},
				{
					text: mw.msg( 'cancel' ),
					click: function() { $( this ).dialog( "close" ); }
				}
			]
		} );
		$dialog.dialog( 'open' );
	};

	var sendThanks = function( $thankLink ) {
		var source;
		if ( mw.config.get( 'wgAction' ) === 'history' ) {
			source = 'history';
		} else {
			source = 'diff';
		}
		( new mw.Api ).post( {
			'action' : 'thank',
			'rev' : $thankLink.attr( 'data-revision-id' ),
			'source' : source,
			'token' : mw.user.tokens.values.editToken
		} )
		.done( function( data ) {
			$thankLink.before( mw.message( 'thanks-thanked', mw.user ).escaped() );
			$thankLink.remove();
			mw.thanks.thanked.push( $thankLink );
		} )
		.fail( function( errorCode, details ) {
			// TODO: use something besides alert for the error messages
			switch( errorCode ) {
				case 'invalidrevision':
					alert( mw.msg( 'thanks-error-invalidrevision' ) );
					break;
				case 'ratelimited':
					alert( mw.msg( 'thanks-error-ratelimited', mw.user ) );
					break;
				default:
					alert( mw.msg( 'thanks-error-undefined' ) );
			}
		} );
	};

	if ( $.isReady ) {
		// This condition is required for soft-reloads
		// to also trigger the reloadThankedState
		reloadThankedState();
	} else {
		$( document ).ready( reloadThankedState );
	}

	$( 'a.mw-thanks-thank-link' ).click( function( e ) {
		var $thankLink = $( this );
		e.preventDefault();
		if ( mw.config.get( 'thanks-confirmation-required' ) ) {
			confirmThanks( $thankLink );
		} else {
			sendThanks( $thankLink );
		}
	} );

} )( jQuery, mediaWiki );
