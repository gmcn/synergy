<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="woocommerce-summary__wrap">


		<svg class="pattern" x="0" y="0" width="100%" height="100%">
			<defs>
				<pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
							<path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"/>
				</pattern>
			</defs>
			<rect x="1" y="1" width="100%" height="100%" stroke= "#ffffff" stroke-width="2" fill="url(#diagonalHatch)" />
		</svg>

		<div class="container">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>

			<div class="summary entry-summary">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>

			</div>
		</div>

		<div class="clear" style="clear: both;">

		</div>


	</div>





	<div class="container acfproduct" style="clear: both">
		<div class="acfproduct_keys">
			<div class="row">
				<div class="col-lg-6">

					<!-- <div class="row"> -->
						<?php if ( have_rows('key_characteristics') ): ?>
						  <!-- <div class="col-md-6"> -->

							<h3>Key Characteristics</h3>

								<div class="row">
									<?php while ( have_rows('key_characteristics') ) : the_row(); ?>

										<div class="col-md-6">

											<h4><?php the_sub_field('key_characteristics__list_title'); ?></h4>

											<?php if ( have_rows('key_characteristics_list') ): ?>
											  <ul>
											    <?php while ( have_rows('key_characteristics_list') ) : the_row(); ?>
											      <li><?php the_sub_field('characteristic'); ?></li>
											    <?php endwhile; ?>
											  </ul>
											<?php endif; ?>
										</div>


							    <?php endwhile; ?>
								</div>



						  <!-- </div> -->
						<?php endif; ?>
					<!-- </div> -->


				</div>
				<div class="col-lg-5 offset-md-1 acfproduct_keys__features">


					<?php if ( have_rows('key_features') ): ?>

						<h3>Key Features</h3>

					  <ul class="features">
					    <?php while ( have_rows('key_features') ) : the_row(); ?>

					      <li>

									<span class="noimg"><?php the_sub_field('key_features__feature'); ?></span>

								</li>

					    <?php endwhile; ?>
					  </div>
					<?php endif; ?>

				</ul>
			</div>
		</div>

		<div class="acfproduct_data">
			<div class="row">
				<div class="col-lg-12">


					<?php if ( have_rows('technical_data') ): ?>

						<h4>Technical Data</h4>

					  <table class="table">
					    <?php $i = 1; while ( have_rows('technical_data') ) : the_row(); ?>

								<?php if ($i === 1) : ?>

									<thead>
								    <tr>
								      <th scope="col"><?php the_sub_field('technical_data__col_1'); ?></th>
								      <th scope="col"><?php the_sub_field('technical_data__col_2'); ?></th>
											<th scope="col"><?php the_sub_field('technical_data__col_3'); ?></th>
											<th scope="col"><?php the_sub_field('technical_data__col_4'); ?></th>
											<th scope="col"><?php the_sub_field('technical_data__col_5'); ?></th>
											<th scope="col"><?php the_sub_field('technical_data__col_6'); ?></th>
											<th scope="col"><?php the_sub_field('technical_data__col_7'); ?></th>
								    </tr>
								  </thead>
									<tbody>

								<?php else : ?>



										<tr>

											<td><?php the_sub_field('technical_data__col_1'); ?></td>
								      <td><?php the_sub_field('technical_data__col_2'); ?></td>
											<td><?php the_sub_field('technical_data__col_3'); ?></td>
											<td><?php the_sub_field('technical_data__col_4'); ?></td>
											<td><?php the_sub_field('technical_data__col_5'); ?></td>
											<td><?php the_sub_field('technical_data__col_6'); ?></td>
											<td><?php the_sub_field('technical_data__col_7'); ?></td>


										</tr>



								<?php endif; ?>

					    <?php $i++; endwhile; ?>
					  </tbody>
					<?php endif; ?>


				</table>
			</div>
		</div>


		<div class="acfproduct_options">

				<?php if ( have_rows('product_options') ): ?>

						<div class="row">
							<?php while ( have_rows('product_options') ) : the_row(); ?>

								<div class="col-md-6 col-lg-4 acfproduct_options__option">

									<p class="list_title"><?php the_sub_field('product_option__list_title'); ?></p>
									<p class="list_sub_title"><?php the_sub_field('product_option__sub_title'); ?></p>

									<?php if ( have_rows('product_options__list') ): ?>
										<ul>

									    <?php while ( have_rows('product_options__list') ) : the_row(); ?>

												<li>
													<strong><?php the_sub_field('product_options__list__code'); ?></strong> <?php the_sub_field('product_options__list__title'); ?>
												</li>

									    <?php endwhile; ?>
										</ul>
									<?php endif; ?>

								</div>

					    <?php endwhile; ?>

				  </div>
				<?php endif; ?>

		</div>

	</div>



	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
