<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


function tambah_stylesheet() {
    // Tambahkan custom.css
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom.css');

    // Tambahkan responsive.css (jika diperlukan)
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/responsive.css');
    
    // Tambahkan post.css
    wp_enqueue_style('post-style', get_stylesheet_directory_uri() . '/post.css');
    
    // owl css
    wp_enqueue_style('owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css');

    // Home CSS
    wp_enqueue_style('bs-icon-css', get_stylesheet_directory_uri() . '/css/bootstrap-icons.css');
    wp_enqueue_style('home-css', get_stylesheet_directory_uri() . '/css/home.css');

    // Script
    wp_enqueue_script('jq', get_theme_file_uri( 'js/jquery-3.7.1.min.js' ), [], '3.7.1', true);
    wp_enqueue_script('owl-js', get_theme_file_uri( 'js/owl.carousel.min.js' ), [], '2.3', true);
    wp_enqueue_script('custom-js', get_theme_file_uri( 'js/custom.js' ), [], '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'tambah_stylesheet');