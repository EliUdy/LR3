<?php
/**
 * Template Name: Full Width Page
 */

get_header(); ?>

<div id="primary" class="content-area full-width">

	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'template-parts/content', 'full-width' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			// End of the loop.
		endwhile;
		?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
