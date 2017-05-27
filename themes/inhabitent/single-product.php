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
						<header class="entry-header">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>

						</header><!-- .entry-header -->

						<div class="entry-content">
 							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<p>$<?php echo CFS()->get( 'price' ); ?></p> 
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php red_starter_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
