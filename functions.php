<?php
/**
 * LAZY functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LAZY
 */

if ( ! defined( 'LAZY_VERSION' ) ) {

	// Replace the version number of the theme on each release.
	define( 'LAZY_VERSION', '0.1' );
}

if ( ! function_exists( 'lazy_setup' ) ) {
	
	
	function lazy_setup() {
	
		load_theme_textdomain( 'lazy', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Gutenberg
		add_theme_support( 'align-wide' );
		add_theme_support( 'align-full' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );

		if ( ! isset( $content_width ) ) {
			$content_width = 1160;
		}


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary', 'lazy' ),
				'top-menu' => esc_html__( 'Top', 'lazy' ),
				'footer-menu' => esc_html__( 'Footer', 'lazy' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


	}

}

add_action( 'after_setup_theme', 'lazy_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lazy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lazy_content_width', 640 );
}
add_action( 'after_setup_theme', 'lazy_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 if ( ! function_exists( 'lazy_widgets_init' ) ) {

	function lazy_widgets_init() {

		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'lazy' ),
				'id'            => 'lazy-sidebar',
				'description'   => esc_html__( 'Add widgets here.', 'lazy' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<span class="h2-like" class="widget-title">',
				'after_title'   => '</span>',
			)
		);
	}
}
add_action( 'widgets_init', 'lazy_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'lazy_scripts' ) ) {

	function lazy_scripts() {
		
		wp_enqueue_style( 'lazy-style', get_template_directory_uri() . '/assets/dist/css/lazy.css', array(), LAZY_VERSION );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'lazy-script', get_template_directory_uri() . '/assets/dist/js/lazy.js', array( 'jquery' ), LAZY_VERSION, true );
	}

}
add_action( 'wp_enqueue_scripts', 'lazy_scripts' );



/**
 * Inc functions
 */
require get_template_directory() . '/inc/functions/tags.php';
require get_template_directory() . '/inc/functions/template.php';
require get_template_directory() . '/inc/functions/customizer.php';



/**
 * Gutenberg Editor Styles
 */
if ( ! function_exists( 'lazy_block_editor_styles' ) ) {

	function lazy_block_editor_styles() {
		
		wp_enqueue_style( 'editor-css', get_template_directory_uri() . '/css/editor.css', array(), false );
	}
}

add_action( 'enqueue_block_editor_assets', 'lazy_block_editor_styles' );
