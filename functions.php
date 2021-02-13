<?php
/**
 * trumpicon functions and definitions
 *
 * @package trumpicon
 * 
 */

function trumpicon_setup() {
	
	/*
	* This theme uses wp_nav_menu() in one location.	
	*/
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'trumpicon' ),
	) );

	/*
	* Enable support for post formats.	
	*/

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',		
	) );
}

add_action( 'after_setup_theme', 'trumpicon_setup' );

/**
 * Enqueue scripts and styles.
 */

function trumpicon_scripts() {

	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	wp_enqueue_style( 'stylereset.css', get_template_directory_uri() . '/assets/css/stylereset.css');
}

add_action('wp_enqueue_scripts', 'trumpicon_scripts');

/*
* Add custom logo.
*/

function trumpicon_custom_logo_setup() {
 $defaults = array(
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo');
}

add_action( 'after_setup_theme', 'trumpicon_custom_logo_setup' );

/*
* Register widget area.
*/

function trumpicon_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'trumpicon' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );	
}
add_action( 'widgets_init', 'trumpicon_widgets_init' );

?>