<?php
/**
 * NCAA Conference Tournaments Theme
 *
 * @package NCAA_Conference_Tournaments
 */

/**
 * Enqueue theme styles
 */
function ncaa_theme_enqueue_styles() {
    // Enqueue main theme stylesheet
    wp_enqueue_style(
        'ncaa-theme-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // Enqueue buttons.css from plugin
    if ( file_exists( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/buttons.css' ) ) {
        wp_enqueue_style(
            'ncaa-buttons',
            plugins_url( 'ncaa-conference-tournaments/assets/css/components/buttons.css' ),
            array(),
            filemtime( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/buttons.css' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'ncaa_theme_enqueue_styles', 999 );

/**
 * Theme setup
 */
function ncaa_theme_setup() {
    // Add theme support for various features
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ncaa-conference-tournaments' ),
    ) );
}
add_action( 'after_setup_theme', 'ncaa_theme_setup' );
