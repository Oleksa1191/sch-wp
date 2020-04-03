<?php
/**
 * stonecanyon additional functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stonecanyon
 */

if ( ! function_exists( 'stonecanyon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stonecanyon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on stonecanyon, use a find and replace
		 * to change 'stonecanyon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stonecanyon', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'stonecanyon' ),
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
		add_theme_support( 'custom-background', apply_filters( 'stonecanyon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'stonecanyon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stonecanyon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'stonecanyon_content_width', 640 );
}
add_action( 'after_setup_theme', 'stonecanyon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stonecanyon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stonecanyon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stonecanyon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'stonecanyon_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function stonecanyon_scripts() {
    wp_enqueue_style('stonecanyon-pop-style', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700&display=swap', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-fa-style', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-sidr-style', get_template_directory_uri() . '/css/jquery.sidr.dark.min.css', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-owl-theme-style', get_template_directory_uri() . '/css/owl.theme.default.css', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-owl-carousel-style', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-owl-lightbox-style', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.3.1', 'all');
    wp_enqueue_style('stonecanyon-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('stonecanyon-main-style', get_template_directory_uri() . '/css/custom.css', array(), '0.1.0', 'all');
    wp_enqueue_style('stonecanyon-matime-style', get_template_directory_uri() . '/css/timeTo.css', array(), '0.1.0', 'all');
    wp_enqueue_style('stonecanyon-responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), '0.1.0', 'all');
    
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'stonecanyon-popper-js', get_template_directory_uri() . '/js/popper.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-sidr-js', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-lightbox-js', get_template_directory_uri() . '/js/lightbox.min.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true );

	wp_enqueue_script( 'stonecanyon-time-to-js', get_template_directory_uri() . '/js/jquery.time-to.min.js', array(), '4.3.1', true );

	wp_enqueue_script( 'stonecanyon-dbclick-js', get_template_directory_uri() . '/js/dbclick.js', array(), '4.3.1', true );

	wp_enqueue_script( 'stonecanyon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'stonecanyon-custom-js', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stonecanyon_scripts' );



// Setup options for the theme
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


add_action( 'init', 'my_custom_init' );
function my_custom_init() {
remove_post_type_support( 'page', 'editor' );
}


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter( 'excerpt_more', 'cmr_custom_excerpt_more' );

if ( ! function_exists( 'cmr_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function cmr_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'cmr_all_excerpts_get_more_link' );

if ( ! function_exists( 'cmr_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function cmr_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . '';
		}
		return $post_excerpt;
	}
}
