<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function storringtonpr_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/storringtonpr
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'storringtonpr' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'storrington' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

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
	//add_theme_support( 'post-thumbnails' );

	//add_image_size( 'storringtonpr-featured-image', 2000, 1200, true );

	//add_image_size( 'storringtonpr-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	//$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Header Menu', 'storringtonpr' ),
		'footer' => __( 'Footer Menu', 'storringtonpr' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'storringtonpr_setup' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function storringtonpr_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'storringtonpr-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'storringtonpr_resource_hints', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function storringtonpr_scripts() {
	wp_enqueue_style( 'storringtonpr-style',  get_theme_file_uri( '/assets/css/stylesheet.css' ));
}
add_action( 'wp_enqueue_scripts', 'storringtonpr_scripts' );
