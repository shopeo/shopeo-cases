<?php
/**
 * Plugin Name: SHOPEO Cases
 * Plugin URI: https://www.shopeo.cn
 * Description:
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://www.shopeo.cn
 * License: GPL2+
 * Text Domain: shopeo-cases
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

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