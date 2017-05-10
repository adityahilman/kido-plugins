<?php
/*
Plugin Name: Kido Plugin
Plugin URI: https://www.adityahilman.com/kido-plugin
Description: Kido Plugin
Version: 1.0
Author: Aditya Hilman
Author URI: https://www.adityahilman.com
*/

if ( !defined('WPINC'))
{
	die;
}
/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    // Put your plugin code here
    // function menambahkan menu di tab Settings

    add_action('woocommerce_shipping_init','kid_shipping_method');
    
	add_filter('woocommerce_get_sections_shipping','kido_add_shipping_section');
	function kido_add_shipping_section ($section)
	{
		$section['kido-wp-plugin'] = __('KidoDia','kido-wp-plugin');
		return $section;
	}
}

?>