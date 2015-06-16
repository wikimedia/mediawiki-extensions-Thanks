( function ( $, mw ) {
	'use strict';

	mw.thanks.thanked.cookieName = 'flow-thanked';
	mw.thanks.thanked.attrName = 'data-flow-id';

	var $thankedLabel = $( '<span></span>' )
		.addClass( 'mw-thanks-flow-thanked mw-ui-quiet' );

	function reloadThankedState() {
		$( 'a.mw-thanks-flow-thank-link' ).each( function ( idx, el ) {
			var $thankLink = $( el ),
				author = $thankLink.findWithParent( '< .flow-post .flow-author a.mw-userlink' ).text().trim();
			if ( mw.thanks.thanked.contains( $thankLink.closest( '.flow-post' ) ) ) {
				mw.thanks.getUserGender( author )
					.done( function ( recipientGender ) {
						$thankLink.before(
							$thankedLabel
								.clone()
								.append(
									mw.msg( 'thanks-button-thanked', mw.user, recipientGender )
								)
						);
						$thankLink.remove();
					} );
			}
		} );
	}

	function sendFlowThanks( $thankLink ) {
		( new mw.Api() ).postWithToken( 'edit', {
			action: 'flowthank',
			postid: $thankLink.closest( '.flow-post' ).attr( mw.thanks.thanked.attrName )
		} )
		.then(
			// Success
			function ( data ) {
				// We can't use 'closest' directly because .flow-author is a cousin
				// of $thankLink rather than its ancestor
				var author = $thankLink.findWithParent( '< .flow-post .flow-author a.mw-userlink' ).text().trim();
				// Get the user who was thanked (for gender purposes)
				return mw.thanks.getUserGender( author );
			},
			// Failure
			function ( errorCode, details ) {
				// TODO: use something besides alert for the error messages
				switch ( errorCode ) {
					case 'ratelimited':
						alert( mw.msg( 'thanks-error-ratelimited', mw.user ) );
						break;
					default:
						alert( mw.msg( 'thanks-error-undefined' ) );
				}
			}
		)
		.then( function ( recipientGender ) {
			var $thankUserLabel = $thankedLabel.clone();
			$thankUserLabel.append(
				mw.msg( 'thanks-button-thanked', mw.user, recipientGender )
			);
			mw.thanks.thanked.push( $thankLink.closest( '.flow-post' ) );
			$thankLink.before( $thankUserLabel );
			$thankLink.remove();
		} );
	}

	if ( $.isReady ) {
		// This condition is required for soft-reloads
		// to also trigger the reloadThankedState
		reloadThankedState();
	} else {
		$( document ).ready( reloadThankedState );
	}

	// .on() is needed to make the button work for dynamically loaded posts
	$( '.flow-board' ).on( 'click', 'a.mw-thanks-flow-thank-link', function ( e ) {
		var $thankLink = $( this );
		e.preventDefault();
		sendFlowThanks( $thankLink );
	} );

} )( jQuery, mediaWiki );
