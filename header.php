<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package www
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="o-CenteredColumn">
	<header class="c-Masthead o-Box u-phn">
		<div class="u-flex u-flex-jsb">
			<ul class="o-HorizontalList o-HorizontalList--delimited" data-delimiter="/">
				<li>
					<<?php echo www_is_homepage() ? 'h1' : 'p'; ?>>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="u-ScreenReaderText"><?php bloginfo( 'name' ); ?></span></a>
					</<?php echo www_is_homepage() ? 'h1' : 'p'; ?>>
				</li>
				<li><?php echo strtolower(get_the_title()); ?></li>
			</ul>
			<div class="u-flex">
				<button class="c-Button"><?php esc_html_e( 'Menu', 'www' ); ?></button>
			</div>
		</div>
		<div class="c-Masthead__navigation c-Masthead__navigation--is-collapsed c-Card o-Box">
			<div class="o-Stack o-Stack--split@s">
				<div class="o-Stack__item o-Stack__item--half@s">
					<p>Informação</p>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-information',
							'menu_class'     => 'o-Stack o-Stack--medium',
							'container'      => false,
							'items_wrap'     => '<ul class="%2$s">%3$s</ul>'
						)
					);
					?>
				</div>
				<div class="o-Stack__item o-Stack__item--half@s">
					<p>Navegar</p>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-browse',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</div>
		</div>
	</header>