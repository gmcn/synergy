<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<article class="page-404">
	<div class="container page-404__container">
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg" alt="Ohh! Page not found" loading="lazy">
		<div class="page-404__title">Ohh! Page not found</div>
		<div class="page-404__subtitle">You seem can’t to find the page you’re looking for</div>
		<a class="page-404__btn" href="/">back to homepage</a>
	</div>
</article>

<?php
get_footer();
