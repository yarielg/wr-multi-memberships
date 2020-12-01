<?php
/*
*
* @package yariko


Plugin Name:  WR Multi Memberships
Plugin URI:   https://webreadynow.com/
Description:  This plugin creates a multi-vendor content business, where customers can create theirs own subscriptions and sell their content.
Version:      1.0.0
Author:       Bennet Group (Yariel Gordillo)
Author URI:   https://thomasgbennett.com/
Tested up to: 5.3.2
Text Domain:  wr_multi_member
Domain Path:  /languages
*/

defined('ABSPATH') or die('You do not have access, sally human!!!');

define ( 'WRMM_PLUGIN_VERSION', '1.0.0');

if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ){
    require_once  dirname( __FILE__ ) . '/vendor/autoload.php';
}
//Change WRPL for plugin's initials
define('WRMM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('WRMM_PLUGIN_URL' , plugin_dir_url(  __FILE__  ) );
define('WRMM_ADMIN_URL' , get_admin_url() );
define('WRMM_PLUGIN_DIR_BASENAME' , dirname(plugin_basename(__FILE__)) );

//include the helpers
include 'inc/util/helpers.php';

if( class_exists( 'Wrmm\\Inc\\Init' ) ){
    register_activation_hook( __FILE__ , array('Wrmm\\Inc\\Base\\Activate','activate') );
    Wrmm\Inc\Init::register_services();
}



