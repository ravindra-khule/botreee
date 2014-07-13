jQuery(document).ready(function(){
    
    new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
                        
                        jQuery(".various").fancybox({
		maxWidth	: 940,
		maxHeight	: 950,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	//dropdown menu
jQuery(function () {
  jQuery('.click-nav > ul').toggleClass('no-js js');
  jQuery('.click-nav .js ul').hide();
  jQuery('.click-nav .js').click(function(e) {
    jQuery('.click-nav .js ul').slideToggle(500);
    jQuery('.clicker').toggleClass('active');
    e.stopPropagation();
  });
  jQuery(document).click(function() {
    if (jQuery('.click-nav .js ul').is(':visible')) {
      jQuery('.click-nav .js ul', this).slideUp(500);
      jQuery('.clicker').removeClass('active');
    }
  });
  
  
});


//fancybox
jQuery(".various").fancybox({
		maxWidth	: 940,
		maxHeight	: 950,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});


});