<?php
/**
 * The template for displaying the Accelerate about page
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class='aboutpage-hero'>
					<?php the_content(); ?>
					
					<?php 
					$hero_statement = get_field('hero_statement');
					$services_blurb = get_field('services_blurb');
					$content_strategy = get_field('content_strategy_blurb');
					$influencer_blurb = get_field('influencer_blurb');
					$social_media = get_field('social_media_blurb');
					$design_development = get_field('design_and_development_blurb');
					$content_image = get_field('content_strategy_image');
					$influencer_image = get_field('influencer_image');
					$social_image = get_field('social_media_image');
					$design_image = get_field('design_development_image');					
					$contact_message = get_field('contact_message');
					$size = "full";
					?>
					<div id="hero-statement">
						<p><span class="company-name">Accelerate</span> <?php echo $hero_statement; ?></p>
					</div><!-- #hero-statement -->
				</div><!-- #aboutpage-hero -->
					<?php endwhile; // end of the loop. ?>				
					
				<article class="about-accelerate">
					<div id="services">
						<h4>Our Services</h4>
						<p><?php echo $services_blurb; ?></p>
					</div>
					<div id="content-strategy">
						<div class="content-text">
							<h5>Content Strategy</h5>
							<p><?php echo $content_strategy; ?>
						</div>
						<?php 
							if ($content_image == true) {
								echo '<div class="content-image">' .  wp_get_attachment_image( $content_image, $size ) . '</div>';
							}
						?>
					</div>
					<div id="influencer-mapping">
						<div class="influencer-text">
							<h5>Influencer Mapping</h5>
							<p><?php echo $influencer_blurb; ?>
						</div>
						<?php 
							if ($influencer_image == true) {
								echo '<div class="influencer-image">' .  wp_get_attachment_image( $influencer_image, $size ) . '</div>';
							}
						?>
					</div>
					<div id="social-media-strategy">
						<div class="social-text">
							<h5>Social Media Strategy</h5>
							<p><?php echo $social_media; ?>
						</div>
						<?php 
							if ($social_image == true) {
								echo '<div class="social-image">' .  wp_get_attachment_image( $social_image, $size ) . '</div>';
							}
						?>
					</div>
					<div id="design-development">
						<div class="design-text">
							<h5>Design & Development</h5>
							<p><?php echo $design_development; ?>
						</div>
						<?php 
							if ($design_image == true) {
								echo '<div class="design-image">' .  wp_get_attachment_image( $design_image, $size ) . '</div>';
							}
						?>
					</div>
				</article>
								
				<div id="about-footer">
					<div class="contact-message">
						<strong><?php echo $contact_message; ?></strong>
						<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
					</div>
				</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>