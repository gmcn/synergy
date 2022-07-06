<div class="section-cs">

  <div class="container section-about__header">

    <p class="subtitle">Case Studies</p>

    <h2>
      Stand out from the crowd
    </h2>

    <a class="viewall" href="/case-study/">View All</a>

  </div>


  <?php
  $args = array(
    'post_type' => 'case-study',
    'posts_per_page' => -1,
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) : ?>
  <div class="swiper _js_case-study" style="position: relative">
    <div class="swiper-wrapper">

      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="swiper-slide" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center">

          <div class="title">
            <strong><?php the_title(); ?></strong><br>
            <?php echo get_field('cs_project_location') ?>
          </div>

          <div class="details">
            <p class="details__title"><?php echo the_title(); ?></p>
            <p class="details__excerpt d-xl-none"><?php echo wp_trim_words( get_the_excerpt(), 10, '...' ); ?></p>
            <p class="details__excerpt d-none d-xl-block"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
            <a href="<?php echo the_permalink(); ?>">View Project
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
            </a>
          </div>

        </div>

      <?php endwhile; ?>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

</div>
