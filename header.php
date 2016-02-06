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
	<?php if ( is_front_page() ) {
		echo '<header role="banner" class="l-header l-header--home">';
	} else {
		echo '<header role="banner" class="l-header">';
	} ?>
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
    <nav id="js-nav" class="gNav">
	    <?php
				wp_nav_menu( array(
					'theme_location' => 'Global Menu',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="gMenu">%3$s</ul>',
				 ) );
			?>
    </nav><!-- / .gNav -->
  </header><!-- / .l-header -->
