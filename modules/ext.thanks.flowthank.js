( function ( $, mw ) {
	'use strict';

	var $thankedLabel = $( '<span></span>' )
		.addClass( 'mw-thanks-flow-thanked mw-ui-quiet' );

	mw.thanks.thanked.cookieName = 'flow-thanked';
	mw.thanks.thanked.attrName = 'data-flow-id';

	function findPostAuthorFromThankLink( $thankLink ) {
		// We can't use 'closest' directly because .flow-author is a cousin
		// of $thankLink rather than its ancestor
		return $( $thankLink.findWithParent( '< .flow-post .flow-author a.mw-userlink' )[ 0 ] ).text().trim();
	}

	function reloadThankedState() {
		$( 'a.mw-thanks-flow-thank-link' ).each( function ( idx, el ) {
			var $thankLink = $( el ),
				author = findPostAuthorFromThankLink( $thankLink );
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
				var author = findPostAuthorFromThankLink( $thankLink );
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
						alert( mw.msg( 'thanks-error-undefined', errorCode ) );
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
