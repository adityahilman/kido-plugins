<?php
/*
Plugin Name: Kido Plugin
Plugin URI: https://www.adityahilman.com/kido-plugin
Description: Kido Plugin
Version: 1.0
Author: Aditya Hilman
Author URI: https://www.adityahilman.com
*/

function kido_admin_menu()
{
	add_options_page("Kido Settings Menu","Kido Settings Menu",1,"Kido Settings Menu","kido_settings_menu");
}

function kido_settings_menu()
{
	include("templates/kido_settings_menu_page.php");
}
add_action('admin_menu','kido_admin_menu');
?>