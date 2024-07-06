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
	<header class="c-Masthead o-Box u-phn">
		<div class="u-flex u-flex-jsb">
			<ul class="o-HorizontalList o-HorizontalList--delimited" data-delimiter="/">
				<li><h1><a href="/"><span class="u-ScreenReaderText">Eduardo Domingos</span></a></h1></li>
				<li>home</li>
			</ul>
			<div class="u-flex">
				<button class="c-Button">Menu</button>
			</div>
		</div>

		<div class="c-Masthead__navigation c-Masthead__navigation--is-collapsed c-Card o-Box">
			<div class="o-Stack o-Stack--split@s">
				<div class="o-Stack__item o-Stack__item--half@s">
					<p>Informação</p>
					<ul class="o-Stack o-Stack--medium">
						<li class="o-Stack--item"><a href="#">Bio</a></li>
					</ul>
				</div><!-- .o-Stack__item -->
				<div class="o-Stack__item o-Stack__item--half@s">
					<p>Navegar</p>
					<ul class="o-Stack o-Stack--medium">
						<li class="o-Stack--item"><a href="#">Blog</a></li>
					</ul>
				</div><!-- .o-Stack__item -->
			</div><!-- .o-Stack -->
		</div><!-- .c-Masthead__menu-collapsible -->
	</header><!-- .c-Masthead -->

	<div class="c-HighlightBoard">
		<div class="c-HighlightBoard__content o-Stack">
			<div class="o-Stack__item">
				<p class="u-mbs">Eduardo Domingos</p>
				<p class="u-mbm">Front End Developer</p>
				<p>Gosto de escrever sobre Front End Development e coisas aleatórias que, muito provavelmente, ninguém quer saber.</p>
			</div><!-- .o-Stack__item -->
			<div class="o-Stack__item o-Stack o-Stack--medium o-Stack--split@xs">
				<a href="" class="c-Button c-Button--full@s o-Stack__item">Bio</a>
			</div><!-- .o-Stack__item -->
		</div><!-- c-HighlightBoard__content -->
	</div><!-- .c-HighlightBoard -->

	<div class="o-Stack">
		<div class="o-Stack__item">
			<div class="o-Stack">
				<div class="o-Stack__item o-Stack o-Stack--split@xs">
					<h2 class="o-Stack__item">Últimos Artigos</h2>
					<div class="o-Stack__item u-flex">
						<a href="#" class="">Ver todos</a>
					</div>
				</div>
				<div class="o-Stack__item">
					<ul class="o-VerticalList o-VerticalList--delimited">
						<li class="o-Box u-phn">
							<a href=""><h3>Afinal devo usar px, em ou rem?</h3> <time>Jun 2024</time></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="o-Stack__item">
			<div class="o-Stack">
				<h2 class="o-Stack__item">Bucket Lists</h2>
				<ul class="o-Stack__item o-List o-List--bare o-Grid o-Grid--large">
					<li class="o-Grid__item">
						<a href="" class="c-Card o-Stack">
							<h2 class="o-Stack__item">Receitas</h2>
							<p class="o-Stack__item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia rerum pariatur accusantium, quasi temporibus nostrum quo eveniet adipisci corporis vel vero odit nam ex corrupti harum maxime. Deleniti, minima quo.</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<footer class="c-Footer o-Box u-phn u-flex u-flex--jsb">
		<small>© 2010 - 2024 / Eduardo Domingos</small>
		<a href="#">Ver fonte</a>
	</footer>



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
