<?php
/**
 * Template part for displaying posts.
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

	<article id="post-<?php the_ID(); ?>" class="post post--archive">
    <div class="post__meta">
      <time><?php the_time( get_option( 'date_format' ) ); ?></time>
      <span><?php echo $catHtml; ?></span>
    </div>
  	<h1 class="post__title">
  		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
  	</h1>
    <div class="post__excerpt">
      <?php the_excerpt(); ?>
    </div>
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post__image">
				<?php the_post_thumbnail( 'thumb870x504' ); ?>
			</div>
		<?php endif ; ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="btnGhost btnGhost--more">続きを読む</a>
	</article><!-- / .post -->
