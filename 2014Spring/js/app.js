(function($) {
	$('.bxslider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		slideWidth: 600
	});


	// get latest tweet
	$.ajax({
		url: twitterPath + "twitter/getTweets.php",
		type: "GET",
		data: { count : '2', user : 'dodozhang21' },
		success: function(data, textStatus, jqXHR){
			var html = '<ul>';
			for(var x in data) {
				var tweet = data[x];
				//console.log(tweet);
				html += '<li>';
				html += tweet.text;
				html += '<span>';
				html += tweet.created_at;
				html += '</span></li>';
			}
			html += '</ul>';
			$('#latestTweet').removeClass('loading');
			$('#latestTweet').html(html);
		},
		error: function (jqXHR, textStatus, errorThrown){
			//console.log('Error ' + jqXHR);
		}
	});

	$(".scrolltoanchor").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($(this).attr("href")).offset().top
		}, 650);
	});

})(jQuery);