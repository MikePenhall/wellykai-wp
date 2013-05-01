<?php
/**
 * The template for displaying the Featured page.
 * Template Name: Featured Page
 * 
 */

get_header(); ?>

		<div id="featured-page">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"></h1>
				</div><!-- #post-## -->

				

<?php endwhile; ?>
		
        <!--first category-->
		<div class="featured-page"> 
             <?php 
			 	add_image_size('features-image', 200, 200); 
				$arguments = array(
					'category_id' => 25, 'posts_per_page' => 3, 'order' => 'DESC'
				);				
				$first_query = new WP_Query($arguments);
				while( $first_query->have_posts() ) : $first_query->the_post();?>
				
                <h2><img src="/wp-content/themes/wellykai/images/WellyKaiRecommends.png" alt="Welly Kai Recommends" /></h2>
                <h3 class="featured-page-article-heading"><a href="<?php the_permalink() ?>"><strong><?php if(strlen(the_title()) < 50){
					echo "<br />";
				}; ?></strong></a></h3>
	
                <?php  
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail('features-image',array('class'=>'left featured-img'));
				} 
				the_excerpt();

				endwhile;
				
				wp_reset_postdata();
			 ?>
		</div>	
		
        
        

	





			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>
