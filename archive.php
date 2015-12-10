<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main">
		<?php if ( is_post_type_archive( 'works' ) ) {
			echo '<h2 class="pageTitle pageTitle--archive">WORKS</h2>';
			} else {
			echo '<h2 class="pageTitle pageTitle--archive">BLOG</h2>';
		}?>
		<p class="archiveTitle">
			<span class="archiveTitle__inner"><?php custom_archive_title(); ?></span>
		</p>

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
		    'prev_text' => '前へ',
		    'next_text' => '次へ'
		)); ?>

<?php
get_footer();
