<section class="container latest-news-grid">


<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) : ?>

    <div class="section-about__header">
      <p class="subtitle">Our Blog</p>

      <h2>
        Latest News
      </h2>

    </div>

    <div class="row">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-6 col-lg-4 latest-news-grid__entry" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center;">

          <div class="details">
            <p class="details__title"><?php echo the_title(); ?></p>
            <p class="details__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 40, '...' ); ?></p>
            <a href="<?php echo the_permalink(); ?>">
              Read More
            </a>
          </div>

        </div>

      <?php endwhile; ?>
    </div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

</section>
