<?php
/**
 * Template name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */

get_header(); ?>

		<div class="l-main l-main--post">
			<h2 class="pageTitle pageTitle--post">About</h2>
			<div class="l-single-column">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div><!-- / .l-single-column -->
		</div><!-- / .l-main .l-main--post" -->

<?php
get_footer();
