<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asknode
 */

?>

	</div><!-- / .l-main -->

	<footer class="l-footer">
	  <div class="contact">
	    <div class="contact__inner">
	      <h2 class="contact__title">CONTACT</h2>
	      <p class="contact__text">制作のご依頼、記事に関するご意見等はこちらから</p><a href="/contact" role="button" class="btnContact">お問い合わせフォーム</a>
	    </div>
	  </div><!-- / .contact -->
	  <div class="insta">
	    <div class="row">
	      <h2 class="insta__title">INSTAGRAM@FAETHERPLAIN</h2>
	      <div class="instaPhotos">
	        <ul class="instaPhotos__list">
	          <li class="instaPhotos__item"><a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a></li>
	          <li class="instaPhotos__item"><a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a></li>
	          <li class="instaPhotos__item"><a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a></li>
	          <li class="instaPhotos__item"><a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a></li>
	          <li class="instaPhotos__item"><a href="#"><img src="http://placehold.jp/200x200.png" alt=""></a></li>
	        </ul>
	      </div>
	    </div>
	  </div><!-- / insta -->
	  <div class="siteinfo">
	    <div class="row">
	      <p class="siteinfo__text siteinfo__text--credit">
	      	<span>
	      		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'asknode' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'asknode' ), 'WordPress' ); ?></a>
	      	</span>
	      	<i>
	          <svg role="img" width="4px" height="4px">
	            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.symbol.svg#icon_circle"></use>
	          </svg>
	         </i>
	         <span>Theme by <a href="http://asknode.net/" rel="designer">ASKNODE</a></span>
	       </p>
	      <p class="siteinfo__text siteinfo__text--copy">(C) 2015 ASKNODE</p>
	    </div>
	  </div><!-- / .siteinfo -->
	</footer><!-- / .l-footer -->
</div><!-- / .l-container -->
<?php wp_footer(); ?>

</body>
</html>
