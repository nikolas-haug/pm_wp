<?php

function petermiller_theme_enqueue() {
    $uri = get_theme_file_uri( );
    
    // or: only get the version number associated with the main theme stylesheet (better for browser cacheing essential assets)
    $theme = wp_get_theme();
    define('THEME_VERSION', $theme->Version); // gets version written in your style.css
    
    // append query string to asset files depending on dev or production mode
    $ver = PETERMILLER_THEME_DEV_MODE ? time() : THEME_VERSION;

    // STYLES
    wp_register_style( 'font-awesome', $uri . '/css/font-awesome.css', [], $ver );
    wp_register_style( 'petermiller_theme_styles', $uri . '/style.css', [], $ver );

    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'petermiller_theme_styles' );

    // SCRIPTS
    wp_register_script( 'navigation_js', $uri . '/js/slider-nav.js', [], $ver, true );
    // wp_register_script( 'petermiller_theme_js', $uri . '/js/theme.js', [], $ver, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'navigation_js' );
    // wp_enqueue_script( 'theme_js' );
}