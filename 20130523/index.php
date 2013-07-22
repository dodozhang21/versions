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
		<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Gochi%20Hand' type='text/css' media='all' />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	</head>
	<body>
		<section id="header" class="body">
			<header><h1><a href="http://regretless.com" title="regretless.com"><span>The gal behind the scene...</span></a></h1></header>
			<article class="body">
				<?php include($themeListPath . 'about.php'); ?>
			</article>
		</section>

		<section id="content" class="body">
			<article id="open-projects" class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<?php
						include('../themesList.php');
						foreach($themes as $key=>$val) {
							$themeName = $val[0];
							$themeDownloadUrl = $val[1];
							$liFormat = '<li><a href="http://regretless.com/oriental?theme-preview=%1$s" title="WordPress Theme: %2$s"><img src="http://regretless.com/oriental/wp-content/themes/%1$s/screenshot.png" class="%1$s" alt="WordPress Theme: %2$s" /></a><div class="sb-description"><a href="http://regretless.com/oriental?theme-preview=%1$s" title="WordPress Theme: %2$s"><h3>%2$s</h3></a></div></li>';
							echo sprintf($liFormat, $key, $themeName);
						}
					?>
				</ul>
				
				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
				</div>

			</article><!-- /wrapper -->

		</section>

		<footer id="footer">
			<?php include($themeListPath . 'social.php'); ?>
		</footer>

		<div id="canvasBubbles"></div>

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript" src="js/bubbles.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navOptions.show();
								$shadow.show();

							},
							orientation : 'h',
							cuboidsCount : 3,
							interval: 4000
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$( '#navPlay' ).on( 'click', function() {
								
								slicebox.play();
								return false;

							} );

							$( '#navPause' ).on( 'click', function() {
								
								slicebox.pause();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

				
				bubblesMain(new Object({
						type : 'radial',
						revolve : 'center',
						minSpeed : 100,
						maxSpeed : 500,
						minSize : 50,
						maxSize : 150,
						num : 100,
						colors : new Array('#342A22','#ffffff','#7B7065')
				}));

			});
		</script>
	</body>
</html>	