<?php
/**
 * The header for our theme
 * @package nova4
 */

	//Theme Settings Page
	$sitename = get_bloginfo( 'name' );
	$sitelogo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	$altlogo = get_theme_mod( 'nova_mobile_logo', '' );

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
	<div id="pagetop"></div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nova' ); ?></a>

	<!-- ------------ offscreen mobile menu ------------ -->
	<?php wp_nav_menu( $args = array(
		'theme_location' => 'mobile-menu',
		'menu_id' => 'id-menu--mobile',
		'menu_class' => 'offscreen-menu',
		'container' => 'nav',
		'container_class' => 'offscreen-menu-container',
		'fallback_cb' => false
	)); ?>

	<!-- ------------ Above Page Section ------------ -->
	<?php if ( is_active_sidebar( 'above_page_widgets' ) ) { ?>
		<section id="section__pageTop" class="wrap-outer bg-light">
			<div class="wrap-inner container">
				<?php dynamic_sidebar( 'above_page_widgets' );?>
			</div>
		</section>
	<?php } ?>

	<?php //get fancy search from NOVA3 if needed; ?>


	<header id="zone__header" class="zone wrap-outer">
		<div class="wrap-inner container">
			<div class="row align-items-center">

				<!-- ------------ brand ------------ -->
				<div id="section__brand" class="section col-auto">
						<a href="/" class="site-logo">
							<img src="<?php echo $sitelogo[0]; ?>">
						</a>
				</div><!-- wrap-outer -->

				<!-- ------------ navigation ------------ -->
				<div id="section__nav" class="section col">
					<?php wp_nav_menu(array(
						'theme_location' => 'primary-menu',
						'menu_id' => 'id_menu__main',
						'menu_class' => 'primary-menu',
						'fallback_cb' => false
					)); ?>

					<!-- hamburger button -->
					<div id="hamburger-button">
						<div class="bar bar1"></div>
						<div class="bar bar2"></div>
						<div class="bar bar3"></div>
					</div>

				</div>


			</div><!-- END row -->
		</div><!-- END wrap-inner -->
	</header><!-- END wrap-outer -->

	<!-- ------------ START page content ------------ -->
	<main id="zone__content" class="zone wrap-outer">
		<div class="wrap-inner container clearfix">