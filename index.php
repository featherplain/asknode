<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main">
		<h2 class="pageTitle pageTitle--archive">BLOG</h2>
		<div class="row">
			<div class="postArchive">
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post(); // Start the Loop

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; // End the Loop

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div><!-- / .postArchive -->
		</div><!-- / .row -->

		<?php
		the_posts_navigation(array(
		    'prev_text' => '&lt;&lt; 前へ',
		    'next_text' => '次へ &gt;&gt;'
		)); ?>

<?php
get_footer();
