jQuery(document).foundation({
	equalizer : {
	    // Specify if Equalizer should make elements equal height once they become stacked.
	    equalize_on_stack: true
 	}
 });

jQuery(document).ready(function() {

   var s = skrollr.init();

   jQuery('body').append('<div id="skrollr-body"></div>');

   var killAutoscroll = false;

	jQuery('.scroll-to-anchor').each( function() {
		jQuery(this).click( function() {
			var target = jQuery(this).attr('href');
			killAutoscroll = true;
			jQuery('html, body').animate({
		        scrollTop: jQuery(target).offset().top
		    }, 750);
		});
	});

	if ( jQuery('body').hasClass('home') ) {
		var lastScroll = jQuery(window).scrollTop();
		jQuery(window).scroll(function() {
			var scrollTop = jQuery(window).scrollTop();
			var contentTop = Math.round( jQuery('#content').offset().top - 30 );
			if ( scrollTop > lastScroll &&  scrollTop < contentTop - 100 && !killAutoscroll) {
				jQuery('html, body').animate({
			        scrollTop: contentTop
				    }, 250, function () {
							jQuery('html, body').stop();
				    }
			    );
			}
			lastScroll = scrollTop;
		});
	}

});