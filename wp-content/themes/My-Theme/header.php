<?php
/**
 * Header template for My-Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/wp-content/themes/My-Theme/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="site-header__inner">
		<div class="site-branding">
			<p class="site-subtitle">Centro Universitário</p>
			<h1 class="site-title">Adolpho Berezin</h1>
			<div class="site-accent-bar"></div>
		</div>

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="document.getElementById('primary-menu')?.classList.toggle('collapsed');">
			Menu
		</button>

		<nav id="primary-menu" class="main-navigation collapsed" aria-label="Menu principal">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => '',
						'container'      => false,
					)
				);
			?>
		</nav>
	</div>
</header>

<div id="content" class="site-content">
