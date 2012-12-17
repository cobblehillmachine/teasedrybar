<?php
 /*
Template Name: Groups and Events
*/

get_header(); ?>

<div id="about" class="wrapper">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>


	<?php endwhile; // end of the loop. ?>
</div>