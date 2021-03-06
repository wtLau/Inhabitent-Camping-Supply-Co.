<?php
/**
 * Template Name: Find-Us Page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="site-detail">
	<div class ="post-findus">
  		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'template-parts/content-page' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>


