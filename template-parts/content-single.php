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
    <div class="post__image">

    	<?php // set attachment image
    	if ( has_post_thumbnail() ) {
    		the_post_thumbnail( 'thumb870x504' );
    	} else {
    		echo '<img src="' . get_template_directory_uri() . '/assets/images/img_noimage.png" />';
    	}
    	?>

    </div>
    <div class="post__meta">
      <time><?php the_time( get_option( 'date_format' ) ); ?></time>
      <i>
        <svg role="img" width="6px" height="6px">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.symbol.svg#icon_circle"></use>
        </svg>
      </i>
      <span> <?php echo $catHtml; ?> </span>
     	<i>
        <svg role="img" width="6px" height="6px">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.symbol.svg#icon_circle"></use>
        </svg>
      </i>
      <span>by <?php echo get_the_author_meta( 'display_name' ); ?></span>
    </div>
  </header>
  <div class="post__body">
    <?php the_title( '<h1 class="post__title">', '</h1>' ) ?>
    <div class="post__excerpt">
      <?php the_excerpt(); ?>
    </div>
    <i class="post__separator">
      <svg role="img" width="38px" height="6px">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.symbol.svg#icon_dots"></use>
      </svg>
     </i>
    <div class="post__content">
      <div class="styleEditor">

				<?php the_content( '続きを読む' ); ?>

      </div><!-- / .styleEditor -->

			<?php get_template_part( 'template-parts/content-sns' ); ?>

    </div>
  </div><!-- / .post__body -->
</article><!-- / .post -->
