<?php
/**
 * The template for displaying the homepage
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

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

  <section class="featured-work">
			<h5>Featured Work</h5>
			<div class="site-content">
			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
					<?php while ( have_posts() ) : the_post();
						$image_1 = get_field("image_1");
						$size = "medium";
					?>
					<li class="individual-featured-work">
						<figure>
							<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
						</figure>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>

		</div>
	</section>

	<section class="frontpage-services">
		<h5>Our Services</h5>
			<div class="site-content">
					<?php $logo_1 = get_field('logo_1', 47356);
						$logo_2 = get_field('logo_2', 47356);
						$logo_3 = get_field('logo_3', 47356);
						$logo_4 = get_field('logo_4', 47356);
						$title_1 = get_field('title_1', 47356);
						$title_2 = get_field('title_2', 47356);
						$title_3 = get_field('title_3', 47356);
						$title_4 = get_field('title_4', 47356);
						$size = "medium"; ?>
						<ul class="homepage-services">
							<li class="individual-services">
								<img src="<?php echo $logo_1; ?>" />
							  <h3><?php echo $title_1; ?></h3>
						  </li>
							<li class="individual-services">
								<img src="<?php echo $logo_2; ?>" />
								<h3><?php echo $title_2; ?></h3>
							</li>
							<li class="individual-services">
								<img src="<?php echo $logo_3; ?>" />
								<h3><?php echo $title_3; ?></h3>
							</li>
							<li class="individual-services">
								<img src="<?php echo $logo_4; ?>" />
							  <h3><?php echo $title_4; ?></h3>
							</li>
						</ul>
	  	</div>
	</section>

	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
			</div>
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
					<h4 id="twitter-title">Recent Tweet</h4>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
					<div class="follow-us-link"<a href=""><span>Follow Us</span> &rsaquo;</a></div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<!-- function custom_excerpt_more($more) {
		return '...<div class="read-more-link"><a  href="'. get_permalink() . '"><span>Read more</span> &rsaquo;</a></div>';
	} -->

<?php get_footer(); ?>
