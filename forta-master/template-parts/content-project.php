<?php
/**
 * Template part for displaying page content in single-project.php
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
				<div class="loc-date">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php the_field( 'location' ); ?>
					<?php if ( get_field( 'date_of_project' ) ) : ?>
						-
						<?php the_field( 'date_of_project' ); ?>
					<?php endif; ?>
				</div>
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

</article><!-- #post-<?php the_ID(); ?> -->
