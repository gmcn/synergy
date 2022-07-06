<?php
/**
 * Template Name: Newsletter Page
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

	<?php if (!is_front_page()): ?>

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


		<div class="container page-content">
			<div class="row">
				<div class="col-md-6">
					<?php echo the_content(); ?>
				</div>
				<div class="col-md-6">

					<p class="subscribe">Your details</p>



					<div>

						<form class="js-cm-form wpcf7-form wpcf7" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="191722FC90141D02184CB1B62AB3DC265F96F8891E3185A9EC157EEE299B84D32CC261024AB7F402759BE019111503A841BAB55ED0E6992BB8281AAF90604180">
								<div class="row ">
									<div class="col-md-6 form-group">
										<label>NAME </label> <br />
										<input type="text" aria-label="Name" id="fieldName" maxlength="200" name="cm-name" class="form-control">
									</div>
								<div class="col-md-6 form-group">
									<label>EMAIL </label> <br />
									<input autocomplete="Email" aria-label="Email" class="js-cm-email-input qa-input-email form-control" id="fieldEmail" maxlength="200" name="cm-jytydku-jytydku" required="" type="email">
								</div>


								<div class="col-md-12 form-group">

									<label>COMPANY NAME </label>
									<input type="text" aria-label="Company Name" id="fieldjyulay" maxlength="200" name="cm-f-jyulay" class="form-control">
								</div>


							</div>
						<button class="submit" type="submit"><span>Subscribe</span></button>
					</form>

				</div>


				<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>

					<?php //echo do_shortcode('[contact-form-7 id="283" title="Newsletter"]'); ?>

				</div>
			</div>

		</div>

	<?php endif; ?>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
