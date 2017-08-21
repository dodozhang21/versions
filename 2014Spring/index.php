<?php 
if(!isset($path)) { $path = ""; }
if(!isset($jspath)) { $jspath = "node_modules/"; }
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
</head>


<body>
<div class="container">
	<section class="wrapper">
    <div class="butterfly">
      <div class="left wing"></div>
      <div class="right wing"></div>
    </div>
		<div class="introWrapper">
			<header class="header">
				<h1 class="logo"><a href="http://regretless.com" title="regretless.com"><span>The gal behind the scene...</span></a></h1>
			</header><!-- /header -->
			<article class="about">
				<div class="facebookProfileWrapper">
          <img src="http://graph.facebook.com/1055884671/picture?type=small" class="facebookProfile" alt="facebook profile photo" title="facebook profile photo"/>
        </div>
				<p>
				Welcome to regretless.com! My name is Ying Zhang and I'm a professional programmer and web designer.
        I've spent two decades designing web pages and create web applications.
        My specialty is responsive web design, Express, Drupal and Java web application.
        I currently work full time as a Leader Engineer for Meredith Inc - a media company that owns brands such as Better Homes and Gardens, allrecipes.com and Parents.
        In my spare time, I enjoy <a href="https://www.youtube.com/playlist?list=PL4ON5BewSYuE2cZQlzt5oruhb9MtrowZV" title="The songs I sang">recording my singing</a>,
        playing on <a href="http://codepen.io/dodozhang21/" title="Ying Zhang's codepen projects">codepen.io</a>
        and writing on my blog <a href="http://pure-essence.net/" title="pure-essence.net">pure-essence.net</a>.
        Regretless.com is a portfolio for my free WordPress themes and other hobby websites. Happy browsing!
				</p>
			</article>
		</div>

		<div class="socialWrapper">
      <a href="http://pure-essence.net/about/contact/" class="socialIcon email">Email</a>
      <a href="//www.facebook.com/dodozhang21" class="socialIcon facebook">Facebook</a>
      <a href="//twitter.com/dodozhang21" class="socialIcon twitter">Twitter</a>
      <a href="//www.linkedin.com/in/dodozhang21" class="socialIcon linkedin">LinkedIn</a>
		</div>

    <h2 class="latestRecordingTitle">My Sample Recording</h2>
    <div class="latestRecording">
      <div id="player"></div>
      <div class="musicPlayer">
        <div class="musicPlayer__controllers">
          <a href="#" id="play" class="playPause">Play/Pause</a>
          <div id="musicNotes" class="musicNotes">
            <div class="notePosition1 noteAnimation">
              &#9835;
            </div>
            <div class="notePosition2 noteAnimation animationDelay2">
              &#9833;
            </div>
            <div class="notePosition3 noteAnimation animationDelay1">
              &#9839;
            </div>
            <div class="notePosition4 noteAnimation">
              &#9834;
            </div>
          </div>
          <a
            href="https://www.youtube.com/playlist?list=PL4ON5BewSYuE2cZQlzt5oruhb9MtrowZV"
            id="moreMusic" class="moreMusic" title="More Recordings">More Music</a>
        </div>
      </div>
		</div>

		<div class="themesWrapper">
			<header>
				<h2 class="themesTitle">Themes and More</h2>
			</header>
			<article class="themes">
				<ul id="sb-slider" class="bxslider">
					<?php include($themeListPath . 'themesList.php'); printThemes(); ?>
				</ul>
			</article>
		</div>
	</section>


	<footer class="footer">
		<p>Designed by Ying Zhang &copy; 2017</p>
		<a href="#container" class="backToTop scrollToAnchor" title="Back to top">Top</a>
	</footer>
</div><!--/container-->
	
<script src="<?=$jspath?>jquery/dist/jquery.js"></script>
<script src="<?=$jspath?>bxslider/dist/jquery.bxslider.js"></script>
<script>var twitterPath = '<?=$twitterPath?>';</script>
<script src="<?=$path?>js/app.js"></script>
<script src="<?=$path?>js/youtube.js"></script>
<script>
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '0',
      videoId: 'CJGuvC8rYIE',
      playerVars: {'start': 2, 'loop': 1},
      events: {
        'onReady': onPlayerReady
      }
    });
  }
</script>
</body>
</html>	