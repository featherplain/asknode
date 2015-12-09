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

$value_client = get_post_meta( $post->ID, 'client', true );
$value_url = get_post_meta( $post->ID, 'url', true );
$value_code = get_post_meta( $post->ID, 'code', true );
$value_none = '<dd class="worksMeta__value">' . esc_html( '-' ) . '</dd>';

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

				<?php the_content( '続きを読む' ); ?>

				<dl class="worksMeta">
          <dt class="worksMeta__key">scope</dt>
          <dd class="worksMeta__value"><a href="#" class="tagScope">Planning</a><a href="#" class="tagScope">Design</a><a href="#" class="tagScope">Coding</a><a href="#" class="tagScope">WordPress</a></dd>
          <dt class="worksMeta__key">client</dt>
          <?php
          if ( $value_client ) {
						echo '<dd class="worksMeta__value">' . $value_client . '</dd>';
          } else {
          	echo $value_none;
          }?>
          <dt class="worksMeta__key">url</dt>
          <?php if ( $value_url ) {
						echo '<dd class="worksMeta__value worksMeta__value--en"><a href="' . esc_url( $value_url ) . '" target="_blank">' . esc_html( $value_url ) . '</a></dd>';
          } else {
          	echo $value_none;
          }?>
          <dt class="worksMeta__key">code</dt>
          <?php if ( $value_code ) {
						echo '<dd class="worksMeta__value worksMeta__value--en"><a href="' . esc_url( $value_code ) . '" target="_blank">' . esc_html( $value_code ) . '</a></dd>';
          } else {
          	echo $value_none;
          }?>
        </dl>
        <?php
        if ( !empty( $value_url ) ):
        	echo '<a href="' . esc_url( $value_url ) . '" class="btnExternal btnExternal--works" target="_blank">' . esc_html( 'Web サイトを見る' ) . '</a>';
        endif;
         ?>
				<?php wp_link_pages( array(
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
