( function ( $, mw ) {
	'use strict';

	mw.thanks.thanked.cookieName = 'flow-thanked';
	mw.thanks.thanked.attrName = 'data-post-id';

	var $thankedLabel = $( '<span></span>' )
		.append( mw.msg( 'thanks-button-thanked', mw.user ) )
		.addClass( 'mw-thanks-flow-thanked mw-ui-button mw-ui-quiet mw-ui-disabled' );

	var reloadThankedState = function() {
		$( 'a.mw-thanks-flow-thank-link' ).each( function( idx, el ) {
			var $thankLink = $( el );
			if ( mw.thanks.thanked.contains( $thankLink ) ) {
				$thankLink.before( $thankedLabel.clone() );
				$thankLink.remove();
			}
		} );
	};

	var sendFlowThanks = function( $thankLink ) {
		( new mw.Api ).get( {
			'action' : 'flowthank',
			'postid' : $thankLink.attr( 'data-post-id' ),
			'token' : mw.user.tokens.get( 'editToken' )
		} )
		.done( function( data ) {
			$thankLink.before( $thankedLabel.clone() );
			$thankLink.remove();
			mw.thanks.thanked.push( $thankLink );
		} )
		.fail( function( errorCode, details ) {
			// TODO: use something besides alert for the error messages
			switch( errorCode ) {
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

	$( 'a.mw-thanks-flow-thank-link' ).click( function( e ) {
		var $thankLink = $( this );
		e.preventDefault();
		sendFlowThanks( $thankLink );
	} );

} )( jQuery, mediaWiki );
