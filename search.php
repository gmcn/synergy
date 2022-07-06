<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Starting_Theme
 */

get_header(); ?>



		<?php
		if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'starting-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div><!-- .page-header -->

			<div class="container" style="clear: both">

				<div class="row">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_pagination( array(
			   'mid_size' => 2,
			   'prev_text' => __( 'Previous Page', 'textdomain' ),
			   'next_text' => __( 'Next Page', 'textdomain' ),
			   'screen_reader_text' => ( '' )
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>

		</div>

<?php
get_footer();
