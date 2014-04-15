<?php
 /*
Template Name: Homepage
*/

get_header(); ?>
			
			<div id="home">
				<!-- <img id="bg-img" class="bgimg" src="<?php echo get_template_directory_uri(); ?>/images/homepage.jpg" /> -->
				<div class="desktop"><?php echo do_shortcode('[cycloneslider id="homepage"]'); ?></div>
				<div id="home-circle" class="big-circle"><!-- <a href="/menu" class="view-menu">view our menu</a> --></div>

				
			</div><!-- #content -->
			
				<?php if ( get_post_meta($post->ID, 'tagline_url', true) ) { ?>
					<a id="home-tagline" target="_blank" href="<?php the_field('tagline_url'); ?>"><?php the_field('home_tagline'); ?></a> 
				<?php } else { ?>
					<div id="home-tagline"><?php the_field('home_tagline'); ?></div> 
				<?php } ?>
		
<?php get_footer(); ?>

