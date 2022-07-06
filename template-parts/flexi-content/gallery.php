<div class="news-masonry__container">

<section class="webpage__masonry masonry">

		<?php if ( have_rows('gallery') ): ?>

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

				<?php $i = 1; while ( have_rows('gallery') ) : the_row();

				$post_date = get_sub_field('gallery_item_year');
	      $services = get_sub_field('gallery_item_services');

	      $field = get_sub_field( 'gallery_item_work_type' );

				?>

				<div class="masonry-item gallery-item <?php echo "__js_" . implode( ' __js_', $field ); ?>">




						<?php
							$image = get_sub_field('gallery_item_image');
							if( $image ):

							    // Image variables.
							    $url = $image['url'];
							    $title = $image['title'];
							    $alt = $image['alt'];
							    $caption = $image['caption'];

							    // Thumbnail size attributes.
							    $size = 'tax-thumb';
									$sizeM = 'large';
							    $thumb = $image['sizes'][ $size ];
									$medthumb = $image['sizes'][ $sizeM ];
							    $width = $image['sizes'][ $size . '-width' ];
							    $height = $image['sizes'][ $size . '-height' ]; ?>

									<a class="fancybox" rel="group" href="<?php echo esc_url($medthumb); ?>">

					        	<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?> <?php echo get_sub_field('gallery_item_name'); ?>" loading="lazy" />

									</a>

                  <?php
                  $featured_post = get_sub_field('gallery_item_product');
                  if( $featured_post ): ?>


                  <!-- Button trigger modal -->
                  <a class="open-modal" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i; ?>">

                    <svg xmlns="http://www.w3.org/2000/svg" width="76.72" height="76.72" viewBox="0 0 76.72 76.72">
                      <g id="Group_13" data-name="Group 13" transform="translate(-1696.64 -1121.64)">
                        <g id="arrow_copy_2" data-name="arrow copy 2" transform="translate(-57 -55)">
                          <circle id="Ellipse_1_copy" data-name="Ellipse 1 copy" cx="38.36" cy="38.36" r="38.36" transform="translate(1753.64 1176.64)" fill="#fff" opacity="0.451"/>
                          <circle id="Ellipse_1" data-name="Ellipse 1" cx="27" cy="27" r="27" transform="translate(1765 1188)" fill="#fff"/>
                        </g>
                        <path id="arrow-right-thin" d="M21.883,12l-7.527,6.235L15,19l9-7.521L15,4l-.645.764L21.884,11H0v1H21.883Z" transform="translate(1723 1149)" stroke="#000" stroke-width="1" fill-rule="evenodd"/>
                      </g>
                    </svg>

                  </a>

                  <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body row">

                            <div class="col-md-6">
                              <?php echo get_the_post_thumbnail($featured_post); ?>
                            </div>
                            <div class="col-md-6">
                                <h3><?php echo esc_html( $featured_post->post_title ); ?></h3>
                                <?php echo esc_html( $featured_post->post_excerpt ); ?>

                                <a class="more" href="<?php echo get_permalink( $featured_post ) ?>">
                                  View Product <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"></path></svg>
                                </a>
                            </div>



                          </div>
                        </div>
                      </div>
                    </div>

                    <?php endif; ?>


							<?php endif; ?>


				</div>



			<?php $i++; endwhile; ?>

		</div>

		<?php endif; ?>

		<!-- <a class="works__more more-btn" href="#">
		<span class="more-btn__text">more</span>
		</a> -->
		<!-- </div> -->
		</section>
</div>
