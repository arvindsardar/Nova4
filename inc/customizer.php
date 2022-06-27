<?php
/**
 * Nova4 Theme Customizer
 *
 * @package nova4
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nova_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'nova_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'nova_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'nova_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function nova_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function nova_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nova_customize_preview_js() {
	wp_enqueue_script( 'nova-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nova_customize_preview_js' );


/**
* Create Mobile Logo Setting and Upload Control
*/
add_action('customize_register', 'fn_nova_mobile_logo');
function fn_nova_mobile_logo($wp_customize) {

	// add a setting for the site logo
	$wp_customize->add_setting('nova_mobile_logo');

	// Add a control to upload the logo
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'nova_mobile_logo',
			array(
			'label' => 'Add Mobile Logo',
			'section' => 'title_tagline',
			'settings' => 'nova_mobile_logo',
			)
		)
	);
}