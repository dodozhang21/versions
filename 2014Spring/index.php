<?php 
if(!isset($path)) { $path = ""; }
if(!isset($jspath)) { $jspath = "bower_components/"; }
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
	
    <link rel="stylesheet" href="<?=$path?>css/app.css" />

	<script type="text/javascript" src="<?=$jspath?>modernizr/modernizr.js"></script>

</head>


<body>
<div id="container">
	<section id="wrapper">
		<div id="intro">
			<header id="header">
				<h1 class="logo"><a href="http://regretless.com" title="regretless.com"><span>The gal behind the scene...</span></a></h1>
			</header><!-- /header -->
			<article class="about">
				<div id="facebook-profile-wrapper"><img src="http://graph.facebook.com/1055884671/picture?type=small" id="facebook-profile" alt="facebook profile photo" title="facebook profile photo"/></div>
				<p>
				Welcome to regretless.com! My name is Ying Zhang and I'm a professional programmer and web designer. I specialize in responsive web design and Java web applications. I currently work full time as a Sr. Systems Engineer for Meredith on their parents.com/bhg.com team.  In my spare time, I enjoy writing on my blog <a href="http://pure-essence.net/" title="pure-essence.net">pure-essence.net</a> and create WordPress themes.  These days I also play on <a href="http://codepen.io/dodozhang21/">codepen.io</a>. Regretless.com is a portfolio for my free WordPress themes and other hobby websites. Happy browsing!
				</p>
				
				<div class="row social">
					<div class="large-3 medium-3 small-3 columns">
						<a href="http://pure-essence.net/about/contact/" class="email">Email</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="//www.facebook.com/dodozhang21" class="facebook">Facebook</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="//twitter.com/dodozhang21" class="twitter">Twitter</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="//www.linkedin.com/in/dodozhang21" class="linkedin">LinkedIn</a>
					</div>
				</div>

				<p id="latestTweet" class="latestTweet loading">
				&nbsp;
				</p>
			</article>
		</div>


		<div id="themes">
			<header>
				<h1 class="logo"><a href="#container" class="themesAndMore scrolltoanchor" title="Back to intro"><span>Themes and More</span></a></h1>
			</header>
			<article class="themes">
				<ul id="sb-slider" class="bxslider">
					<?php include($themeListPath . 'themesList.php'); printThemes(); ?>
				</ul>
			</article>
		</div>
	</section>


	<section id="footer">
		<p>Designed by Ying Zhang &copy; 2014</p>
		<a href="#container" class="backToTop scrolltoanchor" title="Back to top">Top</a>
	</section>
</div><!--/container-->

	<script src="<?=$jspath?>jquery/dist/jquery.min.js"></script>
    <script src="<?=$jspath?>foundation/js/foundation.min.js"></script>
    <script src="<?=$jspath?>bxSlider/jquery.bxslider.min.js"></script>
	<script>var twitterPath = '<?=$twitterPath?>';</script>
    <script src="<?=$path?>js/app.js"></script>

</body>
</html>	