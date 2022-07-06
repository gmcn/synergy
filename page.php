<?php
/**
 * The template for displaying all pages
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

get_header();

$content = get_the_content();
$subTitle = get_field('sub_title')

?>

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
						
						<?php if ($subTitle): ?>
							<p class="page-subtitle"><?php echo $subTitle ?></p>
						<?php endif; ?>

						<h1><?php echo the_title(); ?></h1>
					</div>
					<div class="ruler"></div>
			</div>

		</div>


<?php if ($content): ?>
	<div class="container page-content">
		<?php echo the_content(); ?>
	</div>
<?php endif; ?>




	<?php endif; ?>

	<?php if (is_page('gallery')): ?>

		<?php include('template-parts/flexi-content/gallery.php'); ?>

	<?php endif; ?>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
