<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

get_header();
?>
	<main class="o-Stack">
		<?php if ( have_posts() ) : ?>
			<h1 class="o-Stack__item"><?php echo post_type_archive_title( '', false );?></h1>
			
			<?php $post_types_with_filter = array('recipes', 'restaurant');?>
			<?php foreach ($post_types_with_filter as $post_type) :?>
				<?php if(is_post_type_archive($post_type)): ?>
					<div class="o-Stack__item c-TaxonomyFilters">
						<?php do_action('show_beautiful_filters'); ?>
					</div>
					<?php break; ?>
				<?php endif;?>	
			<?php endforeach;?>	

			<section class="o-Stack__item o-Stack">
				<ul class="o-Stack__item o-VerticalList o-VerticalList--delimited">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>
					<li class="o-Box u-phn">
						<?php www_get_template_part( 'template-parts/content', get_post_format() );?>
					</li>
				<?php
				endwhile;?>
				</ul>
			</section>
		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main>
<?php
get_footer();
