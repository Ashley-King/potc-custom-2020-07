<?php
/**
 * functions and definitions
 *
 * @package potc-custom
 * @since potc-custom 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'potc_custom_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function potc_custom_setup() {
 
    
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'potc-custom' ),
        'footer' => __('Footer Menu', 'potc-custom' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // potc_custom_setup
add_action( 'after_setup_theme', 'potc_custom_setup' );



//register styles and scripts

/**
 * Register and Enqueue Styles.
 */
function potc_custom_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	

	// Add  CSS.
    wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), $theme_version );

    //add fonts
    wp_enqueue_style( 'google-font',  'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"', array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'potc_custom_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function potc_custom_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), $theme_version, false );
    
    wp_enqueue_script( 'sf-submit-js', get_template_directory_uri() . '/js/sf-submit.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'modal-js',  'https://unpkg.com/micromodal/dist/micromodal.min.js', array('jquery'), $theme_version, true );
	

}

add_action( 'wp_enqueue_scripts', 'potc_custom_register_scripts' );

/**
 * Custom Post Type For Newsletter
 */
function newsletter_post() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes', //page attributes
    );
    $labels = array(
    'name' => _x('Newsletters', 'plural'),
    'singular_name' => _x('Newsletter', 'singular'),
    'menu_name' => _x('Newsletter', 'admin menu'),
    'name_admin_bar' => _x('Newsletter', 'admin bar'),
    'add_new' => _x('Add New Newsletter', 'add new'),
    'add_new_item' => __('Add New Newsletter'),
    'new_item' => __('New Newsletter'),
    'edit_item' => __('Edit Newsletter'),
    'view_item' => __('View Newsletter'),
    'all_items' => __('All Newsletters'),
    'search_items' => __('Search Newsletter'),
    'not_found' => __('No Newsletters found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'newsletter'),
    'has_archive' => false,
    'hierarchical' => false,
    );
    register_post_type('newsletter', $args);
    }
    add_action('init', 'newsletter_post');