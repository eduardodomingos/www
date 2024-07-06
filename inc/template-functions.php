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
	if($args->theme_location == 'menu-information' || $args->theme_location == 'menu-browse') {
		$classes = ['o-Stack__item'];
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'www_menu_classes', 1, 3);

/**
 * Remove id from list <li>'s, based on menu location.
 */
function www_menu_item_id($classes, $item, $args) {
	if($args->theme_location == 'menu-information' || $args->theme_location == 'menu-browse') {
		return null;
	}
}
add_filter('nav_menu_item_id', 'www_menu_item_id', 1, 3);

function www_get_oldest_post_year() {
    global $wpdb;

    // Query to get the oldest post date
    $oldest_post_date = $wpdb->get_var("SELECT post_date FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date ASC LIMIT 1");

    // Check if a date was returned
    if ($oldest_post_date) {
        // Return the year of the oldest post
        return date('Y', strtotime($oldest_post_date));
    }

    // Return a fallback value if no posts are found
    return false;
}