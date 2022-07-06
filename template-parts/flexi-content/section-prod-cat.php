<section class="product-categories" id="product-categories">

  <div class="container-fluid">

  <?php
  $terms = get_sub_field('product_categories');
  if( $terms ): ?>
      <div class="row">
      <?php foreach( $terms as $term ):

        $thumb_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
        $term_img = wp_get_attachment_image_url( $thumb_id, 'tax-thumb' );
        $image = get_field('category_supplier_branding', $term);

        $altImage = get_field('alternative_category_img', $term);

        ?>


          <div class="col-lg-3 wow fadeInUp">

            <div class="product-categories__cat">
              <a href="<?php echo get_term_link( $term ); ?>">

                <div class="product-categories__cat__header">



                  <img src="<?php echo $image; ?>" alt="<?php echo esc_html( $term->name ); ?>">

                  <h2 class="matchheight"><?php echo esc_html( $term->name ); ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="15.84" height="15.84" viewBox="0 0 15.84 15.84">
                      <path id="arrow-right" d="M4,11v2H16l-5.5,5.5,1.42,1.42L19.84,12,11.92,4.08,10.5,5.5,16,11Z" transform="translate(-4 -4.08)"/>
                    </svg>


                  </h2>
                </div>



                <div class="img_wrap">

                  <?php if ($altImage):

                    // Thumbnail size attributes.
                    $size = 'tax-thumb';
                    $thumb = $altImage['sizes'][ $size ];
                    $width = $altImage['sizes'][ $size . '-width' ];
                    $height = $altImage['sizes'][ $size . '-height' ];

                    ?>



                    <img alt="<?php echo esc_html( $term->name ); ?>" src="<?php echo esc_url($thumb); ?>" />


                  <?php else : ?>


                    <img alt="<?php echo esc_html( $term->name ); ?>" src="<?php echo $term_img;?>">


                  <?php endif; ?>

                </div>



              </a>
            </div>


          </div>

      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  </div>

</section>
