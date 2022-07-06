<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<article class="page-content">


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
						<h1><?php echo the_title(); ?></h1>

					</div>


				<div class="ruler"></div>

			</div>

		</div>

		<div class="container post-content">
			<div class="row">
				<div class="col-md-7">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-post', get_post_format() );

						// the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-4 offset-md-1">
					<?php //get_sidebar(); ?>


					<div class="sidebar__block">

		        <p class="title">Search</p>

		        <form role="search" method="get" class="search-form" action="/">
		          <input type="search" class="search-field" placeholder="search keywords" value="" name="s">
		    		</form>


		      </div>

					<div class="sidebar__block">
						<p class="title">Categories</p>

						<?php
							wp_nav_menu( array(
								'theme_location'  => 'menu-sidebar',
								'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								// 'container_class' => 'footnav',
								// 'container_id'    => 'navbarCollapse',
								'menu_class'      => 'sidebar_menu',
								// 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								// 'walker'          => new WP_Bootstrap_Navwalker(),
								) );
							?>

					</div>


					<div class="sidebar__block">

		        <p class="title">Popular Posts</p>

		        <div class="sidebar__popular-posts-wrapper">

		          <?php
							$args = array(
							  'post_type' => 'post',
								'posts_per_page' => 4,
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) : ?>
							    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

										<div class="row">
											<div class="col-4">
												<?php echo get_the_post_thumbnail( $post_id, 'square-small' ); ?>
											</div>

											<div class="col-8 align-self-center">

												<a class="popular-post" href="<?php echo the_permalink(); ?>">
													<?php the_title(); ?>
												</a>

												<p class="date"><?php the_date(); ?></p>


											</div>
										</div>

		              <?php endwhile; ?>
		          <?php endif; ?>
		          <?php wp_reset_postdata(); ?>

		        </div>
		      </div>


				</div>
			</div>
		</div>



	</article>

<?php
get_footer();
