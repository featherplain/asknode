<?php
/**
 * The template for displaying instagram timeline.
 *
 * @link https://www.instagram.com/developer/
 *
 * @package asknode
 */

?>

<?php

$photos = array();
$user_id = 224721521;
$token = '224721521.1a7abd8.4a9e503b17974cf383c1667475be7d48';
$photos_api_url = 'https://api.instagram.com/v1/users/' . $user_id . '/media/recent?access_token=' . $token . '&quot;&amp;count=8&quot';
$photos_data = json_decode( @file_get_contents ( $photos_api_url ) );

 ?>


<div class="insta">
  <div class="instaPhotos">
    <ul class="instaPhotos__list">
    	<?php
			foreach ($photos_data->data as $photo) {
			  echo '<li class="instaPhotos__item"><img class="instaPhotos__thumb" src="' . $photo->images->standard_resolution->url . '" alt=""></li>';
			}
    	?>
    </ul>
  </div>
</div><!-- / insta -->
