$(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
     animationSpeed: 1000,
  });
});

$(document).ready(function(){ 
	var touch 	= $('#touch-menu');
	var menu 	= $('.menu');

	$('a.fancyImg').fancybox();
	
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	

	$(function() {

 		 $('#lang').styler();
			});
	$(function() {

 		 $('.countryDeliv .country').styler();
			});
});


