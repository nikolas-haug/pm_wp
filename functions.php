<?php

// Setup
define('PETERMILLER_THEME_DEV_MODE', true); // defines dev or production mode

// Includes
include( get_theme_file_path( '/includes/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'petermiller_theme_enqueue' );
add_action( 'after_setup_theme', 'petermiller_theme_setup_theme' );
add_action( 'widgets_init', 'petermiller_theme_widgets' );
add_action( 'customize_register', 'petermiller_theme_customize_register' );

// Shortcodes

// Custom
// include( get_theme_file_path( '/custom/custom-bg-callback.php' ));