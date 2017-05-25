<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
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

          <!--Get products from shop-->
          
        <?php $product_types = get_terms(
          array( 
            'taxonomy' => 'product-type',
            'hide_empty' => 0
          )); 
          if ( !empty($product_types) && !is_wp_error($product_types)) : ?>

          <?php foreach ( $product_types as $product_type ) : ?>

          <a href="<?php echo get_term_link($product_type); ?>">
            <h3><?php echo $product_type->name;?>Shop Stuff </h3>
          </a>

          <?php endforeach; ?>

        <?php endif; ?>

          <!--Get post from journal -->
        <?php $args = array( 
          'post_type' => 'post', 
          'order' => 'ASC', 
          'posts_per_page' => 3 
        );
          $product_posts = get_posts( $args ); ?>
          <ul>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
              <div class="thumbnail-wrapper">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
              <div class="entry-meta">
                <?php red_starter_posted_on(); ?> /
                <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / 
                <?php red_starter_posted_by(); ?>
              </div>
              <div class="entry-content">
                <?php the_excerpt(); ?>
              </div>
            </ul>
          <?php endforeach; wp_reset_postdata(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
