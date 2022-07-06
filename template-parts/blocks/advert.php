
<div class="block__advert">





      <?php if ( have_rows('advert') ): ?>

          <?php while ( have_rows('advert') ) : the_row(); ?>
            <div class="row">
              <div class="col-md-12">
                <h2><?php the_sub_field('advert_row_heading'); ?></h2>
                <p><?php the_sub_field('advert_row_copy'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>

      <?php endif; ?>




</div>
