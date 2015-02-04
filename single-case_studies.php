<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');					
				$client = get_field('client');	
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				
				$size = "full";
			?>
			
			<article class="case-study">
				<aside class ="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>

				<?php the_content(); ?>
				<p><strong><a href="<?php echo $site_link; ?>">Site Link</a></strong></p>
				</aside>
				<div class="case-study-images">
					<?php 
					/* The less flexible solution, relying on image URLS
					if ($image_1 == true) {
						echo '<img src="' . $image_1 . '" />';
					}
					if ($image_2 == true) {
						echo '<img src="' . $image_2 . '" />';
					}
					if ($image_3 == true) {
						echo '<img src="' . $image_3 . '" />';
					}*/
					/* The more flexible solution, using the WordPress image attachment method, which relies on image IDs and permits more options for the images in the WP GUI */
					if ($image_1 == true) {
						echo wp_get_attachment_image( $image_1, $size );
					}
					if ($image_2 == true) {
						echo wp_get_attachment_image( $image_2, $size );
					}
					if ($image_3 == true) {
						echo wp_get_attachment_image( $image_2, $size );
					 ?>
				</div>
			</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>