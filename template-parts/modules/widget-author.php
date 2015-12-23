<?php
/**
 * @package asknode
 */

?>
<div class="widget">
	<h2 class="widget__title">Written by</h2>
	<div class="widgetAuthor">
		<div class="widgetAuthor__thumb"><?php echo get_avatar( get_the_author_meta( 'ID' ), 81 ); ?></div>
		<p class="widgetAuthor__user"><?php the_author_meta( 'display_name' ); ?></p>
		<p class="widgetAuthor__description"><?php the_author_meta( 'description' ); ?></p>
		<ul class="inlineList socialLinks">
			<!-- <li> -->
				<?php // twitter

					// $icon = '';

					// if ( get_the_author_meta( 'twitter' ) ) {

					// 	$html = '<a href="https://twitter.com/' . get_the_author_meta( 'twitter' ) . '" target="_blank">';
					// 	$html .= $icon;
					// 	$html .= '</a>';

					// } else {
					// 	$html = '<span>' . $icon . '</span>';
					// }
					// echo $html;
				 ?>
			<!-- </li> -->
			<li>
				<?php // facebook

					$icon = '';

					if ( get_the_author_meta( 'facebook' ) ) {

						$html = '<a href="' . get_the_author_meta( 'facebook' ) . '" target="_blank">';
						$html .= $icon;
						$html .= '</a>';

					} else {
						$html = '<span>' . $icon . '</span>';
					}
					echo $html;
				 ?>
			</li>
			<li>
				<?php // GitHub

					$icon = '';

					if ( get_the_author_meta( 'github' ) ) {

						$html = '<a href="https://github.com/' . get_the_author_meta( 'github' ) . '" target="_blank">';
						$html .= $icon;
						$html .= '</a>';

					} else {
						$html = '<span>' . $icon . '</span>';
					}
					echo $html;
				 ?>
			</li>
			<!-- <li> -->
				<?php // Instagram

					// $icon = '';

					// if ( get_the_author_meta( 'instagram' ) ) {

					// 	$html = '<a href="https://instagram.com/' . get_the_author_meta( 'instagram' ) . '" target="_blank">';
					// 	$html .= $icon;
					// 	$html .= '</a>';

					// } else {
					// 	$html = '<span>' . $icon . '</span>';
					// }
					// echo $html;
				 ?>
			<!-- </li> -->
			<!-- <li> -->
				<?php // WordPress

					// $icon = '';

					// if ( get_the_author_meta( 'wordpress' ) ) {

					// 	$html = '<a href="https://profiles.wordpress.org/' . get_the_author_meta( 'wordpress' ) . '" target="_blank">';
					// 	$html .= $icon;
					// 	$html .= '</a>';

					// } else {
					// 	$html = '<span>' . $icon . '</span>';
					// }
					// echo $html;
				 ?>
			<!-- </li> -->
			<li><a href="https://profiles.wordpress.org/featherplain/"><span class="readerOnly">WordPress</span></a></li>
			<!-- <li><a href="https://instagram.com/featherplain/"><span class="readerOnly">Instagram</span></a></li> -->
		</ul>
		<a href="/about/" class="btnFull">About</a>
	</div>
</div>
