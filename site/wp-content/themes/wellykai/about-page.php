<?php
/**
 * The template for displaying the About page.
 * Template Name: About Page
 * 
 */

get_header(); ?>

		<div id="about-page">
        	<h1><img src="/wp-content/themes/wellykai/images/AboutUs.png" alt="About Us" width="250"/></h1>
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>