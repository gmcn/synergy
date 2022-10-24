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
		<div class="row">

			<div class="col-md-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9878.305511570356!2d0.0019363161555630364!3d51.75906946831769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d89e04bb35b017%3A0xe47b20bdf1173e6c!2s4%20Charlton%20Mead%20Ln%2C%20Hoddesdon%20EN11%200DJ!5e0!3m2!1sen!2suk!4v1641565710879!5m2!1sen!2suk" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

			<div class="col-md-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.245727578844!2d-0.11065438385185707!3d51.52705267963839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b450bccba45%3A0xbacdb2a1176538d1!2s121-131%20Rosebery%20Ave%2C%20London%20EC1R%204RF!5e0!3m2!1sen!2suk!4v1660897941973!5m2!1sen!2suk" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

			<div class="col-md-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.34312561638!2d-2.2443420641343907!3d53.48019871606072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1c061417d03%3A0x25c920ff9a82e928!2s1%20New%20York%20St%2C%20Manchester%20M1%204HD!5e0!3m2!1sen!2suk!4v1660898009832!5m2!1sen!2suk" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>



		</div>
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
