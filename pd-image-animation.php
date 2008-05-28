<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/11667
Description: Displays thumbnails and GIF animations of public domain images from the online slideshow site slideshine.de.
Version: 1.2.0
Author: mfard
Author URI: http://www.slideshine.de/11667
*/
require_once(dirname(__FILE__) . '/php/PDImageAnimation.php');
$anim = new PDImageAnimation();
add_action('activate_pd-image-animation/PDImageAnimation.php',array(&$anim, 'activate'));
if (!function_exists("PDImageAnimation_ap")) { 
	function PDImageAnimation_ap() { 
		global $anim; 
		if (!isset($anim)) { 
			return; 
		}
		if (function_exists('add_options_page')) {
			add_options_page('PDImageAnimation', 'PDImageAnimation', 9, basename(__FILE__), array(&$anim, 'display_admin_page'));
		}
	}
}
add_action('admin_menu', 'PDImageAnimation_ap');
add_action('plugins_loaded', array(&$anim, 'load'));
?>
