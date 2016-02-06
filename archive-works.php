<?php
/**
 * The template for displaying archive works pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main">
		<h2 class="pageTitle">WORKS</h2>
		<div class="row">
			<div class="postArchive">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); // Start the Loop ?>

						<?php get_template_part( 'template-parts/modules/list-works' ); ?>

					<?php endwhile; // End the Loop ?>

				<?php else : ?>

					get_template_part( 'template-parts/content', 'none' );

				<?php endif; ?>
			</div><!-- / .postArchive -->
		</div><!-- / .row -->

		<?php
		the_posts_navigation(array(
		    'prev_text' => '前へ',
		    'next_text' => '次へ'
		)); ?>

	</div><!-- / .l-main -->
<?php
get_footer();
