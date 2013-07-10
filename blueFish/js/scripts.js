$(document).ready(function(){
	jQuery.fn.exists = function(){
		return this.length > 0;
	}

	$('.bxslider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		slideWidth: 650
	});

		/*$(window).bind('shake', shakeEventDidOccur);*/
	shake();	
		
	if (window.DeviceOrientationEvent) {
	  $('.cell-image').css('transition-duration','0.05').css('-webkit-transition-duration','0.05').css('-webkit-transition-timing-function','linear');
	  window.addEventListener('deviceorientation', function(eventData) {
		// gamma is the left-to-right tilt in degrees, where right is positive
		var tiltLR = eventData.gamma;
		// beta is the front-to-back tilt in degrees, where front is positive
		var tiltFB = eventData.beta;
		// alpha is the compass direction the device is facing in degrees
		var dir = eventData.alpha
		// deviceorientation does not provide this data
		var motUD = null;
		// call our orientation event handler
		deviceOrientationHandler(tiltLR, tiltFB, dir, motUD);
	  }, false);
	}
	var PrevX = 0;
	function deviceOrientationHandler(tiltLR, tiltFB, dir, motUD){
		if(Math.abs(tiltLR-PrevX)>=1){	
			if(window.orientation == 0){
				$deg=(tiltLR/2)*-1;
				$('.cell-image').css('-webkit-transform','rotate('+$deg+'deg)');
				PrevX = tiltLR;
			}else{
				if(window.orientation == 180){
					$deg=(tiltLR/2);
					$('.cell-image').css('-webkit-transform','rotate('+$deg+'deg)');
					PrevX = tiltLR;
				}else{
					$('.cell-image').attr('style','');
				}
			}
		}
	}
	
	//function to call when shake occurs
	function shake() {
		$('.cell-image').transition({rotate:'-10deg'},200,'in-out');
		$('.cell-image').transition({rotate:'10deg'},200,'in-out');
		$('.cell-image').transition({rotate:'-10deg'},200,'in-out');
		$('.cell-image').transition({rotate:'10deg'},300,'in-out');
		$('.cell-image').transition({rotate:'-5deg'},300,'in-out');
		$('.cell-image').transition({rotate:'2deg'},300,'in-out');
		$('.cell-image').transition({rotate:'0deg'},300,'in-out', function(){
			$('.cell-image').attr('style','');
		});
		
	}

	if($("#header .balance").exists() && Modernizr.cssanimations && Modernizr.csstransitions){

		setTimeout(function(){
			$("#header .balance-1").addClass('animated');
		},300);

		$("#header .balance-1").bind("webkitAnimationEnd oAnimationEnd msAnimationEnd animationend", function(){
			$('.balance-1').transition({ rotate: '-7deg' },3000,'in-out', function(){
				$("#header .balance-1").addClass("oscillate");
			});
		});

		$("#header .balance-2").bind("webkitAnimationEnd oAnimationEnd msAnimationEnd animationend", function(){

			$('.balance-2').transition({ rotate: '7deg' },3000,'in-out', function(){
				$("#header .balance-2").addClass("oscillate");
			});
		});
	}

	
	if ($('.scrolltoanchor').exists()) {
		$(".scrolltoanchor").click(function() {
			$.scrollTo($($(this).attr("href")), {
				duration: 650
			});
			return false;
		});
	}
	
	$(window).scroll(function(){
		$("#themes").each(function(){
			if($(window).scrollTop() > ($(this).offset().top-301) && $(window).scrollTop() <= ($(this).offset().top + $(this).outerHeight(true))){
				$(this).find(".logo").fadeIn();
				$('.downArrows').hide();
			}
			else{
				$(this).find(".logo").fadeOut();
				$('.downArrows').show();
			}
		});
	});

	// get latest tweet
	$.ajax({
		url: "http://regretles.com/twitter/getTweets.php",
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


});