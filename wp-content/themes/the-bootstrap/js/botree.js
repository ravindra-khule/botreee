jQuery(document).ready(function(){
    
   
        //dropdown menu
	jQuery('ul.sub-menu1').hide();
	 jQuery( '.dropdown' ).hover(
			function(){
				jQuery(this).children('.sub-menu1').slideDown(200);
			},
			function(){
				jQuery(this).children('.sub-menu1').slideUp(200);
			}
		);
	//	e.stopPropagation();
		jQuery('.dropdown li a').click(function(){
			 
				jQuery('.sub-menu1').slideUp(200);
		});
                
                //fancybox
        jQuery(".various").fancybox({
		maxWidth	: 940,
		maxHeight	: 1024,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    
      jQuery(".inline").colorbox({inline:true, width:"80%"});
      /* initialize shuffle plugin */
      var $grid = jQuery('#grid');
      $grid.shuffle({
                itemSelector: '.item', // the selector for the items in the grid
		gutterWidth: 15,
		columnWidth: 0
      });
      /* reshuffle when user clicks a filter item */
      jQuery('#filter a').click(function (e) {
        e.preventDefault();
        // set active class
        jQuery('#filter a').removeClass('active');
        jQuery(this).addClass('active');
        // get group name from clicked item
        var groupName = jQuery(this).attr('data-group');
        // reshuffle grid
        $grid.shuffle('shuffle', groupName );
      });

      
});

var windowH = jQuery(window).height();
jQuery('.contentWrap').css({'height':(jQuery(window).height())+'%'});



