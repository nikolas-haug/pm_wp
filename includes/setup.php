<?php

function petermiller_theme_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-background', array(
        'default' => '#fff', // add default bg color here
        
    ));

    register_nav_menu( 'primary', __('Primary', 'petermiller_theme-domain') );
}