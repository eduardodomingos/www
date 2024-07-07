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
				$post_top_level_category = end(get_the_category(get_the_ID()))->slug;
				if (locate_template("template-parts/content-single-$post_top_level_category.php")) {
					get_template_part( 'template-parts/content', "single-$post_top_level_category");
				} else {
					get_template_part( 'template-parts/content', 'single' );
				}
			?>
		<?php endwhile; // End of the loop. ?>
	</main>

<?php
get_sidebar();
get_footer();
