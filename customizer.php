<?php

function learn_header_customize_register($wp_costumize){
    $wp_costumize->add_section("header_settings", array(
        "title" => __("Header Settings", "learn1")
    ));

    $wp_costumize->add_setting('header_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_costumize->add_control(new WP_Customize_Image_Control($wp_costumize, 'header_image', array(
        'label' => __('Header Image', 'your-theme'),
        'section' => 'header_settings',
        'settings' => 'header_image',
    )));

    $wp_costumize->add_setting("header_text", array(
        "default" => "",
        "sanitize_callback" => "sanitize_text_field"
    ));

    // $wp_costumize->add_control("header_text", array())
}

add_action("customize_register", "learn_header_customize_register");