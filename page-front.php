<?php
/**
 * Template Name: Front Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package asknode
 */
get_header( 'home' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="mainImg">
    <div class="mainImg__inner">
      <h1 class="mainImg__title"><?php bloginfo( 'name' ); ?></h1>
      <p class="mainImg__description"><?php bloginfo( 'description' ); ?></p>
    </div>
  </div>
  <div class="topService">
    <div class="row">
      <h2 class="topService__title">SERVICE</h2>
      <?php get_template_part( 'template-parts/content-page-service', get_post_format() ); ?>
    </div>
  </div>
  <div class="topWorks">
    <h2 class="topWorks__title"><span class="topWorks__title__inner">WORKS</span><a href="/works/">&gt;&gt; すべて見る</a></h2>
    <div class="featuredWork">
      <div class="featuredWork__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_amethyst.png" alt=""></div>
      <div class="featuredWork__content">
        <h3 class="featuredWork__title"><span class="featuredWork__title__inner">Amethyst</span><a href="/works/amethyst/">&gt;&gt; くわしく</a></h3>
        <p class="featuredWork__excerpt">WordPress.org の公式テーマディレクトリ掲載テーマとして申請中のテーマです。すべてのデバイスにおける可読性と視認性を重視した、シンプルなテーマです。CSS フレームワークの Foundation を採用し、 Sass によるカスタマイズも簡単に。</p><a href="http://amethyst.asknode.net/" target="_blank" class="btnExternal">デモサイトをみる</a>
      </div>
    </div>
    <div class="row">

      <?php
				$args = array( 'post_type' => 'works', 'posts_per_page' => 6 );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) :

					echo '<div class="postArchive postArchive--top">';

					while ( $loop->have_posts() ) : $loop->the_post(); // Start the Loop

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; // End the Loop

					echo '</div>';

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

    </div>
  </div><!-- / .topWorks -->

<?php endwhile; ?>

<?php
get_footer();
