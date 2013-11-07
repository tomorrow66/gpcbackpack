/**
 * scripts.js
 */

(function($) {

  // jQuery goes here
  
  if(window.chrome) {
		$('.banner li').css('background-size', 'cover');
	}

	$('.banner').unslider({
    speed: 500,
    delay: 9000,
		arrows: false,
		fluid: true,
		dots: true
	});	

}(jQuery));
