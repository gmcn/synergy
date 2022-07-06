<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */


 $cs_the_project = get_field('cs_the_project');
 $cs_the_challenge = get_field('cs_the_challenge');
 $cs_the_solution = get_field('cs_the_solution');
 $cs_testimonal = get_field('cs_testimonal');
 $cs_testimonal_byline = get_field('cs_testimonal_byline');
 $cs_testimonal_author_title = get_field('cs_testimonal_author_title');

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

			<?php the_content(); ?>

			<?php if ($cs_the_project): ?>
				<h2>The Project</h2>
				<?php echo $cs_the_project ?>
			<?php endif; ?>

			<?php if ($cs_the_challenge): ?>
				<h2> The Challenge</h2>
				<?php echo $cs_the_challenge ?>
			<?php endif; ?>

			<?php if ($cs_the_solution): ?>
				<h2>The Solution</h2>
				<?php echo $cs_the_solution ?>
			<?php endif; ?>

			<?php if ($cs_testimonal): ?>

				<h2> The Clients View</h2>

				<div class="section-testimonials__testimonial">

	        <p><?php echo $cs_testimonal ?></p>

	        <!-- <a href="http://synergy.local/case-study/area-design-studio/">View Project

	          <svg xmlns="http://www.w3.org/2000/svg" width="15.84" height="15.84" viewBox="0 0 15.84 15.84">
	            <path id="arrow-right" d="M4,11v2H16l-5.5,5.5,1.42,1.42L19.84,12,11.92,4.08,10.5,5.5,16,11Z" transform="translate(-4 -4.08)"></path>
	          </svg>


	        </a> -->

	      </div>

				<div class="section-testimonials__details">

					<div class="img_wrap" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>)">
					</div>


	        <p class="testimonal_byline"><?php echo $cs_testimonal_byline; ?></p>
	        <p><?php echo $cs_testimonal_author_title ?></p>
	      </div>
			<?php endif; ?>





			<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starting-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'starting-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div><!-- #post-## -->
