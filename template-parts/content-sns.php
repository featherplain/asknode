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

<div class="snsShare">

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
	</div>
	<ul class="snsShare__list">
		<li class="snsShare__item">
			<a href="#" class="btnShare btnShare--fb">
				<svg role="img" width="18px" height="18px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_fb"></use>
				</svg>
				<span class="btnShare__text">シェア</span>
				<span class="js-count js-count--fb">1000</span>
			</a>
		</li>
		<li class="snsShare__item">
			<a href="#" class="btnShare btnShare--ha">
				<svg role="img" width="18px" height="16px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_ha"></use>
				</svg><span class="btnShare__text">はてブ</span>
				<span class="js-count js-count--ha">1000</span>
			</a>
		</li>
		<li class="snsShare__item">
			<a href="#" class="btnShare btnShare--tw">
				<svg role="img" width="20px" height="16px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_tw"></use>
				</svg>
				<span class="btnShare__text">ツイート</span>
			</a>
		</li>
		<li class="snsShare__item">
			<a href="#" class="btnShare btnShare--po">
				<svg role="img" width="18px" height="16px" class="btnShare__icon">
					<use xlink:href="<?php echo $url;?>/assets/images/sprite.symbol.svg#icon_po"></use>
				</svg><span class="btnShare__text">後で読む</span>
			</a>
		</li>
	</ul>
</div><!-- / .snsShare -->
