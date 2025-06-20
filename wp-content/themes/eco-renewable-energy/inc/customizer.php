<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage eco-renewable-energy
 * @since eco-renewable-energy 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eco_renewable_energy_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Eco_Renewable_Energy_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Eco Renewable Energy Pro', 'eco-renewable-energy' ),
		'button_text'      => __( 'Upgrade Pro', 'eco-renewable-energy' ),
		'url'              => 'https://www.wpradiant.net/products/solar-energy-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'eco_renewable_energy_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function eco_renewable_energy_custom_control_scripts() {
	wp_enqueue_script( 'eco-renewable-energy-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'eco-renewable-energy-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'eco_renewable_energy_custom_control_scripts' );