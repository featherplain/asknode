<?php
/**
 * asknode functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package asknode
 */

if ( ! function_exists( 'asknode_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function asknode_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'asknode', get_template_directory() . '/languages' );

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

	/*
	 * Extra image sizes.
	 */
	set_post_thumbnail_size( 870, 504, true );
	add_image_size( 'thumb308x180', 308, 180, true );
	add_image_size( 'thumb870x504', 870, 504, true );
	add_image_size( 'thumb870x504', 870, 504, true );
	add_image_size( 'thumb640x140', 640, 140, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Global Menu' => esc_html__( 'Global Menu', 'asknode' ),
		'Social Menu' => esc_html__( 'Social Menu', 'asknode' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'asknode_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // asknode_setup
add_action( 'after_setup_theme', 'asknode_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function asknode_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'asknode_content_width', 1080 );
}
add_action( 'after_setup_theme', 'asknode_content_width', 0 );

/**
 * Register Custom post types.
 */
// WORKS
function post_type_works() {
  register_post_type( 'works',
    array(
      'labels' => array(
        'name' => __( 'WORKS' ),
        'singular_name' => __( 'WORKS' ),
        'all_items' => __( 'WORKS 一覧' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-desktop',
      'menu_position' => 5,
      'supports' => array(
      	'title',
      	'editor',
      	'thumbnail'
      ),
    )
  );
}
add_action( 'init', 'post_type_works' );

/**
 * Register custom taxonomy.
 */
function works_taxoxomies() {
  register_taxonomy(
	  'scope',
	  'works',
	  array(
      'label' => __( 'SCOPE' ),
      'public' => true,
      'rewrite' => false,
      'hierarchical' => false,
      'update_count_callback' => '_update_post_term_count',
	  )
	);
}
add_action( 'init', 'works_taxoxomies' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function asknode_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'asknode' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'asknode_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function asknode_scripts() {
	// style
	wp_enqueue_style( 'asknode-style', get_template_directory_uri() . '/assets/css/app.css' );
	// Genericons
	wp_enqueue_style( 'asknode-genericons', get_template_directory_uri() . '/assets/genericons/genericons.css' );
	// Font Awesome
	wp_enqueue_style( 'asknode-fa', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css' );
	// Icomoon
	wp_enqueue_style( 'asknode-icomoon', get_template_directory_uri() . '/assets/icomoon/style.css' );
	// JavaScript
	wp_enqueue_script( 'asknode-script', get_template_directory_uri() . '/assets/js/script.min.js', array( 'jquery' ), '20151206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'asknode_scripts' );

/**
 * Register Google font 'Lato' for asknode.
 *
 * @return string
 */
function asknode_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'asknode' ) ) {
		$query_args = array(
			'family' => urlencode( 'Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue font.
 */
function asknode_font_scripts() {

	// Lato Google font for asknode
	wp_enqueue_style( 'asknode-lato', asknode_font_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'asknode_font_scripts' );

	// Enable support editor-style on WordPress dashboard.
	add_editor_style( array(
		asknode_font_url()
	) );

/**
 * Get custom archive title.
 */
if( !function_exists( 'custom_archive_title' ) ) {
	function custom_archive_title() {
		if ( is_category() ) {

			single_cat_title();

		} elseif ( is_tag() ) {

			single_tag_title();

		} else {

			echo '';

		}
	}
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load SCF functions file.
 */
require get_template_directory() . '/inc/scf-functions.php';

/**
 * Load user profile functions file.
 */
require get_template_directory() . '/inc/user-functions.php';
