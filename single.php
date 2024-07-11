<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package www
 */

get_header();
?>

	<main>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				get_template_part( 'template-parts/content', get_post_type() );
				//get_template_part( 'template-parts/content', 'single' );
			?>
		<?php endwhile; // End of the loop. ?>
	</main>

<?php
get_footer();
