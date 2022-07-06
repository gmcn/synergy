<?php

function add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 270,
        'single_image_width'    => 650,
    ) );
}

add_action( 'after_setup_theme', 'add_woocommerce_support' );

//  Remove downloads from menu in my account page

function remove_my_account_menu_items( $items ) {
    unset($items['downloads']);
    unset($items['edit-address']);
    unset($items['orders']);
    return $items;
}
add_filter( 'woocommerce_account_menu_items', 'remove_my_account_menu_items' );


// add custom endpoint for My Account menu
add_filter ( 'woocommerce_account_menu_items', 'customize_account_menu_items' );
function customize_account_menu_items( $menu_items ){
     // Add new Custom URL in My Account Menu
    $new_menu_item = array('contact-us'=>'Favourite Products');  // Define a new array with cutom URL slug and menu label text
    $new_menu_item_position=3; // Define Position at which the New URL has to be inserted

    array_splice( $menu_items, ($new_menu_item_position-1), 0, $new_menu_item );
    return $menu_items;
}
// point the endpoint to a custom URL
add_filter( 'woocommerce_get_endpoint_url', 'custom_woo_endpoint', 10, 2 );
function custom_woo_endpoint( $url, $endpoint ){
     if( $endpoint == 'wishlist' ) {
        $url = '/wishlist/'; // Your custom URL to add to the My Account menu
    }
    return $url;
}

// if in_use_image is added, this will display on hover

function woocommerce_template_loop_product_thumbnail() {

  echo woocommerce_get_product_thumbnail();

  $product = new WC_Product( get_the_ID() );
  $attachment_ids = $product->get_gallery_image_ids();

  if ( is_array( $attachment_ids ) && !empty($attachment_ids) ) {
      $first_image_url = wp_get_attachment_url( $attachment_ids[0], "large" );
      echo '<div class="in_use_image" style=" background: url(' . $first_image_url . ') no-repeat center center #fff; background-size: cover; "></div>';
  }


}

add_action( 'after_setup_theme', 'woocommerce_gallery' );

function woocommerce_gallery() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );
function my_remove_product_result_count() {
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );

    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_catalog_ordering', 30 );
}

/**
 * Change number of related products output
 */
function woo_related_products_limit() {
  global $product;

	$args['posts_per_page'] = 12;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 12; // 4 related products
	return $args;
}

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

function hide_prices( $price, $product ) {
  // if ( is_product_category() ) {
  //   return ''; // Empty string = no price!
  // }

  return '';
}
add_filter( 'woocommerce_get_price_html', 'hide_prices', 10, 2 );

add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

function remove_add_to_cart_buttons() {

  if( is_product_category() || is_shop()) {

    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

  }

}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}
