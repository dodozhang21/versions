<?php
$themes = array(
	'oriental'=>array('oriental', 'http://wordpress.org/extend/themes/oriental')
	,'tender-spring'=>array('Tender Spring', 'http://pure-essence.net/2013/03/07/wordpress-theme-tender-spring/')
	,'daffodil'=>array('daffodil', 'http://wordpress.org/extend/themes/daffodil')
	,'cute-frames'=>array('Cute Frames', 'http://pure-essence.net/2013/03/29/cute-frames/')
	,'customizedtwentytwelve'=>array('Easter Blue', 'http://pure-essence.net/2013/03/26/customized-twenty-twelve-easter-blue/')
	,'blackCat'=>array('Black Cat', 'http://pure-essence.net/2013/04/06/child-theme-for-twenty-eleven-black-cat/')
	,'its-a-girl'=>array('It\'s a Girl', 'http://wordpress.org/themes/its-a-girl')
	,'itsABoy'=>array('It\'s a Boy', 'http://pure-essence.net/2013/04/10/child-theme-for-twenty-eleven-its-a-boy/')
	,'dine-with-me'=>array('Dine With Me', 'http://pure-essence.net/2013/04/13/dine-with-me-child-theme-for-responsive/')
	,'casually'=>array('Casually', 'http://pure-essence.net/2013/04/18/child-theme-for-twenty-twelve-casually/')
	,'pinkXmas'=>array('Pink Xmas', 'http://pure-essence.net/2013/04/24/child-theme-for-twenty-twelve-pink-xmas/')
	,'summerDay'=>array('Summer Day', 'http://pure-essence.net/2013/04/26/child-theme-for-oriental-summer-day/')
	,'backToSchool'=>array('Back to School', 'http://pure-essence.net/2013/05/01/child-theme-for-twenty-twelve-back-to-school/')
	,'oriental-writing/'=>array('Oriental Writing', 'http://pure-essence.net/2013/06/25/child-theme-for-oriental-oriental-writing/')
	);
function printThemes() {
	global $themes;
	foreach($themes as $key=>$val) {
		$themeName = $val[0];
		$themeDownloadUrl = $val[1];

		$liFormat = '<li><a href="http://regretless.com/oriental?theme-preview=%1$s" title="WordPress Theme: %2$s"><img src="http://regretless.com/oriental/wp-content/themes/%1$s/screenshot.png" class="%1$s" alt="WordPress Theme: %2$s" /></a><div class="sb-description"><a href="http://regretless.com/oriental?theme-preview=%1$s" title="WordPress Theme: %2$s"><h3>%2$s</h3></a><a href="%3$s" title="Download" class="download">Download</a></div></li>';
		echo sprintf($liFormat, $key, $themeName, $themeDownloadUrl);
	}
}
?>