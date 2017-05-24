<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
        <?php $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
        $product_posts = get_posts( $args ); ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
          <?php the_title() ?>
          <!--<?php red_starter_posted_on() ?>-->
          <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
          <?php red_starter_posted_by(); ?>
          <?php the_excerpt(); ?>
        <?php endforeach; wp_reset_postdata(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
