<?php
/**
 * Template part for displaying post teasers
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

?>

<a href="<?php echo esc_url( get_permalink() ); ?>">
	<h3><?php echo get_the_title(); ?></h3>
	<?php www_posted_on(); ?>
</a> 