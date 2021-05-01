( function( $ ) {

	/**
	 * 
	 * .js
	 * 
	 */

	$('body').addClass('js').removeClass('no-js');

	/**
	 * 
	 * 
	 * 
	 */
	
	$( '.site-header__main-navigation-toggle' ).on( 'click', function(e){

		e.preventDefault();
		$( '.site-header__main-navigation.lazy-main-navigation' ).toggleClass( 'lazy-main-navigation--open' );

	});




	/**
	 * 
	 * Sticky header
	 * 
	 */

	/*


	if( $('.site-header').hasClass('site-header--fixed') ){
	
		// adminbar ?
		var wpadminbar = 0 ;

		// site-header ?
		var site_header = 0 ;
		var $site_header = $( '.site-header' ) ;

		var padding_top_on_site = 0 ;

		
		function lazy_sticky_header_body_padding( ){

			if( $site_header.length > 0 ){ site_header = $site_header.outerHeight() ; }

			padding_top_on_site = 0 ;
			padding_top_on_site = site_header + wpadminbar ;
			
			$( '.site' ).css( 'padding-top',  padding_top_on_site + 'px' );
			
		}
		
		lazy_sticky_header_body_padding( ) ;
		
		// Resize event
		// @source : https://stackoverflow.com/questions/5489946/how-to-wait-for-the-end-of-resize-event-and-only-then-perform-an-action#5490021
		var rtime;
		var timeout = false;
		var delta = 200;
		
		$(window).resize(function() {
			
			rtime = new Date();
			if (timeout === false) {
				timeout = true;
				
				setTimeout( resizeend , delta);
			}
			
		});
		
		function resizeend( $ ) {
			
			if (new Date() - rtime < delta) {
				setTimeout(resizeend, delta);
				
			} else {
				timeout = false;
				lazy_sticky_header_body_padding();
			}
		}
		// - end / Resize event

	}


	*/


}( jQuery ) );