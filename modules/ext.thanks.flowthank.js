const $thankedLabel = $( '<span>' ).addClass( 'mw-thanks-flow-thanked mw-ui-quiet' );

const attrName = 'data-flow-id';
const cookieName = 'flow-thanked';

function findPostAuthorFromThankLink( $thankLink ) {
	// We can't use 'closest' directly because .flow-author is a cousin
	// of $thankLink rather than its ancestor
	return $( $thankLink.findWithParent( '< .flow-post .flow-author a.mw-userlink' )[ 0 ] ).text().trim();
}

function reloadThankedState() {
	$( 'a.mw-thanks-flow-thank-link' ).each( ( idx, el ) => {
		const $thankLink = $( el );
		if ( mw.thanks.thanked.contains( $thankLink.closest( '.flow-post' ).attr( attrName ), cookieName ) ) {
			const author = findPostAuthorFromThankLink( $thankLink );
			mw.thanks.getUserGender( author )
				.done( ( recipientGender ) => {
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
	( new mw.Api() ).postWithToken( 'csrf', {
		action: 'flowthank',
		postid: $thankLink.closest( '.flow-post' ).attr( attrName )
	} )
		.then(
			// Success
			() => {
				const author = findPostAuthorFromThankLink( $thankLink );
				// Get the user who was thanked (for gender purposes)
				return mw.thanks.getUserGender( author );
			},
			// Failure
			( errorCode ) => {
				switch ( errorCode ) {
					case 'ratelimited':
						OO.ui.alert( mw.msg( 'thanks-error-ratelimited', mw.user ) );
						break;
					default:
						OO.ui.alert( mw.msg( 'thanks-error-undefined', errorCode ) );
				}
			}
		)
		.then( ( recipientGender ) => {
			const $thankUserLabel = $thankedLabel.clone();
			$thankUserLabel.append(
				mw.msg( 'thanks-button-thanked', mw.user, recipientGender )
			);
			mw.thanks.thanked.push( $thankLink.closest( '.flow-post' ).attr( attrName ), cookieName );
			$thankLink.before( $thankUserLabel );
			$thankLink.remove();
		} );
}

if ( $.isReady ) {
	// This condition is required for soft-reloads
	// to also trigger the reloadThankedState
	reloadThankedState();
} else {
	$( reloadThankedState );
}

// .on() is needed to make the button work for dynamically loaded posts
$( '.flow-board' ).on( 'click', 'a.mw-thanks-flow-thank-link', function ( e ) {
	const $thankLink = $( this );
	e.preventDefault();
	sendFlowThanks( $thankLink );
} );
