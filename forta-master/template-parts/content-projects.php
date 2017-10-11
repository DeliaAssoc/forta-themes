<?php
/**
 * Template part for displaying page content in project(s)-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="products-page-info">
		<div class="constrain">
			<div class="heading-wrapper">
				<h1 class="products-heading"><?php the_title(); ?></h1>
				<div class="custom-hr"></div>
			</div>
			<div class="flexxed">
				<div class="sub-text">
					<?php the_field( 'sub_text' ); ?>
				</div>
				<div class="page-description">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="products-tab-list">
		<div class="constrain">
			<div class="tab-text site-font-accent">Please select a product category below.</div>
		<?php
			$categories = get_categories( 'project' );

			if ( count($categories)  > 1 ) : ?>
				
				<ul class="product-tabs">

				<!-- Output list of product categories as tab list -->
				<?php $i = 1; ?>
				<?php foreach ( $categories as $category ) { ?>

					<li><a data-ref="tabBlock<?php echo $i; ?>" href="#">
						<?php echo $category->name; ?>
					</a></li>
					<?php $i++;
			  	} ?>

				</ul>
		</div>
			<div class="product-listings">
				<div class="constrain">
					<!-- Grab all projects from all categories and list each in a seperate tab -->
					<?php $i = 1; ?>
					<?php foreach ( $categories as $category ) { ?>
						<?php $catId = $category->term_taxonomy_id ?>
						<div id="tabBlock<?php echo $i; ?>" class="tabBlock">

							<!-- Query product post type and category -->
							<?php $project = new WP_Query( 'post_type=project&cat=' . $catId ); ?>
							
							<?php while ( $project->have_posts() ) : $project->the_post(); ?>

								<?php $postId = $post->ID; ?>

								<div class="product-info">

									<?php if ( has_post_thumbnail() ) : ?>

									<div class="products-list-image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> );">
									</div>

									<?php endif; ?>

									<div class="products-lists-text">
										<div class="products-list-heading">
											<div class="subtitle"><?php the_field( 'sub_title', $postId ); ?></div>
											<h2><?php the_title(); ?></h2>
										</div>

										<?php the_excerpt(); ?>

										<div class="products-btns-wrapper">
											<a href="#" class="products-btn site-accent-border">FAQs</a>
											<a href="<?php the_permalink(); ?>" class="products-btn site-accent-border">More Details</a>
											<a href="#" class="products-btn site-accent-border">Request a Quote</a>
										</div>

									</div><!-- .products-lists-text -->
								</div><!-- .product-info -->

							<?php endwhile; ?>

							<?php wp_reset_query(); ?>
						</div>
						<?php $i++; ?>
					<?php } ?>
						
				</div>
			</div>

				
			 <?php endif; ?>

	</section>

</article><!-- #post-<?php the_ID(); ?> -->
