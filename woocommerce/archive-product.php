<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

$queried_object = get_queried_object();

?>


<div class="woocommerce-products-header">


	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) :

		$thumbnail_id = get_term_meta( $queried_object->term_id, 'thumbnail_id', true );
		$image_url    = wp_get_attachment_url( $thumbnail_id ); // This variable is returing the product category thumbnail image URL. category thumbnail image URL.

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( 76 ), 'single-post-thumbnail' );

		?>

		<?php if ( is_shop() || !$image_url ): ?>

			<div class="woocommerce-products-header__img" style="display: flex; height: 300px; margin-bottom: 50px; background: url(<?php echo $image[0]; ?>) center center / cover;">

			<?php else : ?>

			<div class="woocommerce-products-header__img" style="display: flex; height: 300px; margin-bottom: 50px; background: url(<?php echo $image_url; ?>) center center / cover;">

		<?php endif; ?>

			<div class="container" style="display: flex; height: 100%;">
					<div class="align-self-end">

						<p class="page-subtitle">Products</p>
						<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

					</div>

					<div class="ruler">

					</div>

			</div>

		</div>

	<?php endif; ?>

	<?php

	$image = get_field('category_supplier_branding', $queried_object);

	 ?>

	 <?php if ($image): ?>



	<div class="container term-wrap">
		<div class="row">
			<div class="col-md-3 term-img">




				<img src="<?php echo $image; ?>" alt="<?php echo esc_html( $term->name ); ?>">

			</div>
			<div class="col-md-9">
				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				?>
			</div>
		</div>
	</div>

<?php endif; ?>


</div>

<div class="container">

	<div class="row">
		<div class="col-md-3 sidebar__block">

			<form role="search" method="get" class="search-form" action="/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
				</label>
				<input type="hidden" name="post_type" value="product" />
				<input type="submit" class="search-submit" value="Search">
			</form>

				<?php //echo get_search_form(); ?>

				<?php include(locate_template("template-parts/shop-content-flexi.php")); ?>

		</div>

		<div class="col-md-9 filter__block">

			<div class="filter__block__wrap">
				<p class="filter_by">Filter by:</p>
				<?php get_sidebar(); ?>
			</div>



			<?php
			if ( woocommerce_product_loop() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}

			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );




			?>
		</div>


	</div>

</div>

<?php include(locate_template('template-parts/content-flexi.php')); ?>

<?php get_footer( 'shop' ); ?>
