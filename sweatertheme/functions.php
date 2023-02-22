<?php

function sweatershop_theme_support(){
    // Adds Dynamic Title Tag Support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'page', 'excerpt' );
}

function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
  }
  add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );



add_action('after_setup_theme','sweatershop_theme_support');

function sweatershop_menus(){

    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);

}

add_action('init','sweatershop_menus');


// Theme Files
function theme_files()
{
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'index-js', get_template_directory_uri() . '/index.js', array(), true, true );
}
add_action( 'wp_enqueue_scripts', 'theme_files' );


?>