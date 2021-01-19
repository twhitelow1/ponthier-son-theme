<?php

function ponthier_theme_support(){
  // Adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'ponthier_theme_support' );

function ponthier_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('ponthier-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css",array(), '4.5.2', 'all');
  wp_enqueue_style('ponthier-fontawesome', "ttps://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",array(), '4.7.0', 'all');
  wp_enqueue_style('ponthier-owlcarousel', get_template_directory_uri()."/assets/owlcarousel/owl.carousel.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('ponthier-owlcarousel', get_template_directory_uri()."/assets/owlcarousel/owl.theme.default.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('ponthier-styles', get_template_directory_uri()."/page-style.css",array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'ponthier_register_styles');

function ponthier_register_scripts(){
  wp_enqueue_script('ponthier-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(), '3.4.1', true);
  wp_enqueue_script('ponthier-owl-carousel',get_template_directory_uri().'owlcarousel/owl.carousel.min.js',array(), '3.4.1', true);
  wp_enqueue_script('ponthier-main',get_template_directory_uri().'/assets/js/script.js',array(), '1.0', true);
  wp_enqueue_script('ponthier-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(), '3.4.1', true);
  wp_enqueue_script('ponthier-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(), '3.4.1', true);
}
add_action('wp_enqueue_scripts', 'customtheme_register_scripts');

function ponthier_widget_areas(){
  register_sidebar( array(
    'name' => 'Featured below navigation',
    'id' => 'jumbotron-featured',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h1>',
    'after_title' => '</h1> <div class="lead">',
  ) );
}

add_action( 'widgets_init', 'ponthier_widget_areas');


?>