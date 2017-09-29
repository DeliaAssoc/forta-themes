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
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="loc-date">
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
			
			<?php $gallery = get_field( 'project_gallery' ); ?>

			<?php if ( $gallery ) : ?>
				<div class="sidebar-gallery">
					<h2 class="">Project Photos</h2>
					<span class="instructions">Click on any image to enlarge</span>
					<ul>
						<?php foreach ( $gallery as $image ) : ?>
							<li>
								<a class="project_gallery" rel="gallery1" href="<?php echo $image[ 'url' ] ?>">
									<img src="<?php echo $image[ 'url' ] ?>" alt="<?php echo $image[ 'alt' ] ?>">
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div><!-- .sidebar-gallery -->
			<?php endif; ?>

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
