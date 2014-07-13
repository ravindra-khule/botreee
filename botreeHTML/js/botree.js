$(document).ready(function(){
	//dropdown menu
$(function () {
  $('.click-nav > ul').toggleClass('no-js js');
  $('.click-nav .js ul').hide();
  $('.click-nav .js').click(function(e) {
    $('.click-nav .js ul').slideToggle(500);
    $('.clicker').toggleClass('active');
    e.stopPropagation();
  });
  $(document).click(function() {
    if ($('.click-nav .js ul').is(':visible')) {
      $('.click-nav .js ul', this).slideUp(500);
      $('.clicker').removeClass('active');
    }
  });
});


//fancybox
$(".various").fancybox({
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