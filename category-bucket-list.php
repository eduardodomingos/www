<?php
/**
 * The template for displaying the Bucket List section page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

get_header();
?>
	<main class="o-Stack">
		<h1 class="o-Stack__item"><?php echo single_cat_title(); ?></h1>
		<?php
		wp_nav_menu(
			array(
				'theme_location' 	=> 'bucket-list',
				'menu_class'     	=> 'o-Stack__item o-List o-List--bare o-Grid o-Grid--large',
				'container'      	=> false,
				'items_wrap'     	=> '<ul class="%2$s">%3$s</ul>',
				'walker'			=> new Bucket_List_Menu_Walker()
			)
		);
		?>
	</main>
<?php
get_footer();
