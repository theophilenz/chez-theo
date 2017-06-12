<?php

/**
 * Registering assets
 */
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function theme_assets()
{

    //Styles
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('clean-blog', get_template_directory_uri().'/assets/css/clean-blog.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css');

    //Scripts

    wp_enqueue_script("jquery-min", get_template_directory_uri().'/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script("bootstrap-js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script("clean-blog-script", get_template_directory_uri().'/assets/js/clean-blog.min.js', array(), null, true);
    wp_enqueue_script("bootstrap-validation", get_template_directory_uri().'/assets/js/jqBootstrapValidation.js', array(), null, true);
}

/**
 * Registering menus
 */
register_nav_menu( 'header-menu', 'Header Menu' );


/**
 * Registering sidebars
 */
add_action( 'widgets_init', 'theme_widget_areas' );
function theme_widget_areas() {
    register_sidebar( array(
        'name' => 'Right',
        'id' => 'right-sidebar',
        'description' => 'The sidebar shown on the right of the Chez Théo Theme',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ));
}

