<?php
/**
 * Eco Renewable Energy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eco-renewable-energy
 * @since eco-renewable-energy 1.0
 */

if ( ! function_exists( 'eco_renewable_energy_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since eco-renewable-energy 1.0
	 *
	 * @return void
	 */
	function eco_renewable_energy_support() {

		load_theme_textdomain( 'eco-renewable-energy', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'eco_renewable_energy_support' );

if ( ! function_exists( 'eco_renewable_energy_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since eco-renewable-energy 1.0
	 *
	 * @return void
	 */
	function eco_renewable_energy_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'eco-renewable-energy-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'eco-renewable-energy-animate-css',
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'eco-renewable-energy-style' );

		wp_style_add_data( 'eco-renewable-energy-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style('eco-renewable-energy-swiper-css',
		esc_url(get_template_directory_uri()) . '/assets/css/swiper-bundle.css',
		array()
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'eco_renewable_energy_styles' );

/* Enqueue Custom Js */
function eco_renewable_energy_scripts() {

	wp_enqueue_script( 
		'eco-renewable-energy-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js',
		array('jquery') 
	);

	wp_enqueue_script( 
		'eco-renewable-energy-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);

	wp_enqueue_script(
        'eco-renewable-energy-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );

    wp_enqueue_script(
		'eco-renewable-energy-swiper-js',
		esc_url(get_template_directory_uri()) . '/assets/js/swiper-bundle.js',
		array(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'eco_renewable_energy_scripts' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_eco-renewable-energy') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_wordclever_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=eco-renewable-energy'),
    ]);
});

add_action('wp_ajax_check_wordclever_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $eco_renewable_energy_plugin_file = 'wordclever-ai-content-writer/wordclever.php';

    if (is_plugin_active($eco_renewable_energy_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

function eco_renewable_energy_theme_setting() {
	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Get Notice
	require get_template_directory() . '/get-started/notice.php';

	// Add Customizer
	require get_template_directory() . '/inc/customizer.php';
}	
add_action('after_setup_theme', 'eco_renewable_energy_theme_setting');	