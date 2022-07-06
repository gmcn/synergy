<?php if( have_rows('flex-content') ): ?>
 <?php while( have_rows('flex-content') ): the_row(); ?>

   <?php if( get_row_layout() == 'hero_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/hero-slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_about' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-about.php")); ?>

   <?php elseif( get_row_layout() == 'full_width_image' ): ?>

     <?php include(locate_template("template-parts/flexi-content/full-width-image.php")); ?>

   <?php elseif( get_row_layout() == 'section_testimonials' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-testimonials.php")); ?>

   <?php elseif( get_row_layout() == 'section_case_study' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-cs.php")); ?>

   <?php elseif( get_row_layout() == 'latest_news_grid' ): ?>

     <?php include(locate_template("template-parts/flexi-content/latest-news-grid.php")); ?>

   <?php elseif( get_row_layout() == 'section_statistics' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-stats.php")); ?>

   <?php elseif( get_row_layout() == 'content_block_usp' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-content-usp.php")); ?>

   <?php elseif( get_row_layout() == 'content_blocks_3' ): ?>

     <?php include(locate_template("template-parts/flexi-content/content-row-3.php")); ?>

   <?php elseif( get_row_layout() == 'content_blocks_4' ): ?>

     <?php include(locate_template("template-parts/flexi-content/content-row-4.php")); ?>

   <?php elseif( get_row_layout() == 'product_categories' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-prod-cat.php")); ?>

   <?php elseif( get_row_layout() == 'section_clients' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-clients.php")); ?>

   <?php elseif( get_row_layout() == 'section_cta' ): ?>

     <?php include(locate_template("template-parts/flexi-content/cta-bar.php")); ?>

   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
