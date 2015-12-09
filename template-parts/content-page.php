<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */
?>

<article id="post-<?php the_ID(); ?>" class="post">
  <header class="post__header">
    <div class="post__image">

    	<?php // set attachment image
    	if ( has_post_thumbnail() ) :
    		the_post_thumbnail( 'thumb870x504' );
    	endif;
    	?>

    </div>
  </header>
  <div class="post__body">
    <?php the_title( '<h1 class="post__title post__title--center">', '</h1>' ) ?>
    <i class="post__separator">
      <svg role="img" width="38px" height="6px">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.symbol.svg#icon_dots"></use>
      </svg>
     </i>
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
    </div><!-- / .post__content -->
  </div><!-- / .post__body -->
</article><!-- / .post -->
