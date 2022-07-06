<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>

	<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

	<?php if ( have_rows('downloads') ): ?>
	    <?php while ( have_rows('downloads') ) : the_row();

			 $download_title = get_sub_field( "download_title" );
			 $download_file = get_sub_field( "download_file" );
			 $download_account = get_sub_field( "download_account" );
			 $download_form = get_sub_field( "download_form" );

			?>

			<?php if ($download_account): ?>

				<?php if (is_user_logged_in()): ?>

					<a class="download" href="<?php echo $download_file ?>" target="_blank"> <?php echo $download_title; ?> </a>

				<?php else : ?>

					<a class="download" href="#" data-toggle="modal" data-target=".bd-example-modal-sm"> <?php echo $download_title; ?> </a>

				<?php endif; ?>


			<?php elseif ($download_form) : ?>
				<a class="download" href="#" data-toggle="modal" data-target="#exampleModalCenter"> <?php echo $download_title; ?> </a>
			<?php else: ?>
				<a class="download" href="<?php echo $download_file ?>" target="_blank"> <?php echo $download_title; ?> </a>
			<?php endif; ?>



	    <?php endwhile; ?>
	<?php endif; ?>

	 <!-- <a class="download" href="#" data-toggle="modal" data-target="#exampleModalCenter"> Download LDT Files </a> -->

		<!-- Modal -->
		<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Fill in the below form to recieve this file</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo do_shortcode('[contact-form-7 id="490" title="LDT Files"]'); ?>
		      </div>
		    </div>
		  </div>
		</div>

</div>
