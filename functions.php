<?php
/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/assets/img' );
define( 'SCRIPTS', THEMEROOT . '/assets/js' );

/**
 * ----------------------------------------------------------------------------------------
 * Register Custom Post Types.
 * ----------------------------------------------------------------------------------------
 */
 // function create_post_type() {
 // 	register_post_type('habitaciones', array(
 // 		'labels' => array('name' => __('Habitaciones'), 'singular_name' => __('Habitacion')),
 // 		'public' => true,
 // 		'has_archive' => false,
 // 		'rewrite' => array('slug' => 'habitacion'),
 // 		'taxonomies' => array('category'),
 // 		'supports' => array('title', 'editor', 'thumbnail')
 // 	));
 // }
 // add_action('init', 'create_post_type');


 /**
  * ----------------------------------------------------------------------------------------
  *  - Include the native WP Custom Fields
  *  - instructions: http://www.sitepoint.com/wp-api/
  * ----------------------------------------------------------------------------------------
  */
 //  function register_post_custom_field() {
 // 	 register_api_field( 'post',
 // 	     'custom_field',
 // 	     array(
 // 	         'get_callback'    => 'get_custom_field',
 // 	         'update_callback' => null,
 // 	         'schema'          => null,
 // 	     )
 // 	 );
 // }
 // // poner el callback a la funcion en el template
 // function get_custom_field( $object, $field_name, $request ) {
 //   return get_post_meta( $object[ 'id' ], $field_name, true );
 // }

// Cleaning up wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Register Sidebar
register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => 'Footer Sidebar',
    'id' => 'sidebar-2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
));


/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_setup' ) ) {
	function alpha_setup() {
		/**
		 * Make the theme available for translation.
		 */
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );

		/**
		 * Add support for post formats.
		 */
		add_theme_support( 'post-formats',
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);

    /**
    * Remove wpautop filter
    */
    // remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

		/**
		 * Add support for automatic feed links.
		 */
		// add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );

    /**
    * Excerpt Length & More.
    */
    // function custom_excerpt_length( $length ) {
    //   return 20;
    // }
    // add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    //
    // function new_excerpt_more( $more ) {
    // 	return '<p class="excerpt">Leer mas</p>';
    // }
    // add_filter( 'excerpt_more', 'new_excerpt_more' );
		/**
		 * Register nav menus.
		 */
		register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'secondary-menu' => __( 'Secondary Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
		);
	}
	add_action( 'after_setup_theme', 'alpha_setup' );
}

/**
 * ----------------------------------------------------------------------------------------
 * 10.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------------------
 */
	function alpha_scripts() {
		wp_enqueue_script( 'alpha-custom', SCRIPTS . '/build.js', array( 'jquery' ), false, false );
		wp_enqueue_style( 'alpha-master', THEMEROOT . '/style.css', false );
	}

	add_action( 'wp_enqueue_scripts', 'alpha_scripts' );



/***************
 * Woo Theme support Declaration
 ***************/
// add_theme_support( 'woocommerce' );

// Remove catalog ordering
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// Remove default WC CSS
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
//unhookd woocommerce wrappers
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//Then hook in your own functions to display the wrappers your theme requires;
//add_action('woocommerce_before_main_content', 'ek_theme_wrapper_start', 10);
//add_action('woocommerce_after_main_content', 'ek_theme_wrapper_end', 10);
