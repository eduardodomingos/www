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

if ( ! function_exists( 'www_get_template_part' ) ) :
	/**
	 * Get template part with passed arguments.
	 * @return file
	 */
	function www_get_template_part( $slug, $name = null, $data = array() ) {
		extract( $data );
		if ( $name )
			$file = "{$slug}-{$name}.php";
		else
			$file = "{$slug}.php";
		include locate_template( $file );
	}
endif;


if ( ! function_exists( 'www_get_menu_name_by_location' ) ) :
	/**
	 * Get the menu name assigned to a specific location
	 */
	function www_get_menu_name_by_location($location) {
		// Get the array of menu locations and their assigned menu IDs
		$locations = get_nav_menu_locations();

		// Check if the specified location exists in the array
		if (isset($locations[$location])) {
			// Get the menu ID for the specified location
			$menu_id = $locations[$location];

			// Get the menu object by menu ID
			$menu_object = wp_get_nav_menu_object($menu_id);

			// Return the menu name
			if ($menu_object) {
				return $menu_object->name;
			}
		}

		// Return false if the location does not exist or no menu is assigned
		return false;
	}
endif;