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
</main><!-- content-zone -->

<footer id="zone__footer" class="zone wrap-outer">
	<div class="wrap-inner container">
			<?php if ( is_active_sidebar( 'footer_widgets' ) ) { ?>
				<?php dynamic_sidebar( 'footer_widgets' );?>
			<?php } ?>
			<div id="site-info" class="col-12">
				<small>
				&copy; <?php echo date("Y") . ' ' . get_bloginfo();?>  | <a target="_blank" href="https://github.com/arvindsardar/">Nova4 Theme Development Version</a>
				</small>
			</div><!-- .site-info -->
	</div><!-- .container.wrap-inner -->
</footer><!-- #zone_footer.wrap-outer -->

<a id="back-to-top" href="#pagetop"><span class="dashicons dashicons-arrow-up-alt"></span></a>

<?php wp_footer(); ?>

</body>
</html>
