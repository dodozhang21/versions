<?php 
if(!isset($path)) { $path = ""; }
if(!isset($themeListPath)) { $themeListPath = "../"; }
if(!isset($twitterPath)) { $twitterPath = "../../"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>regretless.com</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="author" content="Ying Zhang" />
	<link rel="icon" type="image/png" href="/images/icon.png" />
		<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Berkshire%20Swash|PT%20Sans' type='text/css' media='all' />

	<link rel="stylesheet" type="text/css" href="<?=$path?>css/nightSky.css" />

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$path?>js/jquery.bxslider.4.1.min.js"></script>
	<script type="text/javascript" src="<?=$path?>js/plugins.js"></script>

	<!--<![endif]-->
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="css/nightSky-ie.css" media="all"/>
	<![endif]-->
	<script src="<?=$path?>js/modernizr.js"></script>
	<script>
		Modernizr.load([
		  //Animation polyfills
		  {
			test : Modernizr.cssanimations && Modernizr.csstransitions,
			nope : ['<?=$path?>js/easing.js', '<?=$path?>js/jQueryRotateCompressed.2.2.js', '<?=$path?>js/animation-polyfill.js']
		  }
		]);
	</script>
	<script>var twitterPath = '<?=$twitterPath?>';</script>
	<script src="<?=$path?>js/scripts.js"></script>
</head>


<body>
	<div class="downArrows" title="Scroll Down"><span class="arrow"/></div>
	<section id="wrapper">
		<div id="intro">
		<header id="header">
			<h1 class="logo"><a href="http://regretless.com" title="regretless.com"><span>The gal behind the scene...</span></a></h1>
			<span class="balance balance-1">&nbsp;</span>
			<span class="balance balance-2">&nbsp;</span>
		</header><!-- /header -->
		<article class="about">
			<div id="facebook-profile-wrapper" class="cell-image"><img src="http://graph.facebook.com/1055884671/picture?type=small" id="facebook-profile" alt="facebook profile photo" title="facebook profile photo"/></div>
			<p>
			Welcome to regretless.com! My name is Ying Zhang and I'm a professional programmer and web designer. I specialize in responsive web design and Java web applications. I currently work full time as a Sr. Systems Engineer for Meredith on their parents.com team.  In my spare time, I enjoy writing on <a href="http://pure-essence.net/" title="pure-essence.net">my blog pure-essence.net</a> and create WordPress themes.  These days I also play on <a href="http://codepen.io/dodozhang21/">codepen.io</a>. Regretless.com is a portfolio for my free WordPress themes and other hobby websites. Happy browsing!
			</p>
			
			<ul class="social">
			  <li><a href="http://pure-essence.net/about/contact/" class="email">Email</a></li>
			  <li><a href="//www.facebook.com/dodozhang21" class="facebook">Facebook</a></li>
			  <li><a href="//twitter.com/dodozhang21" class="twitter">Twitter</a></li>
			  <li><a href="//www.linkedin.com/in/dodozhang21" class="linkedin">LinkedIn</a></li>
			</ul>

			<p id="latestTweet" class="latestTweet loading">
			&nbsp;
			</p>
			
			<a id="toThemes" href="#themes" title="Go Fish!" class="scrolltoanchor cell-image">Themes</a>
		</article>
		</div>


		<div id="themes">
			<header>
				<h1 class="logo"><a href="#intro" class="scrolltoanchor" title="Back to intro"><span>About</span></a></h1>
			</header>
			<article class="themes">
				<ul id="sb-slider" class="bxslider">
					<?php include($themeListPath . 'themesList.php'); printThemes(); ?>
				</ul>
			</article>
		</div>
	</section>


	<section id="footer">
		<p>Designed by Ying Zhang &copy; 2013</p>
		<a href="#intro" class="scrolltoanchor cell-image" title="Back to top">Top</a>
	</section>
			
</body>
</html>	