<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="post-wrapper">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				
					<nav id="nav-single">
                    	 <?php /*?><?php print_r("<pre>");
						print_r(get_post_custom());
						print_r("</pre>"); ?> <?php */?>
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'wellykai' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'wellykai' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'wellykai' ) ); ?></span>
					</nav><!-- #nav-single -->
                    
                	<div class="entry-content">
                        <h1 class="entry-title"><?php single_post_title(); ?></h1>
                        <div class="post-info">
                        <div class="restaurant-features">
                            <?php $fields = get_post_custom();
                            if($fields[RestaurantName][0]){
                                if($fields[Website][0]){
                                    echo "<strong><a href='".$fields[Website][0]."' target='_blank' title='".$fields[RestaurantName][0]."&#39;s Website'>".$fields[RestaurantName][0]."</a></strong>&nbsp;|&nbsp;";
                                } else {
                                    echo "<strong>".$fields[RestaurantName][0]."</strong>&nbsp;|&nbsp;";
                                }
                            }
                            if($fields[GoogleMapsURL][0]){		
                                echo "<a href='".$fields[GoogleMapsURL][0]."' target='_blank' title='".$fields[RestaurantName][0]."&#39;s Location via Google Maps'>Location</a>";	
                            }
                            ?>
                        </div>
                        Published on <?php the_date(); ?> by <?php the_author(); ?>
                        </div>
                        <?php the_content(); ?> 
                    </div>
                    <?php comments_template( '', true ); ?>
                
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
</div><!-- end of post wrapper -->
<?php get_footer(); ?>