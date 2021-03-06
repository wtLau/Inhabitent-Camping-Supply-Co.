<?php
/**
 * The template for displaying single product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="single-product-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="content-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
					</header><!-- .content-header -->

					<div class="entry-content">
						<div class="entry-meta">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->

						<?php the_content(); ?>

						<div class="social-buttons">
							<a href="www.facebook.com">
								<p><i class="fa fa-facebook" aria-hidden="true"></i> Like</p>
							</a>
							<a href="www.twitter.com">
								<p><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</p>
							</a>
							<a href="www.pinterest.com">
								<p><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</p>	
							</a>			
						</div>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
