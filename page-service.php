<?php
/**
 * Template name: Service
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
		<h2 class="pageTitle pageTitle--archive">SERVICE</h2>

			<?php get_template_part( 'template-parts/content-page-service', get_post_format() ); ?>

		</div><!-- / .l-main .l-main--post" -->

<?php
get_footer();
