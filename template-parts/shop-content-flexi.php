<?php if( have_rows('shop-flexi-content', 'option') ): ?>
 <?php while( have_rows('shop-flexi-content', 'option') ): the_row(); ?>

   <?php if( get_row_layout() == 'product_categories' ): ?>

     <?php include(locate_template("template-parts/shop-flexi-content/section-prod-cat.php")); ?>

   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
