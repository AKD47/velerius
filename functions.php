<?php
/**
 * Velerius functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Velerius
 */

if ( ! function_exists( 'velerius_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function velerius_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Velerius, use a find and replace
	 * to change 'velerius' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'velerius', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => esc_html__( 'Header', 'velerius' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif;
add_action( 'after_setup_theme', 'velerius_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function velerius_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'velerius' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'velerius' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'velerius_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function velerius_scripts() {
	wp_enqueue_style( 'velerius-style-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'velerius-style-libs', get_template_directory_uri() . '/css/libs.min.css');
	wp_enqueue_style( 'velerius-style', get_template_directory_uri() . '/css/styles.min.css');
	
    wp_enqueue_script( 'velerius-script-jq', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '', true );
    wp_enqueue_script( 'velerius-script', get_template_directory_uri() . '/js/script.min.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'velerius_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';