<?php
/**
 * The template for displaying single-works pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */
 ?>

<?php
// Category label
$cats = get_the_category();
$catHtml = '';
foreach ( $cats as $cat) {
	$catHtml .= '<a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a>';
}
?>

<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post__header">
		<div class="post__image">

			<?php // set attachment image
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumb870x504' );
			} else {
				echo '<img src="' . get_template_directory_uri() . '/assets/images/img_noimage.png" />';
			}
			?>

		</div>
		<?php the_title( '<h1 class="post__title post__title--works"><span>', '</span></h1>' ) ?>
	</header>
	<div class="post__body">
		<div class="post__content">
			<div class="styleEditor">

				<?php
				the_content( '続きを読む' );
				wp_link_pages( array(
					'before'      => '<div class="pageLinks">',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					) );
				?>

			</div><!-- / .styleEditor -->

		</div>
	</div><!-- / .post__body -->
</article><!-- / .post -->
