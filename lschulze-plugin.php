<?php

/**
 * @package LschulzePlugin
 */



/*
Plugin Name: Lschulze Plugin
Plugin URI: http://lschulze.com
Description: Custom Plugin For Me
Version: 0.1.0
Author: Lucas "Lschulze" Schulze
Author URI: http://lschulze.com
License: GPLv2 or later
Text Domain: lschulze-plugin
*/

// If the file is called directly, abort!!
defined("ABSPATH") || die("Access not allowed");

// Require once the Composer Autoload
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}



/**
 * The code that runs during the plugin activation 
 */
function activate_lschulze_plugin()
{
  Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_lschulze_plugin');
/**
 * The code that runs during the plugin deactivation 
 */
function deactivate_lschulze_plugin()
{
  Inc\Base\Deactivate::deactivate();
}
/**
 * Wordpress Essential Hooks 
 */
register_deactivation_hook(__FILE__, 'deactivate_lschulze_plugin');

if (class_exists('Inc\\Init')) {
  Inc\Init::register_services();
}
