<section class="sidebar-product-categories widget">

  <!-- <div class="container-fluid"> -->

  <p class="title">Categories</p>

  <?php

  $terms = get_sub_field('product_categories');

  if( $terms ): ?>
      <!-- <div class="row"> -->
      <?php foreach( $terms as $term ):

        $thumb_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
        $term_img = wp_get_attachment_image_url( $thumb_id, 'tax-thumb' );
        $image = get_field('category_supplier_branding', $term);

        $altImage = get_field('alternative_category_img', $term);

        ?>


          <div class="wow fadeInUp">

            <div class="sidebar-product-categories__cat">
              <a href="<?php echo get_term_link( $term ); ?>">


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

                <div class="sidebar-product-categories__cat__header">

                  <img src="<?php echo $image; ?>" alt="<?php echo esc_html( $term->name ); ?>">

                  <h2><?php echo esc_html( $term->name ); ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="7.171" height="12.296" viewBox="0 0 7.171 12.296">
                      <path id="_02" data-name="02" d="M616.785,522.961l5.741-5.74a.387.387,0,0,0,0-.567l-.616-.616a.387.387,0,0,0-.567,0L616.5,520.88l-4.841-4.841a.387.387,0,0,0-.567,0l-.616.616a.389.389,0,0,0,0,.567l5.74,5.74a.388.388,0,0,0,.567,0Z" transform="translate(-515.914 622.65) rotate(-90)" fill="#f6c93b"/>
                    </svg>



                  </h2>
                </div>

              </a>
            </div>


          </div>


          <?php

          $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

          $args = array(
         'hierarchical' => 1,
         'show_option_none' => '',
         'hide_empty' => 0,
         'parent' => $term->term_id,
         'taxonomy' => 'product_cat'
      ); ?>


      <?php

      if (strpos($url,$term->slug) !== false) {


        $subcats = get_categories($args);

        echo '<ul class="sidebar-product-categories__child">';
          foreach ($subcats as $sc) {
              $link = get_term_link( $sc->slug, $sc->taxonomy );
              echo '<li class="';
              if ($link == $url) {
                echo 'active';
              }
              echo '"><a href="';
              echo $link;
              echo '">';
              echo $sc->name;
              echo '</a></li>';
              // echo $url;





          }
        echo '</ul>';

      }

           ?>



      <?php endforeach; ?>
    <!-- </div> -->
  <?php endif; ?>

  <!-- </div> -->

</section>
