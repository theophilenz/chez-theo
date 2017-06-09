<?php
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function theme_assets()
{

    //Styles
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('clean-blog', get_template_directory_uri().'/assets/css/clean-blog.min.css');
    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css');

    //Scripts

    wp_enqueue_script("jquery-min", get_template_directory_uri().'/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script("bootstrap-js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script("clean-blog-script", get_template_directory_uri().'/assets/js/clean-blog.min.js', array(), null, true);
    wp_enqueue_script("bootstrap-validation", get_template_directory_uri().'/assets/js/jqBootstrapValidation.js', array(), null, true);
}

register_nav_menu( 'header-menu', 'Header Menu' );
