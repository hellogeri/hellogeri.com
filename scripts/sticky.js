$(function(){ // document ready
	if ( !!$( ".sticky" ).offset() ) { // make sure ".sticky" element exists
		var stickyTop = $( ".sticky" ).offset().top;
		$(window).scroll(function(){ // scroll event
			var windowTop = $(window).scrollTop();

			if ( stickyTop < windowTop ) {
				$( ".sticky" ).addClass( "sticky-stuck" );
			} else {
				$( ".sticky" ).removeClass( "sticky-stuck" );
			}
		});
	} else {
		$( ".sticky" ).removeClass( "sticky-stuck" );
	}
});