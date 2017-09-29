<?php
/**
 * Template part for displaying page content in single-product.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>
	<?php $headerImage = get_field( 'header_image' ); ?>
	<section class="header-image" style="background-image: url( '<?php echo $headerImage[ 'url' ] ?>' );" alt="<?php echo $headerImage[ 'alt' ] ?>"></section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="constrain">
		<div class="main-block">
			<header class="entry-header">
				<div class="subtitle site-font-accent"><?php the_field( 'sub_title' ); ?></div>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
		</div><!-- .main-block -->
		<aside class="product-sidebar">
			
			<?php if ( have_rows( 'sidebar_content' ) ) : ?>
				<?php while ( have_rows( 'sidebar_content' ) ) : the_row(); ?>

					<div class="side-pro-block">
						<?php the_sub_field( 'sidebar_content_block' ); ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</aside>
	</div>

	<?php if ( get_theme_mod( 'forta_master_large_text' ) ) : ?>
	<section class="pro-cta" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_products_image' ); ?>' );">
		<div class="constrain">
			<div class="left-block">
				<span class="small-text site-font-accent"><?php echo get_theme_mod( 'forta_master_small_text' ); ?></span>
				<span class="large-text top"><?php echo get_theme_mod( 'forta_master_large_top_text' ); ?></span>
				<span class="large-text bottom"><?php echo get_theme_mod( 'forta_master_large_bottom_text' ); ?></span>
			</div>
				<div class="right-block">
					<a class="cta-btn site-accent" href="<?php echo get_theme_mod( 'forta_master_button_link' ); ?>"><?php echo get_theme_mod( 'forta_master_button_text' ); ?></a>
				</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if ( have_rows( 'product_tabs' ) ) : ?>
		<section class="product-details">
			<ul class="product-tabs">
			
				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

					<li>
						<a href="#" data-ref="<?php the_sub_field( 'tab_title' ); ?>"><?php the_sub_field( 'tab_title' ); ?></a>
					</li>
	
				<?php endwhile; ?>

			</ul>
		</section>
		<section class="product-listings">
			<div class="constrain">

				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

					<div id="<?php the_sub_field( 'tab_title' ); ?>" class="tabBlock">
						<?php the_sub_field( 'tab_content' ); ?>
					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?><!-- End Product Details -->

</article><!-- #post-<?php the_ID(); ?> -->
