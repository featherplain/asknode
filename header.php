<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asknode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="l-container">
  <header role="banner" class="l-header">
  	<div class="siteBrand">
	    <h1 class="siteBrand__title">
	    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
	    </h1>
	    <?php // site description
  		$description = get_bloginfo( 'description', 'display' );
  		echo '<p class="siteBrand__description">' . $description /* WPCS: xss ok. */ . '</p>' ;
	     ?>
  	</div>
    <a href="#" class="btnMenuTrigger"></a>
    <nav id="gNav" class="gNav">
      <ul class="gMenu">
        <li class="gMenu__item"><a href="/about">ABOUT</a></li>
        <li class="gMenu__item gMenu__item--has-child"><a href="/service">SERVICE</a>
          <ul class="subMenu js-dropdown">
            <li><a href="/service/design/">DESIGN</a></li>
            <li><a href="/service/coding/">CODING</a></li>
            <li><a href="/service/wordpress/">WordPress</a></li>
            <li><a href="/service/writing/">WRITING</a></li>
          </ul>
        </li>
        <li class="gMenu__item"><a href="/works/">WORKS</a></li>
        <li class="gMenu__item"><a href="/contact/">CONTACT</a></li>
        <li class="gMenu__item"><a href="/blog/">BLOG</a></li>
        <li class="gMenu__item">
          <ul class="socialMenu">
            <li class="socialMenu__item"><a href="https://facebook.com/megumi.hano/" target="_blank" title="Facebook"><span class="readerOnly">Facebook</span></a></li>
            <li class="socialMenu__item"><a href="https://github.com/featherplain/" target="_blank" title="GitHub"><span class="readerOnly">GitHub</span></a></li>
          </ul>
        </li>
      </ul>
    </nav><!-- / .gNav -->
  </header><!-- / .l-header -->
