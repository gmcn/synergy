<?php

  $content_block_usp__heading = get_sub_field('content_block_usp__heading');
  $content_block_usp__copy = get_sub_field('content_block_usp__copy');
  $link = get_sub_field('content_block_usp__link');

 ?>


<div class="container section-content-usp">
  <div class="row">

    <div class="col-md-6 section-content-usp__usp">

      <?php if ( have_rows('content_block_usp__usps') ): ?>
          <?php  $i = 1; while ( have_rows('content_block_usp__usps') ) : the_row();

          $usp_title = get_sub_field('usp_title');
          $usp_copy = get_sub_field('usp_copy');
          $usp_image = get_sub_field('usp_image');

          ?>
            <div class="row no-gutters">

              <?php if ($i % 2): ?>
                <div class="col-6 align-self-center section-content-usp__usp__copy">

                  <h3><?php echo $usp_title; ?></h3>
                  <?php echo $usp_copy; ?>

                </div>

                <div class="col-6">

                  <?php if( $usp_image ):

                      // Image variables.
                      $url = $usp_image['url'];
                      $title = $usp_image['title'];
                      $alt = $usp_image['alt'];
                      $caption = $usp_image['caption'];

                      // Thumbnail size attributes.
                      $size = 'tax-thumb';
                      $thumb = $usp_image['sizes'][ $size ];
                      $width = $usp_image['sizes'][ $size . '-width' ];
                      $height = $usp_image['sizes'][ $size . '-height' ];

                      ?>

                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                  <?php endif; ?>

                </div>

              <?php else : ?>

                <div class="col-6">

                  <?php if( $usp_image ):

                      // Image variables.
                      $url = $usp_image['url'];
                      $title = $usp_image['title'];
                      $alt = $image['alt'];
                      $caption = $usp_image['caption'];

                      // Thumbnail size attributes.
                      $size = 'tax-thumb';
                      $thumb = $usp_image['sizes'][ $size ];
                      $width = $usp_image['sizes'][ $size . '-width' ];
                      $height = $usp_image['sizes'][ $size . '-height' ];

                      ?>

                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                  <?php endif; ?>

                </div>

                <div class="col-6 align-self-center section-content-usp__usp__copy">

                  <h3><?php echo $usp_title; ?></h3>
                  <?php echo $usp_copy; ?>

                </div>




              <?php endif; ?>




              </div>
          <?php $i++; endwhile; ?>
      <?php endif; ?>

    </div>

    <div class="col-md-6">

      <h2><?php echo $content_block_usp__heading ?></h2>
      <?php echo $content_block_usp__copy ?>

      <?php if( $link ):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <br /> <br />
          <a class="fancybutton" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

    </div>

  </div>
</div>
