<?php
/**
 * Clínica Primera functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Clínica_Primera
 */

if ( ! function_exists( 'clinica_primera_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clinica_primera_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Clínica Primera, use a find and replace
	 * to change 'clinica-primera' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'clinica-primera', get_template_directory() . '/languages' );

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
		'header' => esc_html__( 'Topo', 'clinica-primera' ),
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
	add_theme_support( 'custom-background', apply_filters( 'clinica_primera_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'clinica_primera_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clinica_primera_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clinica_primera_content_width', 640 );
}
add_action( 'after_setup_theme', 'clinica_primera_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clinica_primera_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Home', 'clinica-primera' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Adicione o Widget do instagram aqui.', 'clinica-primera' ),
		'before_widget' => '<section class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Endereço', 'clinica-primera' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Adicione o endereço aqui.', 'clinica-primera' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<span style="display: none;">',
		'after_title'   => '</span>',
	) );
}
add_action( 'widgets_init', 'clinica_primera_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clinica_primera_scripts() {
	wp_enqueue_style( 'clinica-primera-style', get_stylesheet_uri() );

	wp_enqueue_script( 'clinica-primera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'clinica-primera-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clinica_primera_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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
 * Register "Complementos" custom post type
 */
add_action("init", "register_complementos_post_type");
function register_complementos_post_type() {
	
	$labels	= array( "name" => "Complementos", "singular_name" => "Complemento" );
	$args	= array(
		
		"labels"	=> $labels,
		"menu_icon"	=> "dashicons-plus",
		"public"	=> true,
		"publicly_queryable"	=> true,
		"show_ui"	=> true,
		"query_var"	=> true,
		"rewrite"	=> true,
		"capability_type"	=> "post",
		"hierarchical"	=> false,
		"menu_position"	=> 20,
		"supports" => array( "title", "editor", "thumbnail" ),
			
	);
	register_post_type("complementos", $args);
}

/**
 * Register "Categoria" custom taxonomy for "Complementos" custom post type
 */
add_action("init", "register_categoria_custom_taxonomy");
function register_categoria_custom_taxonomy() {
	
	$labels = array( "name"	=> "Categorias", "singular_name"	=> "Categoria" );
	$args = array(
		
		"hierarchical"	=> true,
		"labels" => $labels,
		"show_ui" => true,
		"show_admin_column" => true,
		"query_var" => true,
		"rewirte" => array("slug" => "categoria"),
		
	);
	
	register_taxonomy("categoria", "complementos", $args);
}

/**
 * Adding ".active" CSS class in menu.
 * Only apply CSS class if we are in the page that correspond to the menu-item 
 */
add_filter('nav_menu_css_class', 'special_nav_class', 10 , 2);

function special_nav_class ($classes, $item) {
    return $classes;
}