<?php
/**
 * The template for displaying the "product" post type archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="product-section-page">
				<div class="product-sections">
					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
						<div class="product-type-name">
							<?php $product_types = get_terms(
              	array( 
									'taxonomy' => 'product-type',
									'hide_empty' => 0,
              	)); 
							if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
								<?php foreach ( $product_types as $product_type ) : ?>
									<a href="<?php echo get_term_link($product_type); ?>">
										<p>
											<?php echo $product_type->name;?>
										</p>							
									</a>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</header><!-- .page-header -->

					<div class="all-product-here">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php echo sprintf(esc_url( get_post_permalink() ) ) ?>">
											<?php the_post_thumbnail( 'large' ); ?>
										</a>	
									<?php endif; ?>
									<div class="entry-title">
										<p><?php the_title(); ?></p>
										<p>$<?php echo CFS()->get( 'price' ); ?></p>
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