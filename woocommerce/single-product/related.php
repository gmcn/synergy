<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php //woocommerce_product_loop_start(); ?>

		<div class="swiper  _js_relatedSwiper" style="position: relative">
      <ul class="swiper-wrapper products">

			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found ?>

					<li <?php wc_product_class( 'swiper-slide', $product ); ?>>
						<?php
						/**
						 * Hook: woocommerce_before_shop_loop_item.
						 *
						 * @hooked woocommerce_template_loop_product_link_open - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item' );

						/**
						 * Hook: woocommerce_before_shop_loop_item_title.
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );

						/**
						 * Hook: woocommerce_shop_loop_item_title.
						 *
						 * @hooked woocommerce_template_loop_product_title - 10
						 */
						do_action( 'woocommerce_shop_loop_item_title' );

						/**
						 * Hook: woocommerce_after_shop_loop_item_title.
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item_title' );

						/**
						 * Hook: woocommerce_after_shop_loop_item.
						 *
						 * @hooked woocommerce_template_loop_product_link_close - 5
						 * @hooked woocommerce_template_loop_add_to_cart - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item' );
						?>
					</li>


			<?php endforeach; ?>



			</ul>
			<div class="swiper-button-next">N<br>E<br>X<br>T</div>
      <div class="swiper-button-prev">P<br>R<br>E<br>V</div>
		</div>

		<?php //woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();
