<?php
/*
Plugin Name: My Extension
Plugin URI: http://www.tbd.com
Description: Coach
Version: 0.1
Author: JD
Author URI: http://www.tbd.com
Text Domain: my-extension
Domain Path: languages
*/
define( 'COACH_URL', plugin_dir_url ( __FILE__ ) ); 
define( 'COACH_DIR', plugin_dir_path( __FILE__ ) ); 
define( 'COACH_VERSION', '0.1' ); 
define( 'COACH_OPTION', 'me_ext' );

function _my_extension_load_files($dir, $files, $prefix = '') {
foreach ($files as $file) {
 if ( is_file($dir . $prefix . $file . ".php") ) {
 require_once($dir . $prefix . $file . ".php");
 }
 } 
}

// Les classes clientes
_my_extension_load_files( ME_DIR.'classes', array( 'main' ) );

// Les classes admin
_my_extension_load_files( ME_DIR.'classes/admin/', array( 'admin', 'page' ) );

// Les fonctions
_my_extension_load_files( ME_DIR.'functions/', array( 'plugin', 'tpl' ) );

function MyExtension_Init() {
global $myExt;

// Load translations
load_plugin_textdomain ( 'my-extension', false, basename(rtrim(dirname(__FILE__), '/')) . '/languages' );

// Load client
$myExt['client'] = new myExtension_Client();

// Admin
if ( is_admin() ) {
$myExt['admin'] = new myExtension_Admin();
$myExt['admin_page'] = new myExtension_Admin_Page();

}
}
add_action( 'plugins_loaded', 'MyExtension_Init' );

?>