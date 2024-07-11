<?php
/**
 * Template part for displaying post teasers
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

?>
<?php var_dump(is_singular());?>
<?php if ( is_singular() ) : ?>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php else: ?>
	<a href="<?php echo esc_url( get_permalink() ); ?>">
		<h3><?php the_title(); ?></h3>
		<?php www_posted_on(); ?>
	</a> 
<?php endif;?>
