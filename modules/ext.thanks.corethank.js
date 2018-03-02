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
					$thankElement.before( mw.message( 'thanks-thanked', mw.user, $thankLink.data( 'recipient-gender' ) ).escaped() );
					$thankElement.remove();
					mw.thanks.thanked.push( $thankLink );
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
						case 'revdeleted':
							OO.ui.alert( mw.msg( 'thanks-error-revdeleted' ) );
							break;
						default:
							OO.ui.alert( mw.msg( 'thanks-error-undefined', errorCode ) );
					}
				}
			);
	}

	/**
	 * Add interactive handlers to all 'thank' links in $content
	 *
	 * @param {jQuery} $content
	 */
	function addActionToLinks( $content ) {
		var $thankLinks = $content.find( 'a.mw-thanks-thank-link' );
		if ( mw.config.get( 'thanks-confirmation-required' ) ) {
			$thankLinks.each( function () {
				var $thankLink = $( this );
				$thankLink.confirmable( {
					i18n: {
						confirm: mw.msg( 'thanks-confirmation2', mw.user ),
						no: mw.msg( 'cancel' ),
						noTitle: mw.msg( 'thanks-thank-tooltip-no', mw.user ),
						yes: mw.msg( 'thanks-button-thank', mw.user, $thankLink.data( 'recipient-gender' ) ),
						yesTitle: mw.msg( 'thanks-thank-tooltip-yes', mw.user )
					},
					handler: function ( e ) {
						e.preventDefault();
						sendThanks( $thankLink, $thankLink.closest( '.jquery-confirmable-wrapper' ) );
					}
				} );
			} );
		} else {
			$thankLinks.click( function ( e ) {
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
