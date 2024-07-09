<?php
/**
 * The blog index template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

get_header();
?>
	<main class="o-Stack">
		<?php
			// Get all posts
			$args = array(
				'posts_per_page' 		=> -1, // Get all posts
				'orderby' 				=> 'date', // Order by date
				'order' 				=> 'DESC', // Most recent first
				'category_name'			=> 'notas'
			);
			$all_posts = new WP_Query($args);
		?>
		<h1 class="o-Stack__item"><?php echo $all_posts->found_posts;?> <?php echo single_cat_title(); ?></h1>
		<div class="o-Stack__item o-Stack">
			<?php
			if ($all_posts->have_posts()) :
				$current_year = '';

				while ($all_posts->have_posts()) : $all_posts->the_post();
					$post_year = get_the_date('Y');

					// If the post year is different from the current year, display the year
					if ($current_year != $post_year) {
						if ($current_year != '') {
							?>
								</ul>
							</section>
							<?php
						}
						$current_year = $post_year;
						?>
						<section class="o-Stack__item o-Stack">
							<h2 class="o-Stack__item"><?php echo $post_year; ?></h2>
							<ul class="o-Stack__item o-VerticalList o-VerticalList--delimited">
						<?php
					}
					?>
					<li class="o-Box u-phn">
						<?php www_get_template_part( 'template-parts/content', get_post_format() );?>
					</li>
				<?php
				endwhile;
				// Close the last year's list
				?>
					</ul>
				</section>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php
			endif;
			wp_reset_postdata();
			?>
		</div>
	</main>
<?php
get_footer();
