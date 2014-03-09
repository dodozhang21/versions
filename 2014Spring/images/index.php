<?php

if ($handle = opendir('.')) {


    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
    	if('.' != $entry && '..' != $entry && 'index.php' != $entry) {
        	echo "<h1>$entry</h1>\n";
        	echo "<img src=\"".$entry."\" style=\"border: 1px solid red;\"/>";
        }
    }

    /* This is the WRONG way to loop over the directory. */
    while ($entry = readdir($handle)) {
        echo "$entry\n";
    }

    closedir($handle);
}
?>