( function ( $, mw ) {
	'use strict';

	function reloadThankedState() {
		$( 'a.mw-thanks-thank-link' ).each( function ( idx, el ) {
			var $thankLink = $( el );
			if ( mw.thanks.thanked.contains( $thankLink ) ) {
				$thankLink.before( mw.msg( 'thanks-thanked' ) );
				$thankLink.remove();
			}
		} );
	}

	// $thankLink is the element with the data-revision-id attribute
	// $thankElement is the element to be removed on success
	function sendThanks( $thankLink, $thankElement ) {
		var source;
		if ( mw.config.get( 'wgAction' ) === 'history' ) {
			source = 'history';
		} else {
			source = 'diff';
		}

		( new mw.Api ).postWithToken( 'edit', {
			action: 'thank',
			rev: $thankLink.attr( 'data-revision-id' ),
			source: source
		} )
		.then(
			// Success
			function ( data ) {
				var username = $thankLink.closest(
						source === 'history' ? 'li' : 'td'
					).find( 'a.mw-userlink' ).text();
				// Get the user who was thanked (for gender purposes)
				return mw.thanks.getUserGender( username );
			},
			// Fail
			function ( errorCode, details ) {
				// TODO: use something besides alert for the error messages
				switch ( errorCode ) {
					case 'invalidrevision':
						alert( mw.msg( 'thanks-error-invalidrevision' ) );
						break;
					case 'ratelimited':
						alert( mw.msg( 'thanks-error-ratelimited', mw.user ) );
						break;
					default:
						alert( mw.msg( 'thanks-error-undefined' ) );
				}
			}
		)
		.then( function ( recipientGender ) {
			$thankElement.before( mw.message( 'thanks-thanked', mw.user, recipientGender ).escaped() );
			$thankElement.remove();
			mw.thanks.thanked.push( $thankLink );
		} );
	}

	if ( $.isReady ) {
		// This condition is required for soft-reloads
		// to also trigger the reloadThankedState
		reloadThankedState();
	} else {
		$( document ).ready( reloadThankedState );
	}

	$( function () {
		if ( mw.config.get( 'thanks-confirmation-required' ) ) {
			$( 'a.mw-thanks-thank-link' ).confirmable( {
				i18n: {
					confirm: mw.msg( 'thanks-confirmation2', mw.user ),
					noTitle: mw.msg( 'thanks-thank-tooltip-no', mw.user ),
					yesTitle: mw.msg( 'thanks-thank-tooltip-yes', mw.user )
				},
				handler: function ( e ) {
					var $thankLink = $( this );
					e.preventDefault();
					sendThanks( $thankLink, $thankLink.closest( '.jquery-confirmable-wrapper' ) );
				}
			} );
		} else {
			$( 'a.mw-thanks-thank-link' ).click( function ( e ) {
				var $thankLink = $( this );
				e.preventDefault();
				sendThanks( $thankLink, $thankLink );
			} );
		}
	} );

} )( jQuery, mediaWiki );
