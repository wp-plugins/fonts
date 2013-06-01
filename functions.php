<?php 
	/*
	Plugin Name: Fonts
	Plugin URI: http://wpsites.net/plugins/fonts/
	Description: Add More Font Styles & Sizes To Your Visual Editor in WordPress
	Version: 1.0
	Author: Brad Dalton - wpsites
	Author URI: http://wpsites.net/
	License: GPL2
	*/
//Add Font Sytles & Sizes
function add_more_buttons($buttons) {
$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

