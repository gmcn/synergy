<?php

  $section_testimonials_heading = get_sub_field('section_testimonials_heading');
  $section_testimonials_subheading = get_sub_field('section_testimonials_subheading');

  $section_testimonials_projects = get_sub_field('section_testimonials_projects');

 ?>

<section class="section-testimonials">

  <div class="container section-about__header">
    <p class="subtitle"><?php echo $section_testimonials_heading; ?></p>


    <h2>

      <?php echo $section_testimonials_subheading; ?>

    </h2>

  </div>

  <?php if( $section_testimonials_projects ):

    ?>
    <div class="swiper _js_testimonials">
      <div class="swiper-wrapper">

        <?php foreach( $section_testimonials_projects as $post ):

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <div class="swiper-slide">
                <div class="section-testimonials__testimonial">

                  <p><?php echo the_field( 'cs_testimonal' ); ?></p>
                  <a href="<?php the_permalink(); ?>">View Project

                    <svg xmlns="http://www.w3.org/2000/svg" width="15.84" height="15.84" viewBox="0 0 15.84 15.84">
                      <path id="arrow-right" d="M4,11v2H16l-5.5,5.5,1.42,1.42L19.84,12,11.92,4.08,10.5,5.5,16,11Z" transform="translate(-4 -4.08)"/>
                    </svg>


                  </a>

                </div>

                <div class="section-testimonials__details">

                  <div class="img_wrap" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>)">
                  </div>


                  <p class="testimonal_byline"><?php echo the_field( 'cs_testimonal_byline' ); ?></p>
                  <p><?php echo the_field( 'cs_testimonal_author_title' ); ?></p>
                </div>

            </div>
        <?php endforeach; ?>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <?php
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>


</section>
