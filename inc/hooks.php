<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package www
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function www_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'www_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function www_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'www_pingback_header' );

/**
 * Add css classes to list <li>'s, based on menu location.
 */
function www_menu_classes($classes, $item, $args) {
	if(strpos($args->theme_location, 'primary') === 0) {
		$classes = ['o-Stack__item'];
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'www_menu_classes', 1, 3);

/**
 * Remove id from list <li>'s, based on menu location.
 */
function www_menu_item_id($classes, $item, $args) {
	if(strpos($args->theme_location, 'primary') === 0) {
		return null;
	}
}
add_filter('nav_menu_item_id', 'www_menu_item_id', 1, 3);