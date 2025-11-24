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
        
        // Register Pattern Category
        register_block_pattern_category(
            'tier4',
            array( 'label' => __( 'Tier 4', 'tier4' ) )
        );
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
 * Manually Register Patterns (Fallback if auto-loading fails)
 */
function tier4_register_patterns() {
    // List of patterns to register
    $patterns = [
        'hero',
        'features',
        'cta',
        'accordion',
        'story-panels',
        'mega-menu-explore',
        'components-page'
    ];

    foreach ( $patterns as $pattern_name ) {
        $pattern_file = get_theme_file_path( '/patterns/' . $pattern_name . '.php' );
        if ( file_exists( $pattern_file ) ) {
            register_block_pattern(
                'tier4/' . $pattern_name,
                require $pattern_file
            );
        }
    }
}
// Note: Auto-loading from 'patterns/' folder works in WP 6.0+, 
// but we'll leave this commented out unless manual registration is strictly needed.
// However, the user says they aren't showing up. 
// Let's try hooking the category registration earlier (after_setup_theme) and leave auto-loading.
// I moved category registration to 'after_setup_theme' above.
