<?php
/*
Plugin Name: Internet Explorer Compatibility Inspector
Plugin URI: http://www.ramoonus.nl/wordpress/ie9-compat/
Description: Compat Inspector is designed to help sites migrating to IE9 Standards Mode, not those running in legacy modes.
Version: 1.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

// @source http://blogs.msdn.com/b/ie/archive/2011/04/27/ie9-compat-inspector.aspx
// @source http://blogs.msdn.com/b/ie/archive/2012/01/20/ie10-compat-inspector.aspx

function rw_ie9compat() {
    wp_deregister_script( 'ie9compat' );
    wp_enqueue_script( 'ie9compat', 'http://ie.microsoft.com/TestDrive/HTML5/CompatInspector/inspector.js' );
}    
add_action('wp_enqueue_scripts', 'rw_ie9compat');

?>