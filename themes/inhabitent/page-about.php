<?php
/**
 * Template Name: About Page.
 *
 * @package Inhabintent_Theme
 */

get_header(); ?>


<div class ="page-about">
  		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="about-title">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="container">
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
						</div>
					</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>

