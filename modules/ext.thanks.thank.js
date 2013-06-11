( function ( $, mw ) {
	'use strict';

	// Keep track of which revisions the user has already thanked for
	var thanked = {
		maxHistory: 100,
		load: function() {
			var cookie = $.cookie( 'thanks-thanked' );
			if ( cookie === null ) {
				return [];
			}
			return unescape( cookie ).split( ',' );
		},
		push: function( $thankLink ) {
			var saved = this.load();
			saved.push( $thankLink.attr( 'data-revision-id' ) );
			if ( saved.length > this.maxHistory ) { // prevent forever growing
				saved = saved.slice( saved.length - this.maxHistory );
			}
			$.cookie( 'thanks-thanked', escape( saved.join( ',' ) ) );
		},
		contains: function( $thankLink ) {
			// $.inArray returns the index position or -1 if non-existant
			if ( $.inArray( $thankLink.attr( 'data-revision-id' ), this.load() ) !== -1 ) {
				return true;
			} else {
				return false;
			}
		}
	};

	var reloadThankedState = function() {
		$( 'a.mw-thanks-thank-link' ).each( function( idx, el ) {
			var $thankLink = $( el );
			if ( thanked.contains( $thankLink ) ) {
				$thankLink.before( mw.msg( 'thanks-thanked' ) );
				$thankLink.remove();
			}
		} );
	};

	var confirmThanks = function( $thankLink ) {
		var recipient = $thankLink.parent().find( '.mw-userlink' ).text();
		var $dialog = $( '<div>' ).msg( 'thanks-confirmation', mw.user, recipient );
		$dialog.dialog( {
			autoOpen: false,
			width: 400,
			modal: true,
			resizable: false,
			buttons: [
				{
					text: mw.msg( 'ok' ),
					class: 'ui-button-green',
					click: function() {
						$( this ).dialog( "close" );
						sendThanks( $thankLink );
					}
				},
				{
					text: mw.msg( 'cancel' ),
					class: 'ui-button-red',
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
		( new mw.Api ).get( {
			'action' : 'thank',
			'rev' : $thankLink.attr( 'data-revision-id' ),
			'source' : source,
			'token' : mw.user.tokens.values.editToken
		} )
		.done( function( data ) {
			$thankLink.before( mw.message( 'thanks-thanked', mw.user ).escaped() );
			$thankLink.remove();
			thanked.push( $thankLink );
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
