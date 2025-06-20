<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage eco-renewable-energy
 * @since eco-renewable-energy 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since eco-renewable-energy 1.0
	 *
	 * @return void
	 */
	function eco_renewable_energy_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'eco-renewable-energy-border',
				'label' => esc_html__( 'Borders', 'eco-renewable-energy' ),
			)
		);

		
	}
	add_action( 'init', 'eco_renewable_energy_register_block_styles' );
}