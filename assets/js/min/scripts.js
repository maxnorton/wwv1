jQuery(document).foundation({
	equalizer : {
	    // Specify if Equalizer should make elements equal height once they become stacked.
	    equalize_on_stack: true
 	}
 });

jQuery(document).ready(function() {

	jQuery('.scroll-to-anchor').each( function() {
		jQuery(this).click( function() {
			var target = jQuery(this).attr('href');
			jQuery('html, body').animate({
		        scrollTop: jQuery(target).offset().top
		    }, 750);
		});
	});

	var lastScroll = jQuery(window).scrollTop();
	jQuery(window).scroll(function() {
		var scrollTop = jQuery(window).scrollTop();
		var contentTop = Math.round( jQuery('#content').offset().top - 30 );
		if ( scrollTop > lastScroll &&  scrollTop < contentTop - 100) {
			jQuery('html, body').animate({
		        scrollTop: contentTop
			    }, 250, function () {
						jQuery('html, body').stop();
			    }
		    );
		}
		lastScroll = scrollTop;
	});

});