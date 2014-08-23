$(document).ready(function(){
	
	//dropdown menu
	$('ul.sub-menu').hide();
	 $( '.dropdown' ).hover(
			function(){
				$(this).children('.sub-menu').slideDown(200);
			},
			function(){
				$(this).children('.sub-menu').slideUp(200);
			}
		);
	//	e.stopPropagation();
		$('.dropdown li a').click(function(){
			 
				$('.sub-menu').slideUp(200);
		});
});


var windowH = $(window).height();
$('.contentWrap').css({'height':($(window).height())+'%'});
 
