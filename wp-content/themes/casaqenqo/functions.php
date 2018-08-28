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

// add metaboxes
pwp_add_metabox(
	'Overlay Colour',
	'page',
	array(
		array(
			'type'    => 'select',
			'options' => array (
				'Green' => 'green',
				'Orange' => 'orange',
				'Purple' => 'purple',
				'White' => 'white',
				'Black' => 'black',
				'Silver' => 'silver'
			),
			'context' => 'post',
			'name'    => 'page_overlay',
			'label'   => 'Pick a colour:',
		),
	),
	'page_overlay'
);

// remove customizer
add_action( 'wp_before_admin_bar_render', 'cq_before_admin_bar_render' );

function cq_before_admin_bar_render()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('customize');
}

// remove menu items
function cq_remove_menus(){

  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack*
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'cq_remove_menus' );

// decode title
function cq_decode_title( string $title): string {
	return html_entity_decode( $title, ENT_QUOTES, 'UTF-8' );
}

add_filter( 'the_title', 'cq_decode_title', 10, 1 );




?>
