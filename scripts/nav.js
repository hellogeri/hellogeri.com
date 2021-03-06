(function( w, undefined ) {
	// Enable JS strict mode
	"use strict";

	var sel  = "toggle-nav",
		bkpt = "(max-width: 70em)",

		d = document,
		oEl = d.getElementById( sel ),
		init = function() {
			var txt = d.createTextNode( "Menu" ),
				toggle = d.createElement( "a" ),
				toggler = function( e ) {
					var el = e.target,
						classes = oEl.getAttribute( "class" ) || "",
						open = !~classes.indexOf( "hide-me" );

					if( open ) {
						oEl.setAttribute( "class", classes + " hide-me" );
					} else {
						oEl.setAttribute( "class", classes.replace( " hide-me", "" ) );
					}
					oEl.setAttribute( "aria-hidden", open );
					e.preventDefault();
				};

			toggle.setAttribute( "href", "#" + oEl.id );
			toggle.setAttribute( "class", "nav-toggle" );

			toggle.appendChild( txt );
			toggle.addEventListener( "click", toggler );

			oEl.setAttribute( "class", oEl.getAttribute( "class" ) || "" + " hide-me toggled-nav" );

			oEl.parentNode.insertBefore( toggle, oEl );
		};

	init();

}( this ));