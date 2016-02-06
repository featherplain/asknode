<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asknode
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside class="l-sidebar" role="complementary">
	<?php if ( is_single() ) : ?>
		<?php get_template_part( 'template-parts/modules/widget-author' ); ?>
	<?php endif ; ?>
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- / .l-sidebar -->
