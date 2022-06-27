<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nova4
 */

get_header();
?>
<div class="row post-list">

			<?php
			if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

						<div class="item col-12 col-md-4">
							<div class="inner">
								<a href="<?php the_permalink(); ?>"><img class="post-image" src="<?php the_post_thumbnail_url(); ?>"></a>
								<div class="post-date"><?php the_date(); ?></div>
								<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 5); ?></a></h4>
								<p class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
								<div class="post-link"><a class="button button-brand3" href="<?php the_permalink(); ?>">Read More <i class="arrow-icon fas fa-arrow-right"></i></a></div>
							</div>
						</div>

				<?php endwhile; ?>

				<div class="col-12">
					<?php the_posts_pagination(); ?>
				</div>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nova3' ); ?></p>

				<?php get_search_form();
			endif;
			?>

			</div><!-- /row -->


<?php
get_footer();
