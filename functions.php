<?php

function customtheme_theme_support(){
  // Adds dynamic title tag support
  add_theme_support('title_tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

function ponthier_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('ponthier-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css",array(), '4.5.2', 'all');
  wp_enqueue_style('ponthier-fontawesome', "ttps://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",array(), '4.7.0', 'all');
  wp_enqueue_style('ponthier-owlcarousel', get_template_directory_uri()."/assets/owlcarousel/owl.carousel.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('ponthier-owlcarousel', get_template_directory_uri()."/assets/owlcarousel/owl.theme.default.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('ponthier-styles', get_template_directory_uri()."/page-style.css",array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'ponthier_register_styles');
?>