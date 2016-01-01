<?php
/**
 * The template for displaying works lisrr.
 *
 * @package asknode
 */
?>

<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="postArchive__link">
	<article id="post-<?php the_ID(); ?>" class="postArchive__article postARchive__article--works">
    <div class="postArchive__thumb">

			<?php // post thumbnail
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumb308x180' );
			}
			else {
				echo '<img src="' . get_template_directory_uri() . '/assets/images/thumb_noimage.png" />';
			}
			?>

    </div>
    <div class="postArchive__content">
      <h3 class="postArchive__title"><?php $title = mb_substr( $post->post_title, 0, 56); echo $title ;?></h3>
    </div>
	</article>
</a>
