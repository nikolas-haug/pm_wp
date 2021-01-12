<?php

function petermiller_theme_widgets() {
    register_sidebar([
        'name' => __('Petermiller Theme Sidebar'),
        'id' => 'petermiller_theme_sidebar',
        'description' => __('Sidebar for the Petermiller theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}