<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nova4
 */
?>
	<!-- ------------ END page content ------------ -->
	</div><!-- #main-content.wrap-inner.container -->
</section><!-- content-zone -->

<footer id="zone__footer" class="zone wrap-outer">
	<div class="wrap-inner container">
		<div class="row">

			<?php if ( is_active_sidebar( 'footer1_widgets' ) ) { ?>
				<div id="footer-1" class="widget-column col-md-6 col-lg"><?php dynamic_sidebar( 'footer1_widgets' );?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer2_widgets' ) ) { ?>
				<div id="footer-2" class="widget-column col-md-6 col-lg"><?php dynamic_sidebar( 'footer2_widgets' );?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer3_widgets' ) ) { ?>
				<div id="footer-3" class="widget-column col-md-6 col-lg"><?php dynamic_sidebar( 'footer3_widgets' );?></div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer4_widgets' ) ) { ?>
				<div id="footer-4" class="widget-column col-md-6 col-lg"><?php dynamic_sidebar( 'footer4_widgets' );?></div>
			<?php } ?>
			<div id="site-info" class="col-12">
				<small>
				&copy; <?php echo date("Y") . ' ' . get_bloginfo();?>  | <a target="_blank" href="https://github.com/arvindsardar/">Nova4 Theme Development Version</a>
				</small>
			</div><!-- .site-info -->

		</div><!-- row -->
	</div><!-- .container.wrap-inner -->
</footer><!-- #zone_footer.wrap-outer -->

<a id="back-to-top" href="#header-content-wrap"><span class="dashicons dashicons-arrow-up-alt"></span></a>

<?php wp_footer(); ?>

</body>
</html>
