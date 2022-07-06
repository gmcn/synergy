<div class="content-row">

    <?php if ( have_rows('content_blocks') ): ?>
      <div class="row">
        <?php $i = 1; while ( have_rows('content_blocks') ) : the_row();

        $content_block_title = get_sub_field('content_block_title');
        $content_block_copy = get_sub_field('content_block_copy');

        ?>
          <div class="col-sm-6 col-xl-3 content-row__block wow <?php if ($i % 2) : ?>fadeInDown<?php else: ?>fadeInUp<?php endif; ?>">

            <div class="content-row__block__wrapper">
              <svg class="pattern" x="0" y="0" width="100%" height="100%">
            		  <defs>
            		     <pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
        		          <path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"></path>
            		    </pattern>
            		  </defs>
            		  <rect x="1" y="1" width="100%" height="100%" stroke="#ffffff" stroke-width="2" fill="url(#diagonalHatch)"></rect>
            		</svg>

              <h2><?php echo $content_block_title ?></h2>
              <?php echo $content_block_copy ?>
            </div>

          </div>
        <?php $i++; endwhile; ?>
      </div>
    <?php endif; ?>

</div>
