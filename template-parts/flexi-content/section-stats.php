<section class="container stats">
  <div class="row">
    <div class="col-12">

      <div class="stats__header">

        <h2>

          <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55">
            <g id="Icon" transform="translate(-373 -2702)">
              <g id="icon-check-white">
                <g id="icon-check-white-2" data-name="icon-check-white" transform="translate(373 2702)">
                  <g id="Group_11" data-name="Group 11">
                    <g id="check-circle-outline">
                      <path id="Path_98" data-name="Path 98" d="M16.225,22.275l-3.85,3.85L24.75,38.5,52.25,11,48.4,7.15,24.75,30.8ZM49.5,27.5a22,22,0,1,1-22-22,21.446,21.446,0,0,1,6.05.825l4.4-4.4A33.472,33.472,0,0,0,27.5,0,27.5,27.5,0,1,0,55,27.5Z" fill="#fff"/>
                    </g>
                  </g>
                </g>
                <path id="Color_Overlay" data-name="Color Overlay" d="M373,2729.5a27.581,27.581,0,0,1,27.5-27.5,33.477,33.477,0,0,1,10.45,1.925l-4.4,4.4a21.454,21.454,0,0,0-6.05-.825,22,22,0,1,0,22,22H428a27.5,27.5,0,0,1-55,0Zm12.375-1.375,3.85-3.85,8.525,8.525,23.65-23.65,3.85,3.85-27.5,27.5Z" fill="#f6c93b"/>
              </g>
            </g>
          </svg>


          <?php the_sub_field('section_title'); ?>
        </h2>

      </div>


    </div>
  </div>
  <?php if ( have_rows('statistics') ): ?>
    <div class="row">
      <?php while ( have_rows('statistics') ) : the_row(); ?>
        <div class="col-6 col-lg-3 stats__wrap">
          <p class="stat count"><?php the_sub_field('statistic'); ?></p>
          <p><?php the_sub_field('statistic_details'); ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>
