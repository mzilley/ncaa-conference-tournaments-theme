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

    // Enqueue tables.css from plugin
    if ( file_exists( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/tables.css' ) ) {
        wp_enqueue_style(
            'ncaa-tables',
            plugins_url( 'ncaa-conference-tournaments/assets/css/components/tables.css' ),
            array(),
            filemtime( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/tables.css' )
        );
    }

    // Enqueue modals.css from plugin
    if ( file_exists( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/modals.css' ) ) {
        wp_enqueue_style(
            'ncaa-buttons',
            plugins_url( 'ncaa-conference-tournaments/assets/css/components/modals.css' ),
            array(),
            filemtime( WP_PLUGIN_DIR . '/ncaa-conference-tournaments/assets/css/components/modals.css' )
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

/**
 * Add custom body classes for login and register pages
 */
function ncaa_custom_body_classes( $classes ) {
    // Add class when user is not logged in (shows login form)
    if ( ! is_user_logged_in() ) {
        $classes[] = 'logged-out';

        // Front page shows login form when logged out
        if ( is_front_page() ) {
            $classes[] = 'page-login';
        }
    }

    // Check for register page
    if ( is_page( 'register' ) ) {
        $classes[] = 'page-register';
    }

    // Check for password reset page
    if ( is_page( 'lost-password' ) || is_page( 'reset-password' ) ) {
        $classes[] = 'page-password-reset';
    }

    return $classes;
}
add_filter( 'body_class', 'ncaa_custom_body_classes' );
