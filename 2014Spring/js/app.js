(function($) {
	$('.bxslider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		slideWidth: 600
	});

	$(".backToTop").on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 650);
	});

})(jQuery);