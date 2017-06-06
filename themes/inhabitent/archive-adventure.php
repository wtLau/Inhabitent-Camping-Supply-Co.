<?php
/**
 * The template for displaying the "Adventure" post type archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="adventure-section-page">
				<div class="adventure-sections">


					<div class="all-adventure-here">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="content-header">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php echo sprintf(esc_url( get_post_permalink() ) ) ?>">
											<?php the_post_thumbnail( 'large' ); ?>
										</a>	
									<?php endif; ?>
									<div class="content-title">
										<p><?php the_title(); ?></p>
									</div>
                  <div class="read-more">
                    <a href="<?php echo sprintf( esc_url( get_permalink() ) )?>">
                      <p>Read More</p>
                    </a>
                  </div>
								</header><!-- .entry-header -->

							</article><!-- #post-## -->
						<?php endwhile; ?>
					</div>
				</div>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer()?>