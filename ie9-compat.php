<?php
/*
Plugin Name: IE9 Compat Inspector
Plugin URI: http://www.ramoonus.nl/wordpress/ie9-compat/
Description: Compat Inspector is designed to help sites migrating to IE9 Standards Mode, not those running in legacy modes.
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
// source http://blogs.msdn.com/b/ie/archive/2011/04/27/ie9-compat-inspector.aspx
// init
function rw_ie9compat() {
	echo '<script src="http://ie.microsoft.com/testdrive/HTML5/CompatInspector/inspector.js"></script>';
} 
// load
add_action('wp_head', 'rw_ie9compat');
?>