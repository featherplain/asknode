<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package asknode
 */

get_header(); ?>

	<div class="l-main">

		<h2 class="pageTitle pageTitle--404">404</h2>
		<div class="l-single-column">
			<div class="notFound">
				<div class="styleEditor">
					<h2>ページが見つかりませんでした。</h2>
					<h3>お探しのページはいずれかの理由により見つかりませんでした。</h3>
					<ol>
						<li>ページの URL が変更された可能性があります。</li>
						<li>ページが削除された可能性があります。</li>
						<li>ページの URL をミスタイプしている可能性があります。入力した URL が正しいかご確認ください。</li>
					</ol>
					<h3>検索をためす</h3>
					<?php the_widget( 'WP_Widget_Search' ); ?>

					<h3>ホームへ戻る</h3>
					<a class="btnGhost btnGhost--fullWidth" href="./">ホームへ</a>
				</div>
			</div><!-- / .notFound -->

		</div><!-- / .l-single-column -->
	</div><!-- / .l-main -->

<?php
get_footer();
