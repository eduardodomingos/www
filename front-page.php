<?php
/**
 * The main template file
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
	<main>
		<?php
		www_get_template_part( 'template-parts/content', 'hero', array( 
			'title'			=> get_field('hero_title'),
			'tagline'		=> get_field('hero_tagline'),
			'description'	=> get_field('hero_description'),
			'ctas'			=> get_field('hero_ctas')
		));
		?>
		<div class="o-Stack">
			<section class="o-Stack__item">
				<div class="o-Stack">
					<div class="o-Stack__item u-flex u-flex--jsb">
						<h2>Últimos Artigos</h2>
						<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')));?>" class="c-Button">Ver todos</a>
					</div>
					<div class="o-Stack__item">
						<?php
                            $args = array(
                                'post_type'         => 'post',
                                'posts_per_page'	=> 6,
								'category_name'  	=> 'front-end',
								'order'          	=> 'DESC',
								'orderby'        	=> 'date'
                            );

                            $query = new WP_Query( $args );

                            if( $query->have_posts() ) {
                                echo '<ul class="o-VerticalList o-VerticalList--delimited">';
                                while( $query->have_posts() ) {
                                    $query->the_post();
                                    echo '<li class="o-VerticalList__item o-Box u-phn">';
                                    www_get_template_part( 'template-parts/content', get_post_format() );
                                    echo '</li>';
                                }
                                wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
                                echo '</ul>';
                            }
                        ?>
					</div>
				</div>
			</section>
			<section class="o-Stack__item">
				<div class="o-Stack">
					<h2 class="o-Stack__item">Bucket List</h2>
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
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
