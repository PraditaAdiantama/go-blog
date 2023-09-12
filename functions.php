<?php
function learn_register_assets()
{
    wp_enqueue_style("learn-css", get_template_directory_uri() . "/assets/css/main.css", array(), false, "all");
    wp_enqueue_style("poppins-font", get_template_directory_uri() . "/assets/fonts/Poppins-Light.ttf", array(), false, "all");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/assets/js/bootstrap.js', array(), false, 'all');
}

add_action("wp_enqueue_scripts", "learn_register_assets");

function learn_register_setup()
{
    add_theme_support("post-thumbnails");
    add_theme_support('wp-block-styles');
    add_editor_style('editor-style.css');
    register_nav_menus(array(
        "primary_menu" => "tes"
    ));
}

add_action("after_setup_theme", "learn_register_setup");

function learn_excerpt_length($length)
{
    return 14;
}

add_action("excerpt_length", "learn_excerpt_length");


require_once get_template_directory() . "/customizer.php";
