<?php
/**
 * The header for our theme
 * @package nova4
 */

	//Theme Settings Page
	$sitename = get_bloginfo( 'name' );
	$sitelogo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	$altlogo = get_theme_mod( 'nova_mobile_logo', '' );
	$fallbacklogo = get_stylesheet_directory_uri() . '/images/fallback-logo.png';

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nova' ); ?></a>

	<header id="zone__header" class="zone">

		<?php //get fancy search from NOVA if needed; ?>

		<!-- ------------ hamburger button ------------ -->
		<div id="hamburger-button">
			<div class="bar bar1"></div>
			<div class="bar bar2"></div>
			<div class="bar bar3"></div>
		</div>

		<!-- ------------ offscreen mobile menu ------------ -->
		<?php wp_nav_menu( $args = array(
			'menu'=> '3',
			'menu_id' => 'id-menu--mobile',
			'menu_class' => 'offscreen-menu',
			'container' => 'nav',
			'container_class' => 'offscreen-menu-container',
		)); ?>

		<div id="section__brand" class="wrap-outer">
			<div class="wrap-inner container">
				<a href="/" class="site-logo">
					<!-- ------------ logo ------------ -->
					<img src="<?php echo ($sitelogo ? $sitelogo : $fallbacklogo);?>">
				</a>
			</div><!-- wrap-inner.container -->
		</div><!-- wrap-outer -->

		<!-- ------------ navigation ------------ -->
		<div id="section__nav" class="section">
			<?php wp_nav_menu(array(
				'menu'=> '2',
				'menu_id' => 'id_menu__main',
				'menu_class' => 'primary-menu',
				'container_class' => 'container',
				'fallback_cb' => false
			)); ?>
		</div>

	</header>

	<!-- ------------ START page content ------------ -->
	<section id="zone__content" class="zone wrap-outer">
		<div class="wrap-inner container clearfix">