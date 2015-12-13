<?php
/**
 * The template for displaying sns share button on single page.
 *
 * @package asknode
 */
 ?>

<?php
$url = get_template_directory_uri();
?>

<div id="js-sns" class="snsShare">

	<?php // set attachment image
	if ( has_post_thumbnail() ) {
		echo '<div style="background-image: url(' . $url . the_post_thumbnail( 'thumb640x140' ) . '" class="fbLike">';
	} else {
		echo '<div style="background-image: url(' . $url . '/assets/images/img_noimage.png);" class="fbLike">';
	}
  ?>
		<div class="fbLike__overlay">
			<?php the_title( '<h3 class="fbLike__title">', '</h3>' ); ?>
			<div class="fbLike__btnWrap">
				<div class="fb-like"></div>
			</div>
		</div>
	</div><!-- / .fbLike -->
	<ul class="snsShare__list">
		<li class="snsShare__item">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="btnShare btnShare--fb js-share-fb">
				<svg role="img" width="18px" height="18px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_fb"></use>
				</svg>
				<span class="btnShare__text">シェア</span>
				<span class="js-count js-count--fb"></span>
			</a>
		</li>
		<li class="snsShare__item">
			<a href="http://b.hatena.ne.jp/add?mode=confirm&amp;url=<?php echo urlencode( get_permalink() ); ?>&amp;title=<?php echo urlencode(get_the_title() ); ?>" class="btnShare btnShare--ha js-share-ha">
				<svg role="img" width="18px" height="16px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_ha"></use>
				</svg><span class="btnShare__text">はてブ</span>
				<span class="js-count js-count--ha"></span>
			</a>
		</li>
		<li class="snsShare__item">
			<a href="https://twitter.com/intent/tweet?via=featherplain&amp;url=<?php echo urlencode( get_permalink() ); ?>&amp;text=<?php echo urlencode( get_the_title() ); ?>" class="btnShare btnShare--tw js-share-tw">
				<svg role="img" width="20px" height="16px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_tw"></use>
				</svg>
				<span class="btnShare__text">ツイート</span>
			</a>
		</li>
		<li class="snsShare__item">
			<div class="btnShare btnShare--po">
				<a href="https://getpocket.com/save" data-lang="ja" data-pocket-count="none" data-pocket-label="pocket" class="pocket-btn"></a>
			</div>
		</li>
	</ul><!-- / .snsShare__list -->
</div><!-- / .snsShare -->
