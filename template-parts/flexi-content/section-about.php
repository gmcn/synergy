<?php

  $section_about_heading = get_sub_field('section_about_heading');
  $section_about_subheading = get_sub_field('section_about_subheading');
  $image = get_sub_field('section_about_img');
  $section_about_copy_heading = get_sub_field('section_about_copy_heading');
  $section_about_copy = get_sub_field('section_about_copy');
  $section_about_link = get_sub_field('section_about_copy_link');

 ?>

<section class="section-about container">

  <div class="section-about__header">
    <p class="subtitle"><?php echo $section_about_subheading; ?></p>


    <h2>

      <?php echo $section_about_heading; ?>

    </h2>

  </div>




  <div class="row no-gutters">
    <div class="col-md-6 section-about_img wow fadeInLeft">

      <?php
        if( $image ):

            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // Thumbnail size attributes.
            $size = 'about-thumb';
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];

            ?>

            <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
            </a>
        <?php endif; ?>



    </div>
    <div class="col-md-7 section-about_copy align-self-center">

      <h3><?php echo $section_about_copy_heading; ?></h3>

      <?php echo $section_about_copy; ?>

      <?php
        if( $section_about_link ):
            $link_url = $section_about_link['url'];
            $link_title = $section_about_link['title'];
            $link_target = $section_about_link['target'] ? $section_about_link['target'] : '_self';
            ?>
            <a class="button wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?>


              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"></path></svg>

            </a>
        <?php endif; ?>

    </div>
  </div>
</section>
