<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nova4
 */

get_header(); ?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title">404.<br><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nova' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nova' ); ?></p>

		<?php get_search_form(); ?>

	</div><!-- .page-content -->
</section><!-- .error-404 -->

<?php get_footer();
