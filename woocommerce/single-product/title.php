<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post, $product;

//echo wc_get_product_category_list($product->get_id());

		$taxonomy = 'product_cat';
		$primary_cat_id=get_post_meta($product->get_id(),'_yoast_wpseo_primary_' . $taxonomy, true);



    if($primary_cat_id){

     $primary_cat = get_term($primary_cat_id, $taxonomy);

     if(isset($primary_cat->name))


			$product_cat = 'product_cat_'.$primary_cat->term_id;
			the_field('category_supplier_branding', $post_id);

		 $image = get_field('category_supplier_branding', $product_cat);

		 echo '<img class="category_supplier_branding" src="' . $image . '" />';
     echo '<a href="/product-category/' . $primary_cat->slug . '">' . $primary_cat->name . '</a>';

  }

the_title( '<h1 class="product_title entry-title">', '</h1>' );
