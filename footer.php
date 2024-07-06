<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package www
 */

?>

	<footer class="c-Footer o-Box u-phn u-flex u-flex--jsb">
		<small>&copy; <?php echo (www_get_oldest_post_year() && (www_get_oldest_post_year() !== date('Y'))) ? www_get_oldest_post_year() . ' - ' : ''; ?><?php echo date('Y'); ?> / <?php bloginfo( 'name' ); ?></small>
		<a href="https://github.com/eduardodomingos/www" target="_blank">Ver Código</a>
	</footer>
</div><!-- .o-CenteredColumn -->

<?php wp_footer(); ?>

</body>
</html>
