<?php
/*
Plugin Name: Go to Top
Plugin URI: http://eggoez.com/flatpress
Description: Make Button <a href="http://eggoez.com/flatpress/search.php?q=go+top&stype=full" title="Info" target="_blank">Back to Top</a> Page.
Author: eggoez
Version: 1.3.3
Author URI: http://goez.my.id
*/ 
 
add_action('wp_head', 'plugin_gotop_head', 0);
function plugin_gotop_head() {
	$pdir=plugin_geturl('gotop');
	echo <<<gotop
	<!-- start of gotop -->
	<script type="text/javascript" src="{$pdir}gt.js"></script>
	<script type="text/javascript" src="{$pdir}top.js"></script>
	<!-- end of gotop -->
gotop;
}

?>
