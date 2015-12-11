<?php
/**
 * The template for displaying custom post type "WORKS".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main l-main--post">
	<h2 class="pageTitle">WORKS</h2>
		<div class="l-primary">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single-works', get_post_format() );

			the_post_navigation( '%title', '%title' );


		endwhile; // End of the loop.
		?>

	</div><!-- /. l-primary-->

<?php
get_footer();
