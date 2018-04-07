<?php
/**
 * The template for displaying the 404 page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content page404" role="main">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/car-stopped.jpg" alt="man sitting on car" />
				<h1>Oops! I think something went wrong</h1>
				<h4>To get Accelerating again, please return <span><a href="<?php echo site_url('/homepage/') ?>">home</a></span> or have a look around our
					<span><a href="<?php echo site_url('/blog/') ?>">blog</a></span></h4>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
        			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
