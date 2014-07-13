jQuery(document).ready(function() {
	jQuery('#filter a').click(function() {
		jQuery(this).css('outline','none');
		jQuery('#filter .current').removeClass('current');
		jQuery(this).parent().addClass('current');
		
		var filterVal = jQuery(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			jQuery('#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			jQuery('#portfolio li').each(function() {
				if(!jQuery(this).hasClass(filterVal)) {
					jQuery(this).fadeOut('normal').addClass('hidden');
				} else {
					jQuery(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}
		
		return false;
	});
});