<?php
/**
 * The template for displaying a case studies archive
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
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = "full";
			?>
			
			<article class="case-study">
				<aside class ="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>

				<?php the_excerpt(); ?>
				<p><strong><a href="<?php the_permalink(); ?>" class="read-more-link">View Project <span>&rsaquo;</span></a></strong></p>
				</aside>
				<div class="case-study-images">
					<a href="<?php the_permalink(); ?>">
					<?php if ($image_1 == true) {
						echo wp_get_attachment_image( $image_1, $size );
					}
					 ?>
					 </a>
				</div>
			</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>