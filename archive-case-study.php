<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="page-header">

	<svg class="pattern" x="0" y="0" width="100%" height="100%">
		<defs>
			<pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
						<path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"/>
			</pattern>
		</defs>
		<rect x="1" y="1" width="100%" height="100%" stroke= "#ffffff" stroke-width="2" fill="url(#diagonalHatch)" />
	</svg>

	<div class="container" style="display: flex;">

			<div class="align-self-end">
				<p class="page-subtitle">Our Projects</p>
				<h1>Stand out <br> from the crowd</h1>
			</div>
			<div class="ruler">

			</div>
	</div>

</div>

<div class="news-masonry__container">

<section class="webpage__masonry masonry">

	<?php
	$args = array(
	  'post_type' => 'case-study',
		'posts_per_page' => -1,
	);
	$query = new WP_Query( $args ); ?>

		<?php if ( $query->have_posts() ) : ?>

			<header class="container works__header">

				<div class="filter controls news-list__filter gallery-list__filter">

					<a class="filter__item filter__item--active" type="button" data-filter="*">all</a>
					<a class="filter__item" type="button" data-filter=".__js_workspace">workspace</a>
					<a class="filter__item" type="button" data-filter=".__js_commercial">commercial</a>
					<a class="filter__item" type="button" data-filter=".__js_corporate">corporate</a>
					<a class="filter__item" type="button" data-filter=".__js_retail">retail</a>
					<a class="filter__item" type="button" data-filter=".__js_led">LED Linear</a>
					<a class="filter__item" type="button" data-filter=".__js_pendant">pendant</a>
					<a class="filter__item" type="button" data-filter=".__js_ekko">ekko</a>
					<a class="filter__item" type="button" data-filter=".__js_svelto">svelto</a>
					<a class="filter__item" type="button" data-filter=".__js_stromovergaard">strom+overgaard</a>


				</div>

			</header>

			<div class="grid-wrapper gallery __js_gallery-filter">

			<?php
			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

					$terms  = wp_get_object_terms( $post->ID, 'work_types' );
					$cats  = wp_list_pluck( $terms, 'slug' );
					// $output = implode( ', ', $names );


			?>

			<div class="masonry-item gallery-item <?php echo "__js_" . implode( ' __js_', $cats ); ?>" style="background: url(<?php echo the_post_thumbnail_url('large'); ?>) center center; background-size: cover;">

				<?php echo the_post_thumbnail('tax-thumb'); ?>

				<div class="title">

            <strong><?php echo the_title() ?></strong><br>
            <?php echo get_field('cs_project_location') ?>

				</div>

				<div class="details">
            <p class="details__title"><?php echo the_title() ?></p>
            <p class="details__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
            <a href="<?php echo the_permalink(); ?>">View Project
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"></path></svg>
            </a>
          </div>

			</div>


		<?php	endwhile; ?>
		<?php wp_reset_postdata(); ?>

		</div>

		<?php endif; ?>

	</section><!-- #main -->
	</div><!-- #primary -->

	<div class="cta-bar">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 cta-bar_copy">
        <p class="cta-bar_header wow fadeIn">SYNERGY CREATIV NEWSLETTER</p>
        <p class="wow fadeIn">Subscribe to the Synergy newsletter today for new product information, special offers, hints and tips, plus broader lighting industry news.</p>
      </div>
      <div class="col-lg-5 cta-bar_link align-self-center">

				  <a class="button wow fadeIn" href="/newsletter" target="_self" >Sign Me Up!</a>

      </div>
    </div>
  </div>

</div>

<?php
//get_sidebar();
get_footer();
