<?php
/**
 * Build our theme
 *
 * @package CQ
 */

// autoload
require 'autoloader.php';

/**
 * Use * for origin
 */

header( 'Access-Control-Allow-Origin: *' );

// add theme support
if( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );
}

// set the length of the default excerpt
function cq_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'cq_excerpt_length');

// Add menus
if ( ! function_exists('add_cq_nav_menu_locations') ) {
	/**
	 * Register all the menu locations required for Bradley
	 */
	function add_cq_nav_menu_locations() {
		register_nav_menus( array(
			'primary'			 => 'Primary',
		) );
	}
	add_action( 'init', 'add_cq_nav_menu_locations');
}

// Add extra REST fields
require 'api.php';

// Register our custom post types
if ( class_exists( 'PremiseCPT' ) ) {
	new CQ_Services_CPT();
}

// remove customizer
add_action( 'wp_before_admin_bar_render', 'cq_before_admin_bar_render' );

function cq_before_admin_bar_render()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('customize');
}

?>
