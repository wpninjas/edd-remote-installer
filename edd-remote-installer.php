<?php
/**
 * Plugin Name: EDD - Remote Installer
 * Description: Allows remote installation of WordPress plugins and themes
 * Version: 2.0.1-beta
 * Author: Aristeides Stathopoulos
 * Author URI: http://aristeides.com
 * Contributors: aristath, austyfrosty
 * Text Domain: edd_ri
 * GitHub Plugin URI: https://github.com/wpninjas/edd-remote-installer
 * GitHub Branch: master
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if( ! defined( 'EDD_RI_IS_SERVER' ) ) {
	define( 'EDD_RI_IS_SERVER', true );
}

if ( ! defined( 'EDD_RI_PLUGIN_URL' ) ) {
	define( 'EDD_RI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'EDD_RI_VERSION' ) ) {
	define( 'EDD_RI_VERSION', '2.0.1' );
}

if ( ! class_exists( 'EDD_RI_Client', false ) ) {
	include( __DIR__ . '/includes/class-EDD_RI_Client.php' );
}

add_action( 'plugins_loaded', 'EDD_RI_Client::init', 1 );
