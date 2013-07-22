<?php 
if(!isset($path)) { $path = ""; }
if(!isset($themeListPath)) { $themeListPath = "../"; }
if(!isset($twitterPath)) { $twitterPath = "../../"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title> regretless.com </title>
<meta charset="utf-8" />
<meta name="author" content="Ying Zhang" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<link rel="icon" type="image/png" href="/images/icon.png" />
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Gochi%20Hand' type='text/css' media='all' />
<link rel="stylesheet" href="css/regretless.css" type="text/css" />

<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
 
<body id="index" class="home">

<section id="header" class="body">
	<header><h1><a href="http://regretless.com" title="regretless.com"><span>The gal behind the scene...</span></a></h1></header>
	<article class="body">
		<?php include($themeListPath . 'about.php'); ?>
	</article>
</section>

<section id="content" class="body">
	<article id="open-projects" class="body">
	<h1><span>Open Projects</span></h1>
	<div class="jcarousel">
	<ul>
		<?php
			include('../themesList.php');
			foreach($themes as $key=>$val) {
				$themeName = $val[0];
				$themeDownloadUrl = $val[1];
				$liFormat = '<li><a href="http://regretless.com/oriental?theme-preview=%1$s" title="WordPress Theme: %2$s"><img src="http://regretless.com/oriental/wp-content/themes/%1$s/screenshot.png" class="%1$s" alt="WordPress Theme: %2$s" /></a></li>';
				echo sprintf($liFormat, $key, $themeName);
			}
		?>
	</ul>
	</div>
	<!-- Controls -->
    <a class="jcarousel-prev" href="#"></a>
    <a class="jcarousel-next" href="#"></a>
	</article>


</section><!-- /#content -->

<footer id="footer">
	<?php include($themeListPath . 'social.php'); ?>
</footer>

<div id="extra"></div><!-- /#extra -->

<div id="more"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script>
var jcarouselElement = jQuery('.jcarousel');
var jcarouselPrev = jQuery('.jcarousel-prev');
var jcarouselNext = jQuery('.jcarousel-next');
var jcarouselDestroyed = true;
var jcarouseInterval;
var jcarouselAutoScrollInterval = 2000;

jQuery(document).ready(function() {
	handleJcarousel();

	
	$('#open-projects').hover(
		function() {
			if(!jcarouselDestroyed) {
				clearInterval(jcarouseInterval);
			}
		},
		function() {
			if(!jcarouselDestroyed) {
				jcarouselStartScrollNext();
			}
		}
	);
});

$(window).resize(function() {
	jQuery('.jcarousel ul').css('top', 0);
	handleJcarousel();
});

function handleJcarousel() {
	if(jQuery('#more').css('display') == 'none') {
		jcarouselSetup();
	} else {
		jcarouselDestroy();
	}
}
function jcarouselSetup() {
	if(jcarouselDestroyed) {
		jcarouselElement = jQuery('.jcarousel').jcarousel({
			visible: 1,
			wrap: 'circular'
		})
		;

		jcarouselPrev = jQuery('.jcarousel-prev')
			.on('active.jcarouselcontrol', function() {
				$(this).removeClass('disabled');
			})
			.on('inactive.jcarouselcontrol', function() {
				$(this).addClass('disabled');
			})
			.jcarouselControl({target: '-=1',carousel: jcarouselElement});

		jcarouselNext = jQuery('.jcarousel-next')
			.on('active.jcarouselcontrol', function() {
				$(this).removeClass('disabled');
			})
			.on('inactive.jcarouselcontrol', function() {
				$(this).addClass('disabled');
			})
			.jcarouselControl({target: '+=1',carousel: jcarouselElement});

		jcarouselDestroyed = false;

		jcarouselStartScrollNext();
	}
}

function jcarouselStartScrollNext() {
	jcarouseInterval = setInterval(function(){ jcarouselScrollNext(); },jcarouselAutoScrollInterval);
}

function jcarouselScrollNext() {
	$(jcarouselElement).jcarousel('scroll', '+=1');
}

function jcarouselDestroy() {
	if(jcarouselDestroyed == false) {

		if(jcarouselElement) {
			jQuery(jcarouselElement).jcarousel('destroy');
		}
		if(jcarouselPrev) {
			jQuery(jcarouselPrev).jcarouselControl('destroy');
		}
		if(jcarouselNext) {
			jQuery(jcarouselNext).jcarouselControl('destroy');
		}

		clearInterval(jcarouseInterval);

		jcarouselDestroyed = true;

	}
}
</script>

</body>
</html>