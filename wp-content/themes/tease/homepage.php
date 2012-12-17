<?php
 /*
Template Name: Homepage
*/

get_header(); ?>
			
			<div id="home">
				<!-- <img id="bg-img" class="bgimg" src="<?php echo get_template_directory_uri(); ?>/images/homepage.jpg" /> -->
				<?php echo do_shortcode('[cycloneslider id ="homepage"]'); ?>
				<div id="home-circle" class="big-circle"><!-- <a href="/menu" class="view-menu">view our menu</a> --></div>
			</div><!-- #content -->
		
<?php get_footer(); ?>

