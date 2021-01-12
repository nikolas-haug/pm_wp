<?php

function petermiller_theme_customize_register( $wp_customize ) {
    // //All our sections, settings, and controls will be added here - defaults should match $variables
    // $colors = array();
    // $colors[] = array(
    // 'slug'=>'content_text_color', 
    // 'default' => '#fff',
    // 'label' => __('Content Text Color', 'petermiller')
    // );
    // $colors[] = array(
    // 'slug'=>'content_link_color', 
    // 'default' => '#3C2E37',
    // 'label' => __('Content Link Color', 'petermiller')
    // );
    // foreach( $colors as $color ) {
    // // SETTINGS
    // $wp_customize->add_setting(
    //     $color['slug'], array(
    //     'default' => $color['default'],
    //     'type' => 'option', 
    //     'capability' => 
    //     'edit_theme_options'
    //     )
    // );
    // // CONTROLS
    // $wp_customize->add_control(
    //     new WP_Customize_Color_Control(
    //     $wp_customize,
    //     $color['slug'], 
    //     array('label' => $color['label'], 
    //     'section' => 'colors',
    //     'settings' => $color['slug'])
    //     )
    // );
    // }
    // SOCIAL SECTION ***************************************
    $wp_customize->add_section('icons', array(
        'title' => __('Icons', 'petermiller'),
        'description' => sprintf(__('Options for footer icons', 'petermiller')),
        'priority' => 130
    ));

    // icon 1 

    // icon 1 url setting
    $wp_customize->add_setting('icon1_url', array(
        'default' => _x('url', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 1 url control
    $wp_customize->add_control('icon1_url', array(
        'label' => __('icon 1 url', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));
    // icon 1 Icon setting
    $wp_customize->add_setting('icon1_icon', array(
        'default' => _x('Enter fontawesome class here', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 1 text control
    $wp_customize->add_control('icon1_icon', array(
        'label' => __('icon 1 Icon', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));

    // icon 2

     // icon 2 url setting
     $wp_customize->add_setting('icon2_url', array(
        'default' => _x('url', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 2 url control
    $wp_customize->add_control('icon2_url', array(
        'label' => __('icon 2 url', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));
    // icon 2 Icon setting
    $wp_customize->add_setting('icon2_icon', array(
        'default' => _x('Enter fontawesome class here', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 2 text control
    $wp_customize->add_control('icon2_icon', array(
        'label' => __('icon 2 Icon', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));

    // icon 3

     // icon 3 url setting
     $wp_customize->add_setting('icon3_url', array(
        'default' => _x('url', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 3 url control
    $wp_customize->add_control('icon3_url', array(
        'label' => __('icon 3 url', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));
    // icon 3 Icon setting
    $wp_customize->add_setting('icon3_icon', array(
        'default' => _x('Enter fontawesome class here', 'petermiller'),
        'type' => 'theme_mod'
    ));
    // icon 3 text control
    $wp_customize->add_control('icon3_icon', array(
        'label' => __('icon 3 Icon', 'petermiller'),
        'section' => 'icons',
        'priority' => 20
    ));
  }