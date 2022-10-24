<?php if ( have_rows('hero_slider') ): ?>
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">
    <?php while ( have_rows('hero_slider') ) : the_row();

    $hero_slider_image = get_sub_field('hero_slider_image');
    $hero_slider_video = get_sub_field('hero_slider_video');
    $hero_slider_sub_title = get_sub_field('hero_slider_sub_title');
    // $hero_slider_main_title = get_sub_field('hero_slider_main_title');


    $hero_slider_main_title_one = get_sub_field('slide_main_title_line_one');
    $hero_slider_main_title_two = get_sub_field('slide_main_title_line_two');
    $hero_slider_main_title_three = get_sub_field('slide_main_title_line_three');


    $hero_slider_description = get_sub_field('hero_slider_description');

    $hero_slider_description_one = get_sub_field('hero_slider_description_one');
    $hero_slider_description_two = get_sub_field('hero_slider_description_two');
    $hero_slider_description_three = get_sub_field('hero_slider_description_three');


    ?>

    <div class="swiper-slide" style="background: url(<?php echo $hero_slider_image ?>) center center; background-size: cover;">

      <?php if ($hero_slider_video): ?>
          <video width="100%" autoplay="" playsinline="" muted="muted" loop="loop">
          <source src="<?php echo $hero_slider_video ?>" type="video/mp4" autoplay muted>
        </video>
      <?php endif; ?>

      <div class="swiper-slide__content align-self-center">

        <div class="container">

          <?php if ($hero_slider_main_title_one): ?>
            <h1>
              <span>
                <?php echo $hero_slider_main_title_one; ?>
              </span>
            </h1>
          <?php endif; ?>

          <?php if ($hero_slider_main_title_two): ?>
            <h1>
              <span>
                <?php echo $hero_slider_main_title_two; ?>
              </span>
            </h1>
          <?php endif; ?>

          <?php if ($hero_slider_main_title_three): ?>
            <h1>
              <span>
                <?php echo $hero_slider_main_title_three; ?>
              </span>
            </h1>
          <?php endif; ?>


          <!-- <h1><span><?php //echo $hero_slider_main_title ?></span></h1> -->

          <p class="d-none d-md-block">
            <span><?php echo $hero_slider_description_one ?></span>
          </p>

          <p class="d-none d-md-block">
            <span><?php echo $hero_slider_description_two ?></span>
          </p>

          <p class="d-none d-md-block">
            <span><?php echo $hero_slider_description_three ?></span>
          </p>

          <?php
            $link = get_sub_field('hero_slider_link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>


            <?php endif; ?>



        </div>


      </div>



    </div>
    <?php endwhile; ?>
  </div>
  <div class="swiper-pagination"></div>

  <div class="swiper-pagination duplicate"></div>

  <a href="#product-categories">
    <img class="scroll wow bounce infinite" src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.png" alt="">
  </a>



</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
