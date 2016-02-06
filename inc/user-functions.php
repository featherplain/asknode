<?php
/**
 * Custom functions for user profile.
 *
 * @package asknode
 *
 */

/**
 * Adding and using custom user profile fields
 */

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) {
	echo '<h3>SNS アカウント</h3>';
	// twitter acount
	echo '<table class="form-table">';
		echo '<tr>';
			echo '<th><label for="twitter">Twitter</label></th>';
			echo '<td>';
				echo '<input type="text" name="twitter" id="twitter" value="' . esc_attr( get_the_author_meta( 'twitter', $user->ID ) ) . '" class="regular-text" /><br />';
				echo '<span class="description">Twitter のユーザー名を入力して下さい。アットマークは不要です。</span>';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	// Facebook acount
	echo '<table class="form-table">';
		echo '<tr>';
			echo '<th><label for="facebook">Facebook</label></th>';
			echo '<td>';
				echo '<input type="text" name="facebook" id="facebook" value="' . esc_attr( get_the_author_meta( 'facebook', $user->ID ) ) . '" class="regular-text" /><br />';
				echo '<span class="description">Facebook の URL を入力してください。</span>';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	// GitHub acount
	echo '<table class="form-table">';
		echo '<tr>';
			echo '<th><label for="github">GitHub</label></th>';
			echo '<td>';
				echo '<input type="text" name="github" id="github" value="' . esc_attr( get_the_author_meta( 'github', $user->ID ) ) . '" class="regular-text" /><br />';
				echo '<span class="description">GitHub のユーザー名を入力してください。</span>';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	// WordPress acount
	echo '<table class="form-table">';
		echo '<tr>';
			echo '<th><label for="wordpress">WordPress</label></th>';
			echo '<td>';
				echo '<input type="text" name="wordpress" id="wordpress" value="' . esc_attr( get_the_author_meta( 'wordpress', $user->ID ) ) . '" class="regular-text" /><br />';
				echo '<span class="description">WordPress のユーザー名を入力してください。</span>';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	// Instagram acount
	echo '<table class="form-table">';
		echo '<tr>';
			echo '<th><label for="Instagram">Instagram</label></th>';
			echo '<td>';
				echo '<input type="text" name="instagram" id="instagram" value="' . esc_attr( get_the_author_meta( 'instagram', $user->ID ) ) . '" class="regular-text" /><br />';
				echo '<span class="description">Instagram のユーザー名を入力してください。</span>';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
}
/*
 * Adding and using custom user profile fields
 */
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
function my_save_extra_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;
	update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
	update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
	update_user_meta( $user_id, 'github', $_POST['github'] );
	update_user_meta( $user_id, 'wordpress', $_POST['wordpress'] );
	update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
}
