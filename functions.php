<?php
/**
 * ABOUT THIS FUNCTIONS FILE
 * ALL CUSTOM FUNCTIONS FOR THE THEME ARE ENDICATED BY THE PREFIX "CT_" FOR "CHEZ THÉO". NAME OF THE THEME. 
 * 
 */


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


/**
 * Starting the customizer API.
 */

function ct_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
    //**HEADER CUSTOMIZATION SETTINGS**

    // New Theme colors section
    $wp_customize->add_section( 'colors', array(
        'title' => 'Theme Colors',
        'priority' => 100,
    ));

    // Color picker setting for header background
    $wp_customize->add_setting( 'ct_bg_color', array(
        'default' => '#000000'
    ));

    // Color picker control for header background
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ct_bg_color', array(
        'label' => 'Header Background Color',
        'section' => 'colors',
        'settings' => 'ct_bg_color',
    )));

     //**FOOTER CUSTOMIZATION SETTINGS**

    //Adding footer section in the customizer   
    $wp_customize->add_section('footer_settings_section', array(
        'title'=> 'Footer Copyright Text'
    ));

    //adding setting for footer text area
    $wp_customize->add_setting('copyright_setting', array(
        'default'=> 'Default Copyright For Footer Section'
    ));
    
    //Adding control for the footer copyright
    $wp_customize->add_control('copyright_setting', array(
        'label'=> 'Footer Text Here',
        'section'=>'footer_settings_section',
        'type'=> 'textarea'
));
}
add_action( 'customize_register', 'ct_customize_register' );

/**
 * Adding custom background
 */

function ct_custom_header_setup() {
    $setup = array(
        'default-text-color' => '000',
        'width'              => 1200,
        'height'             => 300,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $setup );
}
add_action( 'after_setup_theme', 'ct_custom_header_setup' );

function ct_get_header(){
    if(has_header_image()){
        $before= "url('";
        $after= "')";
        return ["image", $before.get_header_image().$after];
    }else{
        return ["color", get_theme_mod('ct_bg_color')]; //See customizer API section
    }
}

/**
 * Adding custom logo
 * 
*/

function ct_custom_logo() {
    $defaults =[
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => ['navbar-brand']
    ];
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ct_custom_logo' );


/**
 * Helper function to retrieve author data. 
 * Self-explanatory. duh.
 */

function ct_get_author_infos($type){
    global $post;
    $author_id= get_post_field( 'post_author', $post->ID );
    switch($type){
        case 'id':
        return get_post_field('post_author', $post->ID);
        break;
        case 'nickname': 
        return get_the_author_meta('nickname', $author_id);
        break;
        case 'name':
        return get_the_author_meta('display_name', $author_id);
        break;
    }
}