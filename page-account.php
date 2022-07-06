<?php
/**
 * Template Name: Account Page
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

	<div class="page-header">

		<svg class="pattern" x="0" y="0" width="100%" height="100%">
			<defs>
				<pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
							<path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"/>
				</pattern>
			</defs>
			<rect x="1" y="1" width="100%" height="100%" stroke= "#ffffff" stroke-width="2" fill="url(#diagonalHatch)" />
		</svg>

		<div class="container" style="display: flex;">

				<div class="align-self-end">
					<h1><?php echo the_title(); ?></h1>
				</div>
				<div class="ruler">

				</div>
		</div>

	</div>


	<div class="container page-content page-contact">

		<div class="row">

			<div class="col-md-6">
				<?php echo the_content(); ?>
			</div>

			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="556" title="Account Creation"]') ?>
			</div>

		</div>


	</div>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
