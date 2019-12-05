<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FPC_Code
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fpc_code'); ?></a>
		<!-- <header>
			<div class="logo-container">
				<a href="/">
					<img
						id="logo"
						src="/Images/Assets/SVG/fpc_code_logo_light.svg"
						alt="FPC Code Logo"
					/>
				</a>
			</div>

			<nav>
				<ul class="nav-links">
					<li>
						<a class="nav-link" id="home" href="/">Home</a>
					</li>
					<li>
						<a class="nav-link" id="about" href="/about/">About</a>
					</li>
					<li>
						<a class="nav-link" id="officers" href="/officers/">Officers</a>
					</li>
					<li>
						<a class="nav-link" id="projects" href="/projects/">Projects</a>
					</li>
					<li>
						<a class="nav-link" id="contact" href="/contact/">Contact</a>
					</li>
				</ul>

				<div class="burger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
			</nav>

			<ul class="buttons">
				<li>
					<input type="button" onclick="redirect('/join/')" value="Join" />
				</li>
				<li>
					<input type="button" onclick="redirect('/sign-in/')" value="Sign In" />
				</li>
			</ul>
		</header>-->
		<header class="header">
			<div class="logo-container">
				<a href="/">
					<img class="logo" src="/wp-includes/images/FPC MUN Logo.jpg" alt="FPC MUN Logo" />
				</a>
			</div>

			<?php
			the_custom_logo();
			if (is_front_page() && is_home()) :
				?>
				<h1 class="site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
			<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
			endif;
			$fpc_code_description = get_bloginfo('description', 'display');
			if ($fpc_code_description || is_customize_preview()) :
				?>
				<p class="site-description"><?php echo $fpc_code_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'fpc_code'); ?></button>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		));
		?>
	</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">