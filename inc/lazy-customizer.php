<?php
/**
 * LAZY Theme Customizer
 *
 * @package LAZY
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lazy_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'lazy_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'lazy_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'lazy_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function lazy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function lazy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lazy_customize_preview_js() {
	wp_enqueue_script( 'lazy-customizer', get_template_directory_uri() . '/js/standalone/customizer.js', array( 'customize-preview' ), LAZY_VERSION, true );
}
add_action( 'customize_preview_init', 'lazy_customize_preview_js' );
