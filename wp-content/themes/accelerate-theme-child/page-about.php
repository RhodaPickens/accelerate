<?php
/**
 * The template for displaying the about page.
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

	<div id="primary" class="about-page">
		<div class="about-header">
			<p class="about-tagline" >Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build business by making our clients
			visible and making their customers smile.</p>
			<?php while ( have_posts() ) : the_post();
			  $logo_1 = get_field('logo_1');
				$logo_2 = get_field('logo_2');
				$logo_3 = get_field('logo_3');
				$logo_4 = get_field('logo_4');
				$title_1 = get_field('title_1');
				$title_2 = get_field('title_2');
				$title_3 = get_field('title_3');
				$title_4 = get_field('title_4');
				$description_1 = get_field('description_1');
				$description_2 = get_field('description_2');
				$description_3 = get_field('description_3');
				$description_4 = get_field('description_4'); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->
  <section class="our-services">
    <h5>Our Services</h5>
			      <p class="service-intro">We take pride in our clients and the content we create for them.
      <br>Here's a brief overview of our offered services.</p>

		<div class="content-strategy-right">
			<figure class="left">
			  <img src="<?php echo $logo_1; ?>" />
		  </figure>
			<div class="description">
				<h2><?php echo $title_1; ?></h2>
				<p><?php echo $description_1; ?></p>
			</div>
		</div>

		<div class="content-strategy">
			<figure class="right">
			  <img class="right" src="<?php echo $logo_2; ?>" />
		  </figure>
			<div class="description-left">
				<h2><?php echo $title_2; ?></h2>
				<p><?php echo $description_2; ?></p>
			</div>
		</div>

		<div class="content-strategy-right">
			<figure class="left">
			  <img src="<?php echo $logo_3; ?>" />
		  </figure>
		  <div class="description">
				<h2><?php echo $title_3; ?></h2>
				<p><?php echo $description_3; ?></p>
			</div>
		</div>

		<div class="content-strategy">
			<figure class="right">
			  <img class="right" src="<?php echo $logo_4; ?>" />
	  	</figure>
			<div class="description-left">
				<h2><?php echo $title_4; ?></h2>
				<p><?php echo $description_4; ?></p>
			</div>
		</div>

</section>

<nav id="navigation" class="container about-footer">
	<h2 class="contact-button">Interested in Working With Us?</h2>
	<a class="button contactus-button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
</nav>


<?php get_footer(); ?>
