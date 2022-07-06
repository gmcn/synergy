<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3'); ?>>


	<?php

	$thumbnail = get_the_post_thumbnail();


	 ?>


<?php if ($thumbnail) : ?>
	<a href="<?php echo the_permalink() ?>">
		<?php echo get_the_post_thumbnail($post->ID, 'tax-thumb'); ?>
	</a>
	<?php else: ?>
		<a href="<?php echo the_permalink() ?>">
			<img width="300" height="300" src="/wp-content/uploads/woocommerce-placeholder-300x300.png" class="woocommerce-placeholder wp-post-image" alt="Placeholder" loading="lazy" srcset="/wp-content/uploads/woocommerce-placeholder-300x300.png 300w, /wp-content/uploads/woocommerce-placeholder-100x100.png 100w, /wp-content/uploads/woocommerce-placeholder-600x600.png 600w, /wp-content/uploads/woocommerce-placeholder-1024x1024.png 1024w, /wp-content/uploads/woocommerce-placeholder-150x150.png 150w, /wp-content/uploads/woocommerce-placeholder-768x768.png 768w, /wp-content/uploads/woocommerce-placeholder-550x550.png 550w, /wp-content/uploads/woocommerce-placeholder-420x420.png 420w, /wp-content/uploads/woocommerce-placeholder.png 1200w" sizes="(max-width: 300px) 100vw, 300px">
		</a>
<?php endif ?>



		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<div class="entry-summary">
		<?php //the_excerpt(); ?>
	</div><!-- .entry-summary -->


</article><!-- #post-## -->
