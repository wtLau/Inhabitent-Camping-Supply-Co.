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
        <section class="product-section">
          <h1>Shop Stuff</h1>
          <div class="product-area">
            <?php $product_types = get_terms(
              array( 
                'taxonomy' => 'product-type',
                'hide_empty' => 0,

              )); 
              if ( !empty($product_types) && !is_wp_error($product_types)) : ?>

              <?php foreach ( $product_types as $product_type ) : ?>
              
              <article class="products-display">
                <!--<img class="product-type-icon" id="<?php echo uniqid(1) ?>"> -->
                <p>
                  <?php echo $product_type->description;?>
                </p>
                <a href="<?php echo get_term_link($product_type); ?>">
                  <p>
                    <?php echo $product_type->name;?> Stuff
                  </p>
                </a>
              </article>

              <?php endforeach; ?>

            <?php endif; ?>
          </div> 
        </section>

          <!--Get post from journal -->
        <?php $args = array( 
          'post_type' => 'post', 
          'order' => 'ASC', 
          'posts_per_page' => 3 
        );
          $product_posts = get_posts( $args ); ?>
          <section class="journal-section">
            <h1>Inhabitent Journal</h1>
            <ul class="front-page-journal">
              <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
              <div class="front-single">
                  <div class="thumbnail-wrapper">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="post-info-wrapper">
                    <div class"post-meta-wrap">
                      <div class="entry-meta">
                        <p class ="journal-meta">
                          <?php red_starter_posted_on(); ?> /
                          <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                        </p>
                      </div>
                      <div class="entry-content">
                        <a href="<?php echo sprintf( esc_url( get_permalink() ) )?>">
                          <h3><?php the_title(); ?></h3>
                        </a>
                      </div>
                    </div>  
                    <div class="read-more">
                      <a href="<?php echo sprintf( esc_url( get_permalink() ) )?>">
                        <p>Read Entry</p>
                      </a>
                    </div>
                  </div>
                </div>  
              <?php endforeach; wp_reset_postdata(); ?>
            </ul>
          </section>  

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
