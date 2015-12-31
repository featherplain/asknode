<?php
/**
 * The template for displaying single pages.
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
    <div class="post__meta">
      <time><?php the_time( get_option( 'date_format' ) ); ?></time>
      <span><?php echo $catHtml; ?></span>
    </div>
    <?php the_title( '<h1 class="post__title">', '</h1>' ) ?>
    <div class="post__excerpt">
      <?php the_excerpt(); ?>
    </div>
	  <i class="post__separator">
	    <svg role="img" width="38px" height="6px">
	      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.symbol.svg#icon_dots"></use>
	    </svg>
	  </i>
  </header>
	<?php if ( has_post_thumbnail() ): ?>
		<div class="post__image">
			<?php the_post_thumbnail( 'thumb870x504' ); ?>
		</div>
	<?php endif ; ?>
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
