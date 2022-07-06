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
		unregister_post_type( 'shopeo_case' );
		unregister_taxonomy( 'shopeo_case_type' );
	}
}

register_deactivation_hook( __FILE__, 'shopeo_cases_deactivate' );

if ( ! function_exists( 'shopeo_cases_load_textdomain' ) ) {
	function shopeo_cases_load_textdomain() {
		load_plugin_textdomain( 'shopeo-cases', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'shopeo_cases_load_textdomain' );

if ( ! function_exists( 'shopeo_cases_post_type' ) ) {
	function shopeo_cases_post_type() {
		register_post_type( 'shopeo_case', array(
			'label'              => __( 'Cases', 'shopeo-cases' ),
			'labels'             => array(
				'name'               => __( 'Cases', 'shopeo-cases' ),
				'all_items'          => __( 'All Cases', 'shopeo-cases' ),
				'singular_name'      => __( 'Case', 'shopeo-cases' ),
				'add_new_item'       => __( 'Add New Case', 'shopeo-cases' ),
				'edit_item'          => __( 'Edit Case', 'shopeo-cases' ),
				'view_item'          => __( 'View Case', 'shopeo-cases' ),
				'view_items'         => __( 'View Cases', 'shopeo-cases' ),
				'search_items'       => __( 'Search Cases', 'shopeo-cases' ),
				'not_found'          => __( 'No cases found.', 'shopeo-cases' ),
				'not_found_in_trash' => __( 'No cases found in trash.', 'shopeo-cases' ),
				'archives'           => __( 'Case Archives', 'shopeo-cases' ),
				'attributes'         => __( 'Case Attributes', 'shopeo-cases' ),
			),
			'public'             => true,
			'hierarchical'       => false,
			'publicly_queryable' => true,
			'has_archive'        => true,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-flag',
			'show_in_rest'       => true,
			'rest_base'          => 'cases',
			'map_meta_cap'       => true,
			'supports'           => array(
				'title',
				'editor',
				'comments',
				'revisions',
				'trackbacks',
				'excerpt',
				'page-attributes',
				'thumbnail',
				'custom-fields',
				'post-formats'
			),
			'rewrite'            => array(
				'slug' => 'cases'
			),
			'query_var'          => false,
		) );
	}
}

add_action( 'init', 'shopeo_cases_post_type' );

if ( ! function_exists( 'shopeo_cases_register_taxonomy_type' ) ) {
	function shopeo_cases_register_taxonomy_type() {
		register_taxonomy( 'shopeo_case_type', 'shopeo_case', array(
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rest_base'         => 'types',
			'query_var'         => true,
			'rewrite'           => array(
				'slug' => 'type'
			),
			'labels'            => array(
				'name'              => __( 'Types', 'shopeo-cases' ),
				'singular_name'     => __( 'Type', 'shopeo-cases' ),
				'search_items'      => __( 'Search Types', 'shopeo-cases' ),
				'all_items'         => __( 'All Types', 'shopeo-cases' ),
				'parent_item'       => __( 'Parent Type', 'shopeo-cases' ),
				'parent_item_colon' => __( 'Parent Type:', 'shopeo-cases' ),
				'edit_item'         => __( 'Edit Type', 'shopeo-cases' ),
				'update_item'       => __( 'Update Type', 'shopeo-cases' ),
				'add_new_item'      => __( 'New Type Name', 'shopeo-cases' ),
				'menu_item'         => __( 'Type', 'shopeo-cases' ),
			)
		) );
	}
}

add_action( 'init', 'shopeo_cases_register_taxonomy_type' );
