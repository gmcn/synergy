<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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


				<p class="page-subtitle">Blog</p>
				<h1><?php echo get_the_title( 26 ); ?></h1>

			</div>

			<div class="ruler"></div>

		</div>

	</div>

	<div class="container news-articles">

		<?php
		if ( have_posts() ) : ?>



			<?php

			/* Start the Loop */
			$i = 1; while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="row" <?php //post_class(); ?>>


					<?php if ($i % 2): ?>

						<div class="col-md-6 news-articles__posttitle">

							<p class="byline">Posted <span><?php echo the_date('d M Y'); ?></span>  by <span><?php echo get_the_author_nickname(); ?></span></p>

							<?php  ?>

						<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif; ?>

						<?php echo the_excerpt(); ?>

						<br /><br />

						<a class="more" href="<?php echo the_permalink(); ?>">View More</a>

					<?php else : ?>

					<div class="col-md-6 news-articles__postimg" style="background: url(<?php echo the_post_thumbnail_url() ?>) center center / cover">

						<a href="<?php echo the_permalink(); ?>">
							<span>Read Now


								<svg xmlns="http://www.w3.org/2000/svg" width="15.84" height="15.84" viewBox="0 0 15.84 15.84">
                  <path id="arrow-right" d="M4,11v2H16l-5.5,5.5,1.42,1.42L19.84,12,11.92,4.08,10.5,5.5,16,11Z" transform="translate(-4 -4.08)"></path>
                </svg>


							</span>
						</a>



					<?php endif; ?>



				</div>

					<?php if ($i % 2): ?>

						<div class="col-md-6 news-articles__postimg" style="background: url(<?php echo the_post_thumbnail_url() ?>) center center / cover">

							<a href="<?php echo the_permalink(); ?>">
								<span>Read Now


									<svg xmlns="http://www.w3.org/2000/svg" width="15.84" height="15.84" viewBox="0 0 15.84 15.84">
		                  <path id="arrow-right" d="M4,11v2H16l-5.5,5.5,1.42,1.42L19.84,12,11.92,4.08,10.5,5.5,16,11Z" transform="translate(-4 -4.08)"></path>
			            </svg>


								</span>
							</a>

					<?php else : ?>

						<div class="col-md-6 news-articles__posttitle">

							<p class="byline">Posted <span><?php echo the_date('d M Y'); ?></span>  by <span><?php echo get_the_author_nickname(); ?></span></p>

						<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif; ?>

						<?php echo the_excerpt(); ?>

						<br /><br />

						<a class="more" href="<?php echo the_permalink(); ?>">View More</a>

					<?php endif; ?>

				</div>


			</article><!-- #post-## -->

			<?php $i++; endwhile;

			the_posts_pagination(

			array (
        'mid_size' => 2,
        'prev_text' => __( '<', 'textdomain' ),
        'next_text' => __( '>', 'textdomain' ),
        ));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #primary -->


	<?php include('template-parts/content-flexi.php'); ?>


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
