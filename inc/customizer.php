<?php
/**
 * robert_means Theme Customizer.
 *
 * @package robert_means
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function robert_means_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'robert_means_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function robert_means_customize_preview_js() {
	wp_enqueue_script( 'robert_means_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130509', true );
}
add_action( 'customize_preview_init', 'robert_means_customize_preview_js' );
