<?php
/*
Plugin Name: PHP Footer Adds
Plugin URI: http://eggoez.com
Description: <a href="http://eggoez.com/flatpress/search.php?q=php+adds&stype=full" title="Info" target="_blank">PhPAdds</a> the code HTML JavaScripts 
Author: eggoez
Version: 1.0
Author URI: http://goez.my.id
*/ 
 
function plugin_phpadds() {
?>
<!-- Write Scripts Below -->

<!-- End of footer HTML Scripts -->
<?php
}
add_action('wp_footer', 'plugin_phpadds');
?>
