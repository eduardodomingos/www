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
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'www' ); ?></a> -->
	<header class="c-Masthead">
		<div class="c-Masthead__content o-Stack o-Stack--split@xxs">
			<div class="o-Stack__item">
				<ul class="o-HorizontalList o-HorizontalList--delimited" data-delimiter="/">
					<li><h1><a href="/"><span class="u-ScreenReaderText">Eduardo Domingos</span></a></h1></li>
					<li>home</li>
				</ul>	
			</div>
			<div class="o-Stack__item">
				<!-- pesquisar aqui um componente de switch enable/disable c-Switcher com a variação c-Switcher--compact com breakpoints -->
				<button class="c-Button">Menu</button>
			</div>
		</div>

		<div class="c-Masthead__menu-collapsible c-Masthead__menu-collapsible--is-collapsed c-Card">
			<div class="o-Stack o-Stack--split@xxs c-Card__content">
				<div class="o-Stack__item o-Stack__item--half@xxs">
					<p>Informação</p>
					<ul class="o-Stack o-Stack--medium">
						<li class="o-Stack--item"><a href="#">Bio</a></li>
					</ul>
				</div><!-- .o-Stack__item -->
				<div class="o-Stack__item o-Stack__item--half@xxs">
					<p>Navegar</p>
					<ul class="o-Stack o-Stack--medium">
						<li class="o-Stack--item"><a href="#">Blog</a></li>
					</ul>
				</div><!-- .o-Stack__item -->
			</div><!-- .o-Stack -->
		</div><!-- .c-Masthead__menu-collapsible -->
	</header><!-- .c-Masthead -->


	<div class="c-HighlightBoard">
		<div class="c-HighlightBoard__content">
			<div class="o-Stack">
				<div class="o-Stack__item">
					<p class="u-mb">Eduardo Domingos</p>
					<p class="u-mb">Front End Developer</p>
					<p class="u-mb">Gosto de escrever sobre Front End Development e coisas aleatórias que, muito provavelmente, ninguém quer saber.</p>
				</div>
				<div class="o-Stack__item">
					<a href="" class="c-Button">Bio</a>
				</div>
			</div>			
		</div>
	</div>





	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$www_description = get_bloginfo( 'description', 'display' );
			if ( $www_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $www_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'www' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
