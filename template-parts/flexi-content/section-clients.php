<section class="clients">

  <svg class="pattern" x="0" y="0" width="100%" height="100%">
    <defs>
       <pattern id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="8" patternTransform="rotate(-45 2 2)">
            <path d="M -1,2 l 6,0" stroke="#000000" stroke-width=".25"/>
      </pattern>
    </defs>
    <rect x="1" y="1" width="100%" height="100%" stroke= "#ffffff" stroke-width="2" fill="url(#diagonalHatch)" />
  </svg>

  <div class="container">

    <?php if ( have_rows('clients') ): ?>
      <div class="row">

        <?php while ( have_rows('clients') ) : the_row();

          $sectionClientLogo = get_sub_field('section-client_logo');

        ?>

          <div class="col-6 col-md-4 col-lg-2 align-self-center clients_brand">
            <img src="<?php echo $sectionClientLogo ?>" alt="Client">
          </div>

        <?php endwhile; ?>

      </div>
    <?php endif; ?>


  </div>

</section>
