<?php
/**
 * ikra functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ikra
 */

if ( ! function_exists( 'ikra_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ikra_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ikra, use a find and replace
	 * to change 'ikra' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ikra', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ikra' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ikra_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ikra_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ikra_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ikra_content_width', 640 );
}
add_action( 'after_setup_theme', 'ikra_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ikra_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ikra' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ikra' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ikra_widgets_init' );

function my_jquery_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.9.1.min.js');
	wp_enqueue_script( 'jquery' );
}    
add_action( 'wp_enqueue_scripts', 'my_jquery_scripts' );
/**
 * Enqueue scripts and styles.
 */
function ikra_scripts() {
	wp_enqueue_style( 'ikra-style', get_stylesheet_uri() );

    wp_enqueue_style( 'ikra-fonts', get_stylesheet_directory_uri() . '/notoserif/notoserif.css' );
    wp_enqueue_style( 'ikra-owl', get_stylesheet_directory_uri() . '/owl.carousel.css' );
    wp_enqueue_style( 'ikra-owlth', get_stylesheet_directory_uri() . '/owl.theme.css' );
    wp_enqueue_style( 'ikra-niftymodals', get_stylesheet_directory_uri() . '/jquery.niftymodals.css' );
    
    wp_enqueue_script( 'ikra-nifty', get_template_directory_uri() . '/js/jquery.niftymodals.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ikra-carusel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ikra-maska', get_template_directory_uri() . '/js/jquery.maskedinput.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ikra-equal', get_template_directory_uri() . '/js/equal-heights.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ikra-sound', get_template_directory_uri() . '/js/ion.sound.js', array(), '1.0.0', true );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ikra_scripts' );


function trim_characters($count, $after = '...'){
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = mb_substr($excerpt, 0, $count);
  $excerpt = $excerpt . $after;
  return $excerpt;
}

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '...';
});













