( function ( $, mw, OO ) {
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

		if ( $thankLink.data( 'clickDisabled' ) ) {
			// Prevent double clicks while we haven't received a response from API request
			return false;
		}
		$thankLink.data( 'clickDisabled', true );

		if ( mw.config.get( 'wgAction' ) === 'history' ) {
			source = 'history';
		} else {
			source = 'diff';
		}

		( new mw.Api() ).postWithToken( 'csrf', {
			action: 'thank',
			rev: $thankLink.attr( 'data-revision-id' ),
			source: source
		} )
			.then(
				// Success
				function () {
					var username = $thankLink.closest(
						source === 'history' ? 'li' : 'td'
					).find( 'a.mw-userlink' ).text();
					// Get the user who was thanked (for gender purposes)
					return mw.thanks.getUserGender( username );
				},
				// Fail
				function ( errorCode ) {
					// If error occured, enable attempting to thank again
					$thankLink.data( 'clickDisabled', false );
					switch ( errorCode ) {
						case 'invalidrevision':
							OO.ui.alert( mw.msg( 'thanks-error-invalidrevision' ) );
							break;
						case 'ratelimited':
							OO.ui.alert( mw.msg( 'thanks-error-ratelimited', mw.user ) );
							break;
						default:
							OO.ui.alert( mw.msg( 'thanks-error-undefined', errorCode ) );
					}
				}
			)
			.then( function ( recipientGender ) {
				$thankElement.before( mw.message( 'thanks-thanked', mw.user, recipientGender ).escaped() );
				$thankElement.remove();
				mw.thanks.thanked.push( $thankLink );
			} );
	}

	function addActionToLinks( $content ) {
		if ( mw.config.get( 'thanks-confirmation-required' ) ) {
			$content.find( 'a.mw-thanks-thank-link' ).confirmable( {
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
			$content.find( 'a.mw-thanks-thank-link' ).click( function ( e ) {
				var $thankLink = $( this );
				e.preventDefault();
				sendThanks( $thankLink, $thankLink );
			} );
		}
	}

	if ( $.isReady ) {
		// This condition is required for soft-reloads
		// to also trigger the reloadThankedState
		reloadThankedState();
	} else {
		$( reloadThankedState );
	}

	$( function () {
		addActionToLinks( $( 'body' ) );
	} );

	mw.hook( 'wikipage.diff' ).add( function ( $content ) {
		addActionToLinks( $content );
	} );
}( jQuery, mediaWiki, OO ) );
