function base64DecodeUnicode(str) {
    // Convert Base64 encoded bytes to percent-encoding, and then get the original string.
    percentEncodedStr = atob(str).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join('');


    return decodeURIComponent(percentEncodedStr);
}

function forminatorSignInit() {
	window.signObjects = [];
	jQuery ( ".forminator-signature" ).each( function() {
		var $el = jQuery( this );
		var id = $el.find( ".forminator-signature-canvas" ).attr( "id" );

		window.signObjects.push( id );
	} );

	jQuery ( ".forminator-signature" ).each( function() {
		var $el = jQuery( this );
		var id = $el.find( ".forminator-signature-canvas" ).attr( "id" );

		window[ 'loadSignField_' + id ]();
	} );
}

// Resize signature
function forminatorSignatureResize() {
	jQuery ( ".forminator-signature" ).each( function() {
		var $el = jQuery( this );
		var id = $el.find( ".forminator-signature-canvas" ).attr( "id" );

		if ( typeof window[ 'obj' + id ] !== "undefined" ) {
			var element = $el.closest( '.forminator-field' );
			var width = element.css( 'width' ).replace( 'px', '' );
			var height = $el.data( 'elementheight' );

			$el.find( "div[id$='_toolbar']" ).each( function( index, toolbar ) {
				if ( index > 0 ) {
					jQuery( toolbar ).remove();
				}
			});

			var data = false;
			$fieldVal = $el.find( 'input[name$="_data"]:eq( 0 )' ).val();

			if ( $fieldVal ) {
				data = base64DecodeUnicode( $fieldVal );
			}

			jQuery( document ).on( "forminator.front.loaded", function() {
				jQuery( window ).trigger( "resize" );
			});

			$el.on( "mouseover", function() {
				// Set hover class.
				jQuery( this ).closest( ".forminator-field" ).addClass( "forminator-is_hover" );

				jQuery( "#" + id ).on( "mousedown", function() {
					if ( "" !== jQuery( "#" + id + "_data" ).val() ) {
						jQuery( this ).closest( ".forminator-field" ).addClass( "forminator-is_filled" );
					}
				});
			}).on( "mouseleave", function() {
				// Remove hover class.
				jQuery( this ).closest( ".forminator-field" ).removeClass( "forminator-is_hover" );

				// Check if field has content.
				if ( "" === jQuery( "#" + id + "_data" ).val() ) {

					// Remove filled class.
					jQuery( this ).closest( ".forminator-field" ).removeClass( "forminator-is_filled" );
				} else {

					// Add filled class.
					jQuery( this ).closest( ".forminator-field" ).addClass( "forminator-is_filled" );
				}
			});

			if ( width > 0 ) {
				window.ResizeSignature( id, width, height );
				window.ClearSignature( id );
			}

			if ( data ) {
				window.LoadSignature( id, data, 1 );
			}
		}
	} );
}

window.debounce = function (func, wait, immediate) {
     var timeout;

     return function() {
         var context = this, args = arguments;
         var later = function() {
                 timeout = null;
                 if (!immediate) func.apply(context, args);
         };
         var callNow = immediate && !timeout;
         clearTimeout(timeout);
         timeout = setTimeout(later, wait);
         if (callNow) func.apply(context, args);
     };
};

// Trigger resize on gutenberg block
function forminatorLoadGutenberg() {
	if ( jQuery( ".forminator-signature" ).length === 0 ) {
		setTimeout( function () {
			forminatorLoadGutenberg();
		}, 300 );
	} else {
		forminatorSignInit();
		forminatorSignatureResize();

		jQuery( '.forminator-custom-form' ).on( 'forminator:field:condition:toggled', debounce( function() {
			if ( jQuery( this ).find( ".forminator-signature--container" ).length > 0 ) {
				forminatorSignatureResize();
			}
		}, 250 ) );
	}
}

// Resize signature field on window resize.
jQuery( window ).on( "resize", function() {
	forminatorSignatureResize();
});

jQuery( window ).on( "load", function() {
	forminatorSignInit();
	forminatorSignatureResize();

	jQuery( '.forminator-custom-form' ).on( 'forminator:field:condition:toggled', debounce( function() {
		if ( jQuery( this ).find( ".forminator-signature--container" ).length > 0 ) {
			forminatorSignatureResize();
		}
	}, 250 ) );
});

jQuery( document ).on( 'forminator.gutenberg.form.loaded', function( id ) {
	forminatorLoadGutenberg();
} );

jQuery( document ).on( 'after.load.forminator', function( id ) {
	forminatorLoadGutenberg();
} );
