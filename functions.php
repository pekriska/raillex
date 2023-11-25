<?php
/**
 * Raillex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Raillex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function raillex_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Raillex, use a find and replace
		* to change 'raillex' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'raillex', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'raillex' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'raillex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'raillex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raillex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raillex_content_width', 640 );
}
add_action( 'after_setup_theme', 'raillex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raillex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-1', 'raillex' ),
		'id'            => 'footer-menu-1',
		'description'   => esc_html__( 'Add widgets here.', 'raillex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-2', 'raillex' ),
		'id'            => 'footer-menu-2',
		'description'   => esc_html__( 'Add widgets here.', 'raillex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-3', 'raillex' ),
		'id'            => 'footer-menu-3',
		'description'   => esc_html__( 'Add widgets here.', 'raillex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-4', 'raillex' ),
		'id'            => 'footer-menu-4',
		'description'   => esc_html__( 'Add widgets here.', 'raillex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social-footer-menu', 'raillex' ),
		'id'            => 'social-footer-menu',
		'description'   => esc_html__( 'Add widgets here.', 'raillex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'raillex_widgets_init' );




	function wpb_add_google_fonts() {
 
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', false ); 
		}
		 
		add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
	
	
	
		function ah_breadcrumb() {
	
			// Check if is front/home page, return
			if ( is_front_page() ) {
	// 			echo get_bloginfo();
				echo ('Raillex');
			  return;
			}
		  
			// Define
			global $post;
			$custom_taxonomy  = ''; // If you have custom taxonomy place it here
		  
			$defaults = array(
			  'seperator'   =>  '|',
			  'id'          =>  'ah-breadcrumb',
			  'classes'     =>  'ah-breadcrumb',
			  'home_title'  =>  esc_html__( 'Raillex', '' )
			);
		  
			$sep  = '<li class="seperator">'. esc_html( $defaults['seperator'] ) .'</li>';
		  
			// Start the breadcrumb with a link to your homepage
			echo '<ul id="'. esc_attr( $defaults['id'] ) .'" class="'. esc_attr( $defaults['classes'] ) .'">';
		  
			// Creating home link
			echo '<li class="item"><a href="'. get_home_url() .'">'. esc_html( $defaults['home_title'] ) .'</a></li>' . $sep;
		  
			if ( is_single() ) {
		  
			  // Get posts type
			  $post_type = get_post_type();
		  
			  // If post type is not post
			  if( $post_type != 'post' ) {
		  
				$post_type_object   = get_post_type_object( $post_type );
				$post_type_link     = get_post_type_archive_link( $post_type );
		  
				echo '<li class="item item-cat"><a href="'. $post_type_link .'">'. $post_type_object->labels->name .'</a></li>'. $sep;
		  
			  }
		  
		
			  // Get categories
			  $category = get_the_category( $post->ID );
		  
			  // If category not empty
			  if( !empty( $category ) ) {
		  
				// Arrange category parent to child
				$category_values      = array_values( $category );
				$get_last_category    = end( $category_values );
				// $get_last_category    = $category[count($category) - 1];
				$get_parent_category  = rtrim( get_category_parents( $get_last_category->term_id, true, ',' ), ',' );
				$cat_parent           = explode( ',', $get_parent_category );
		  
				// Store category in $display_category
				$display_category = '';
				foreach( $cat_parent as $p ) {
				  $display_category .=  '<li class="item item-cat">'. $p .'</li>' . $sep;
				}
		  
			  }
		 
			  // If it's a custom post type within a custom taxonomy
			  $taxonomy_exists = taxonomy_exists( $custom_taxonomy );
		  
			  if( empty( $get_last_category ) && !empty( $custom_taxonomy ) && $taxonomy_exists ) {
		  
				$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				$cat_id         = $taxonomy_terms[0]->term_id;
				$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
				$cat_name       = $taxonomy_terms[0]->name;
		  
			  }
		  
			  // Check if the post is in a category
			  if( !empty( $get_last_category ) ) {
		  
				echo $display_category;
				echo '<li class="item item-current">'. get_the_title() .'</li>';
		  
			  } else if( !empty( $cat_id ) ) {
		  
				echo '<li class="item item-cat"><a href="'. $cat_link .'">'. $cat_name .'</a></li>' . $sep;
				echo '<li class="item-current item">'. get_the_title() .'</li>';
		  
			  } else {
		  
				echo '<li class="item-current item">'. get_the_title() .'</li>';
		  
			  }
		  
			} else if( is_archive() ) {
		  
			  if( is_tax() ) {
				// Get posts type
				$post_type = get_post_type();
		  
				// If post type is not post
				if( $post_type != 'post' ) {
		  
				  $post_type_object   = get_post_type_object( $post_type );
				  $post_type_link     = get_post_type_archive_link( $post_type );
		  
				  echo '<li class="item item-cat item-custom-post-type-' . $post_type . '"><a href="' . $post_type_link . '">' . $post_type_object->labels->name . '</a></li>' . $sep;
		  
				}
		  
				$custom_tax_name = get_queried_object()->name;
				echo '<li class="item item-current">'. $custom_tax_name .'</li>';
		  
			  } else if ( is_category() ) {
		  
				$parent = get_queried_object()->category_parent;
		  
				if ( $parent !== 0 ) {
		  
				  $parent_category = get_category( $parent );
				  $category_link   = get_category_link( $parent );
		  
				  echo '<li class="item"><a href="'. esc_url( $category_link ) .'">'. $parent_category->name .'</a></li>' . $sep;
		  
				}
		  
				echo '<li class="item item-current">'. single_cat_title( '', false ) .'</li>';
		  
			  } else if ( is_tag() ) {
		  
				// Get tag information
				$term_id        = get_query_var('tag_id');
				$taxonomy       = 'post_tag';
				$args           = 'include=' . $term_id;
				$terms          = get_terms( $taxonomy, $args );
				$get_term_name  = $terms[0]->name;
		  
				// Display the tag name
				echo '<li class="item-current item">'. $get_term_name .'</li>';
		  
			  } else if( is_day() ) {
		  
				// Day archive
		  
				// Year link
				echo '<li class="item-year item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;
		  
				// Month link
				echo '<li class="item-month item"><a href="'. get_month_link( get_the_time('Y'), get_the_time('m') ) .'">'. get_the_time('M') .' Archives</a></li>' . $sep;
		  
				// Day display
				echo '<li class="item-current item">'. get_the_time('jS') .' '. get_the_time('M'). ' Archives</li>';
		  
			  } else if( is_month() ) {
		  
				// Month archive
		  
				// Year link
				echo '<li class="item-year item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;
		  
				// Month Display
				echo '<li class="item-month item-current item">'. get_the_time('M') .' Archives</li>';
		  
			  } else if ( is_year() ) {
		  
				// Year Display
				echo '<li class="item-year item-current item">'. get_the_time('Y') .' Archives</li>';
		  
			  } else if ( is_author() ) {
		  
				// Auhor archive
		  
				// Get the author information
				global $author;
				$userdata = get_userdata( $author );
		  
				// Display author name
				echo '<li class="item-current item">'. 'Author: '. $userdata->display_name . '</li>';
		  
			  } else {
		  
				echo '<li class="item item-current">'. post_type_archive_title() .'</li>';
		  
			  }
		  
			} else if ( is_page() ) {
		  
			  // Standard page
			  if( $post->post_parent ) {
		  
				// If child page, get parents
				$anc = get_post_ancestors( $post->ID );
		  
				// Get parents in the right order
				$anc = array_reverse( $anc );
		  
				// Parent page loop
				if ( !isset( $parents ) ) $parents = null;
				foreach ( $anc as $ancestor ) {
		  
				  $parents .= '<li class="item-parent item"><a href="'. get_permalink( $ancestor ) .'">'. get_the_title( $ancestor ) .'</a></li>' . $sep;
		  
				}
		  
				// Display parent pages
				echo $parents;
		  
				// Current page
				echo '<li class="item-current item">'. get_the_title() .'</li>';
		  
			  } else {
		  
				// Just display current page if not parents
				echo '<li class="item-current item">'. get_the_title() .'</li>';
		  
			  }
		  
			} else if ( is_search() ) {
		  
			  // Search results page
			  echo '<li class="item-current item">Search results for: '. get_search_query() .'</li>';
		  
			} else if ( is_404() ) {
		  
			  // 404 page
			  echo '<li class="item-current item">' . 'Error 404' . '</li>';
		  
			}
		  
			// End breadcrumb
			echo '</ul>';
		  
		  }

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

/**
 * Fontello icon
 */

 function wp_load_fontello() { 
	wp_enqueue_style( 'wp-fontello', get_stylesheet_directory_uri() . '/css/fontello.css' );
	 
	}
	add_action( 'wp_enqueue_scripts', 'wp_load_fontello' );

/**
 * Enqueue scripts and styles.
 */
function raillex_scripts() {
	wp_enqueue_style( 'raillex-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'raillex-style', 'rtl', 'replace' );

	wp_enqueue_script( 'raillex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raillex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
