$(document).ready(function() {
	$('#filter a').click(function() {
		$(this).css('outline','none');
		$('#filter .current').removeClass('current');
		$(this).parent().addClass('current');
		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			$('#portfolio li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('normal').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}
		
		return false;
	});
});