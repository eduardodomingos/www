<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package www
 */

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

 if ( ! function_exists( 'www_is_homepage' ) ) :
	/**
	 * Returns true if is homepage.
	 */
	function www_is_homepage() {
		return (is_front_page()) ? true : false;
		
	}
endif;

if ( ! function_exists( 'www_get_oldest_post_year' ) ) :
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
endif;