<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<article class="page-case-study">


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
						<p class="page-subtitle">Case Study</p>
						<h1><?php echo the_title(); ?></h1>
					</div>

					<div class="ruler"></div>

			</div>

		</div>

		<div class="post-img wow fadeIn">
				<?php echo get_the_post_thumbnail(); ?>
		</div>



		<div class="container post-content">

			<div class="page-content__share row no-gutters">

				<div class="col-md-12 page-content__share__social">

					<p>Share This</p>

					<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">

						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
							<path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"></path>
						</svg>

					</a>


					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">

						<svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14">
						  <path id="facebook" d="M7.75,4.667H6V7H7.75v7h2.917V7h2.125L13,4.667H10.667V3.694c0-.557.112-.778.65-.778H13V0H10.779C8.681,0,7.75.923,7.75,2.692Z" transform="translate(-6)"/>
						</svg>



					</a>

					<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_title(); ?> - <?php echo the_permalink(); ?>" target="_blank">

						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							<path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"></path>
						</svg>

					</a>

						<a href="mailto:?subject=<?php echo the_title(); ?> - <?php echo the_permalink(); ?>" title="Share by Email">

							<svg xmlns="http://www.w3.org/2000/svg" width="18.667" height="14" viewBox="0 0 18.667 14">
							  <path id="email" d="M9.333,10.555.012,3H18.655Zm0,2L0,4.993V17H18.667V4.993Z" transform="translate(0 -3)"/>
							</svg>



					</a>


				</div>

			</div>


			<div class="row">
				<div class="col-md-7">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-cs', get_post_format() );

						// the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-4 offset-md-1 ">

					<div class="case-study__sidebar">

						<?php

						//acf fields

						$cs_project_year = get_field('cs_project_year');
						$cs_project_client = get_field('cs_project_client');
						$cs_project_location = get_field('cs_project_location');
						$cs_products_used = get_field('cs_products_used');

						$cs_the_results = get_field('cs_the_results');

						$cs_gallery = get_field('cs_gallery');


						 ?>

						 <p class="title">Project Info</p>

						 <?php if ($cs_project_year): ?>
						 	<p>Year: <?php echo  $cs_project_year ?></p>
						 <?php endif; ?>

						 <?php if ($cs_project_client): ?>
						 	 <p>Client: <?php echo  $cs_project_client ?></p>
						 <?php endif; ?>

						 <?php if ($cs_project_location): ?>
						 	<p>Location: <?php echo  $cs_project_location ?></p>
						 <?php endif; ?>

						 <?php if ($cs_the_results): ?>
							 <p class="title results">The Results</p>

	  					 <?php echo $cs_the_results ?>
						 <?php endif; ?>

						 <?php if ($cs_the_results): ?>
						 	<p class="title">Lighting Delivered:</p>
						 <?php endif; ?>

						 <?php if ($cs_products_used): ?>
							 <p class="title">Products Used</p>

	  					 <?php

	  						if( $cs_products_used ): ?>
	  						    <?php foreach( $cs_products_used as $post ):

	  						        // Setup this post for WP functions (variable must be named $post).
	  						        setup_postdata($post); ?>

	  						            <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>

	  						    <?php endforeach; ?>
	  						    <?php
	  						    // Reset the global post object so that the rest of the page works correctly.
	  						    wp_reset_postdata(); ?>
	  						<?php endif; ?>
						 <?php endif; ?>

					</div>








				</div>
			</div>
		</div>


		<div class="case-study_gallery">







			<?php

			$images = get_field('cs_gallery');


			 ?>

			 <?php
					if( $images ): ?>
						 <div class="swiper _js_cs-gallery">
			 	      <div class="swiper-wrapper">

								<?php foreach( $images as $image ): ?>

			 	        	<div class="swiper-slide">

										<a class="fancybox" rel="group" href="<?php echo esc_url($image['url']); ?>">
												 <img src="<?php echo esc_url($image['sizes']['tax-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</a>

									</div>

								<?php endforeach; ?>

			 	      </div>

							<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>

			 	    </div>
					<?php endif; ?>



			 <?php
					if( !$images ): ?>
					    <div class="row no-gutters">
					        <?php foreach( $images as $image ): ?>
					            <div class="col-md-3">
												<a class="fancybox" rel="group" href="<?php echo esc_url($image['url']); ?>">
				                     <img src="<?php echo esc_url($image['sizes']['tax-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					                </a>
					                <p><?php echo esc_html($image['caption']); ?></p>
					            </div>
					        <?php endforeach; ?>
					    </div>
					<?php endif; ?>

		</div>



	</article>

<?php
get_footer();
