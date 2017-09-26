<?php
/**
 * Template part for displaying page content in product(s)-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="product-page-info">
		<div class="constrain">
			<h1 class="products-heading"><?php the_title(); ?></h1>
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
	<section class="products-list">
		
		<?php

			$categories = get_categories( 'products' );

			if ( count($categories)  > 1 ) : ?>
				
				<ul class="product-tabs">

					<!-- Output list of product categories as tab list -->
				<?php $i = 1; ?>
				<?php foreach ( $categories as $category ) { ?>

					<li><a data-ref="tabblock<?php echo $i; ?>" href="#">
						<?php echo $category->name; ?>
					</a></li>
					<?php $i++;
			  	} ?>

				</ul>

				<div class="product-lists">
				
				<div class="catid"><!-- Grab all products from all categories -->
					
						<?php $i = 1; ?>
						<?php foreach ( $categories as $category ) { ?>
							<?php $catId = $category->term_taxonomy_id ?>
							<div id="tabblock<?php echo $i; ?>">
							
								<?php $products = new WP_Query( 'post_type=products&cat=' . $catId ); ?>

								
								<?php while ( $products->have_posts() ) : $products->the_post(); ?>

									<?php the_title(); ?>

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
