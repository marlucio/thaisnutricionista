<?php
/**
 * Interface defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */



add_action( 'interface_init', 'interface_constants', 10 );
/**
 * This function defines the Interface theme constants
 *
 * @since 1.0
 */
function interface_constants() {

	/** Define Directory Location Constants */
	define( 'INTERFACE_PARENT_DIR', get_template_directory() );
	define( 'INTERFACE_CHILD_DIR', get_stylesheet_directory() );
	define( 'INTERFACE_IMAGES_DIR', INTERFACE_PARENT_DIR . '/images' );
	define( 'INTERFACE_INC_DIR', INTERFACE_PARENT_DIR. '/inc' );
	define( 'INTERFACE_PARENT_CSS_DIR', INTERFACE_PARENT_DIR. '/css' );
	define( 'INTERFACE_ADMIN_DIR', INTERFACE_INC_DIR . '/admin' );
	define( 'INTERFACE_ADMIN_IMAGES_DIR', INTERFACE_ADMIN_DIR . '/images' );
	define( 'INTERFACE_ADMIN_JS_DIR', INTERFACE_ADMIN_DIR . '/js' );
	define( 'INTERFACE_ADMIN_CSS_DIR', INTERFACE_ADMIN_DIR . '/css' );
	define( 'INTERFACE_JS_DIR', INTERFACE_PARENT_DIR . '/js' );
	define( 'INTERFACE_CSS_DIR', INTERFACE_PARENT_DIR . '/css' );	
	define( 'INTERFACE_FUNCTIONS_DIR', INTERFACE_INC_DIR . '/functions' );
	define( 'INTERFACE_SHORTCODES_DIR', INTERFACE_INC_DIR . '/footer_info' );
	define( 'INTERFACE_STRUCTURE_DIR', INTERFACE_INC_DIR . '/structure' );
	if ( ! defined( 'INTERFACE_LANGUAGES_DIR' ) ) /** So we can define with a child theme */
		define( 'INTERFACE_LANGUAGES_DIR', INTERFACE_PARENT_DIR . '/languages' );
	define( 'INTERFACE_WIDGETS_DIR', INTERFACE_INC_DIR . '/widgets' );

	/** Define URL Location Constants */
	define( 'INTERFACE_PARENT_URL', get_template_directory_uri() );
	define( 'INTERFACE_CHILD_URL', get_stylesheet_directory_uri() );
	define( 'INTERFACE_IMAGES_URL', INTERFACE_PARENT_URL . '/images' );
	define( 'INTERFACE_INC_URL', INTERFACE_PARENT_URL . '/inc' );
	define( 'INTERFACE_ADMIN_URL', INTERFACE_INC_URL . '/admin' );
	define( 'INTERFACE_ADMIN_IMAGES_URL', INTERFACE_ADMIN_URL . '/images' );
	define( 'INTERFACE_ADMIN_JS_URL', INTERFACE_ADMIN_URL . '/js' );
	define( 'INTERFACE_ADMIN_CSS_URL', INTERFACE_ADMIN_URL . '/css' );
	define( 'INTERFACE_JS_URL', INTERFACE_PARENT_URL . '/js' );
	define( 'INTERFACE_CSS_URL', INTERFACE_PARENT_URL . '/css' );
	define( 'INTERFACE_FUNCTIONS_URL', INTERFACE_INC_URL . '/functions' );
	define( 'INTERFACE_SHORTCODES_URL', INTERFACE_INC_URL . '/footer_info' );
	define( 'INTERFACE_STRUCTURE_URL', INTERFACE_INC_URL . '/structure' );
	if ( ! defined( 'INTERFACE_LANGUAGES_URL' ) ) /** So we can predefine to child theme */
		define( 'INTERFACE_LANGUAGES_URL', INTERFACE_PARENT_URL . '/languages' );
	define( 'INTERFACE_WIDGETS_URL', INTERFACE_INC_URL . '/widgets' );

}


?>