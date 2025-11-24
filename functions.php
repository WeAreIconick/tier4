<?php
/**
 * Tier4 functions and definitions
 */

if ( ! function_exists( 'tier4_support' ) ) :
	function tier4_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'tier4_support' );

/**
 * Enqueue scripts and styles.
 */
function tier4_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'tier4-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap', array(), null );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'tier4-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'tier4_scripts' );

/**
 * Register Block Patterns
 */
function tier4_register_patterns() {
	register_block_pattern_category(
		'tier4',
		array( 'label' => __( 'Tier4', 'tier4' ) )
	);
}
add_action( 'init', 'tier4_register_patterns' );

