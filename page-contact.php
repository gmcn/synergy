<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<div class="contact_map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9878.305511570356!2d0.0019363161555630364!3d51.75906946831769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d89e04bb35b017%3A0xe47b20bdf1173e6c!2s4%20Charlton%20Mead%20Ln%2C%20Hoddesdon%20EN11%200DJ!5e0!3m2!1sen!2suk!4v1641565710879!5m2!1sen!2suk" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	</div>



	<div class="container page-content page-contact">

		<div class="row">

			<div class="col-md-6">
				<?php echo the_content(); ?>
			</div>

			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="394" title="Contact"]') ?>
			</div>

		</div>


	</div>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
