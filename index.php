<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main l-main--post">
	<h2 class="pageTitle">Blog</h2>


		<div class="l-primary">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- /. l-primary -->

		<?php get_sidebar(); ?>

	</div><!-- / .l-main .l-main--post" -->

<?php
get_footer();
