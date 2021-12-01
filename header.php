<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>


		<nav class="navbar navbar-expand-lg bg-light">

			<a class="navbar-brand" href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Synergy Creativ">
			</a>

	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarCollapse',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>

				<div class="header_search mt-2 mt-md-0">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
						width="24" height="24"
						viewBox="0 0 24 24">
						<path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
					</svg>
	      </div>

				<div class="header_nav mt-2 mt-md-0">
					<button class="header__menu-toggle menu-toggle" type="button">
						<span class="d-none">Menu</span>
					</button>
	      </div>
	  </nav>

	</header><!-- header -->

	<section class="menu">
	<div class="menu__inner">

		<div class="menu__profile">

			<a href="/my-account">

				<svg xmlns="http://www.w3.org/2000/svg" width="24.569" height="25.933" viewBox="0 0 24.569 25.933">
				  <path id="Path_112" data-name="Path 112" d="M12.285,28.04a7.02,7.02,0,1,0-7.02-7.02A7.019,7.019,0,0,0,12.285,28.04Zm4.914-.391h-.916a9.547,9.547,0,0,1-8,0H7.371A7.373,7.373,0,0,0,0,35.019V37.3a2.633,2.633,0,0,0,2.632,2.632h19.3A2.633,2.633,0,0,0,24.569,37.3V35.019A7.373,7.373,0,0,0,17.2,27.648Z" transform="translate(0 -14)"/>
				</svg>

			</a>

		</div>



	<button class="menu__close" type="button">

		<svg xmlns="http://www.w3.org/2000/svg" width="25.933" height="25.933" viewBox="0 0 25.933 25.933">
		  <path id="cross-symbol" d="M12.967,0A12.967,12.967,0,1,1,0,12.967,12.967,12.967,0,0,1,12.967,0ZM15.74,7.766c.367-.374.6-.671,1.055-.211l1.477,1.5c.483.477.458.756,0,1.2l-2.8,2.788,2.691,2.691c.374.367.671.6.211,1.055l-1.5,1.477c-.477.483-.756.458-1.2,0l-2.708-2.714-2.7,2.7c-.443.454-.722.479-1.2,0l-1.5-1.477c-.464-.454-.167-.684.211-1.055l2.687-2.68L7.671,10.265c-.454-.445-.479-.724,0-1.2l1.477-1.5c.454-.464.684-.167,1.055.211l2.763,2.769Z" fill-rule="evenodd"/>
		</svg>

	<span class="d-none">Close menu</span>
	</button>


	<?php
		wp_nav_menu( array(
			'theme_location'  => 'menu-slider',
			'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
			'container'       => 'div',
			'container_class' => 'menu__wrapper',
			'menu_class'      => 'menu__list',
			) );
		?>

		<div class="menu__bottom">

			<div class="menu__copy">

				<form role="search" method="get" class="search-form" action="/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="What are you looking for?" value="" name="s">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>

			</div>
		</div>
	</div>
	</section>

	<div id="content" class="site-content">
