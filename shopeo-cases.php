<?php
/**
 * Plugin Name: SHOPEO Cases
 * Plugin URI: https://www.shopeo.cn
 * Description: Custom Cases Post Type
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://www.shopeo.cn
 * License: GPL2+
 * Text Domain: shopeo-cases
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define SHOPEO_CASES_PLUGIN_FILE.
if ( ! defined( 'SHOPEO_CASES_PLUGIN_FILE' ) ) {
	define( 'SHOPEO_CASES_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'SHOPEO_CASES_PLUGIN_BASE' ) ) {
	define( 'SHOPEO_CASES_PLUGIN_BASE', plugin_basename( SHOPEO_CASES_PLUGIN_FILE ) );
}

if ( ! defined( 'SHOPEO_CASES_PATH' ) ) {
	define( 'SHOPEO_CASES_PATH', plugin_dir_path( SHOPEO_CASES_PLUGIN_FILE ) );
}

if ( ! function_exists( 'shopeo_cases_activate' ) ) {
	function shopeo_cases_activate() {

	}
}

register_activation_hook( __FILE__, 'shopeo_cases_activate' );

if ( ! function_exists( 'shopeo_cases_deactivate' ) ) {
	function shopeo_cases_deactivate() {

	}
}

register_deactivation_hook( __FILE__, 'shopeo_cases_deactivate' );

if ( ! function_exists( 'shopeo_cases_load_textdomain' ) ) {
	function shopeo_cases_load_textdomain() {
		load_plugin_textdomain( 'shopeo-cases', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'shopeo_cases_load_textdomain' );
