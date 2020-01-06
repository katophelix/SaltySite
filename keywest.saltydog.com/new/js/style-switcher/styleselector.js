jQuery(document).ready(function($) {

	jQuery('body').addClass('bg-cover');

	// Style Selector	
	jQuery('#style-selector').animate({
		left: '-155px'
	});

	jQuery('#style-selector a.close').click(function(e){
		e.preventDefault();
		var div = jQuery('#style-selector');
		if (div.css('left') === '-155px') {
			jQuery('#style-selector').animate({
				left: '0'
			});
			jQuery(this).removeClass('icon-chevron-left');
			jQuery(this).addClass('icon-chevron-right');
		} else {
			jQuery('#style-selector').animate({
				left: '-155px'
			});
			jQuery(this).removeClass('icon-chevron-right');
			jQuery(this).addClass('icon-chevron-left');
		}
	})


	

});




