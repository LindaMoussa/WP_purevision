<?php
/*
Plugin Name: Hover Effects For Visual Composer
Plugin URI: http://themebon.com/item/hover-effects-for-visual-composer-pro/
Description: Hover Effects For Visual Composer is an impressive hover effects powered by pure CSS3 and iHover.
Author: themebon
Author URI: http://themebon.com/
License: GPLv2 or later
Text Domain: hvc
Version: 1.6.5
*/

// Don't load directly
if (!defined('ABSPATH')){die('-1');}


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ){
    
/* Constants */
define( 'hvc_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'hvc_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
if ( ! function_exists( 'vce_WordPressCheckup' ) ) {
    function vce_WordPressCheckup( $version = '3.8' ) {
        global $wp_version;
        if ( version_compare( $wp_version, $version, '>=' ) ) {
            return "true";
        } else {
            return "false";
        }
    }
}


// Admin Style CSS
function hvc_admin_enqeue() {
    
    wp_enqueue_style( 'hvc_admin_css', plugins_url( 'css/admin.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'hvc_admin_enqeue' );


//Loading CSS
function hover_effects_vc_style() {

    wp_enqueue_style('hvc_ihover', plugins_url( 'css/ihover.css' , __FILE__ ) );
    wp_enqueue_style('hvc_square2', plugins_url( 'css/square2.css' , __FILE__ ) );
    wp_enqueue_style('hvc_caption', plugins_url( 'css/caption.css' , __FILE__ ) );
    wp_enqueue_style('hvc_custom', plugins_url( 'css/custom.css' , __FILE__ ) );
    
}
add_action( 'wp_enqueue_scripts', 'hover_effects_vc_style' );



//params
require_once 'inc/param.php';
require_once 'inc/custom-param.php';
//require_once 'inc/google-fonts.php';


    }
    
// Check If VC is activate
else {
    function hvc_required_plugin() {
        if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
            add_action( 'admin_notices', 'hvc_required_plugin_notice' );

            deactivate_plugins( plugin_basename( __FILE__ ) ); 

            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
        }

    }
add_action( 'admin_init', 'hvc_required_plugin' );

    function hvc_required_plugin_notice(){
        ?><div class="error"><p>Error! you need to install or activate the <a target="_blank" href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=themebonwp">Visual Composer</a> plugin to run "<span style="font-weight: bold;">Hover Effects For Visual Composer</span>" plugin.</p></div><?php
    }
}