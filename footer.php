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

	<footer class="l-footer">
	  <div class="contact">
	    <div class="contact__inner">
	      <h2 class="contact__title">CONTACT</h2>
	      <p class="contact__text">制作のご依頼、記事に関するご意見等はこちらから</p><a href="/contact" role="button" class="btnContact">お問い合わせフォーム</a>
	    </div>
	  </div><!-- / .contact -->
	  <?php // instagram
	  get_template_part( 'template-parts/modules/instagram' );
	  ?>
	  <div class="siteinfo">
	  	<div class="siteinfo__inner">
	  		<div class="siteinfo__col">
		      <p class="siteinfo__text">
		      	<span>
		      		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'asknode' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'asknode' ), 'WordPress' ); ?></a>
		      	</span>
		      	<i>
		          <svg role="img" width="4px" height="4px">
		            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.symbol.svg#icon_circle"></use>
		          </svg>
		        </i>
		        <span>Theme by <a href="https://asknode.net/" rel="designer">featherplain</a></span>
		        <i>
		          <svg role="img" width="4px" height="4px">
		            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/images/sprite.symbol.svg#icon_circle"></use>
		          </svg>
		        </i>
		        <span>&copy;&nbsp;<?php echo date( 'Y' ); ?>&nbsp;<?php bloginfo( 'name' ); ?></span>
		      </p>
	  		</div>
	  		<div class="siteinfo__col">
				  <nav class="socialNav">
				  	<?php
							wp_nav_menu( array(
								'theme_location' => 'Social Menu',
								'container'      => false,
								'items_wrap'     => '<ul id="%1$s" class="socialMenu">%3$s</ul>',
								'link_before'    => '<span class="readerOnly">',
								'link_after'     => '</span>',
							 ) );
						?>
				  </nav>
	  		</div>
	  	</div><!-- / .siteinfo__inner -->
	  </div><!-- / .siteinfo -->
	</footer><!-- / .l-footer -->
</div><!-- / .l-container -->
<?php wp_footer(); ?>

</body>
</html>
