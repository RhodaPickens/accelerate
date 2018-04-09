<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
$size = "full";
get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$link = get_field('site_link');
			$image_1 = get_field('image_1'); ?>

			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<p class="subtitle"><?php echo $services; ?></p>
					<?php the_content(); ?>
					<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
			</aside>


			<div class="case-study-images">
				<?php if($image_1) { ?>
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ) ?></a> <?php ;
				} ?>
			</div>
			</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>