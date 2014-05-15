<?php get_header(); ?>
<div id="bridal" class="wrapper">
	<div class="main-image">
		<div class="page-title"><?php the_title(); ?></div>
		<?php echo do_shortcode('[cycloneslider id="bridal"]'); ?>
	</div>
	<div class="cont box">
		<?php the_field('bridal_copy'); ?><br/><br/>
		<strong>for the bride,</strong> <em>Wedding Hair &amp; Makeup Services</em>
	</div>
	<div id="trial" class="cont box">
		<span>in salon trial</span>
		<div class="copy"><?php the_field('trial_copy'); ?></div>
		<?php query_posts(array('post_type' => 'Bride Trials', 'order' => 'ASC', 'posts_per_page' => 10)); ?>
		<?php while ( have_posts() ) : the_post(); ?>	
			<div class="item">	
				<div class="price"><div class="dollar">$</div><div class="amount"><?php the_field('price'); ?></div></div>
				<span class="title"><?php the_title(); ?></span>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="cont box">
		<span>wedding day</span>
		<div class="copy"><?php the_field('wedding_copy'); ?></div>
		<?php query_posts(array('post_type' => 'Bride Wedding', 'order' => 'ASC', 'posts_per_page' => 10)); ?>
		<?php while ( have_posts() ) : the_post(); ?>	
			<div class="item">	
				<div class="price"><div class="dollar">$</div><div class="amount"><?php the_field('price'); ?></div></div>
				<span class="title"><?php the_title(); ?></span>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="cont box">
		<span>for the bridal party</span>
		<div class="copy"><?php the_field('bridal_party_copy'); ?></div>
		<?php query_posts(array('post_type' => 'Bridal Party', 'order' => 'ASC', 'posts_per_page' => 10)); ?>
		<?php while ( have_posts() ) : the_post(); ?>	
			<div class="item">	
				<div class="price"><div class="dollar">$</div><div class="amount"><?php the_field('price'); ?></div></div>
				<span class="title"><?php the_title(); ?></span>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>	
	<div id="junior" class="cont box">
		<span>Flower Girl or Junior Attendant (under 15).</span>
		<div class="copy"><?php the_field('junior_copy'); ?></div>
		<?php query_posts(array('post_type' => 'Junior Attendant', 'order' => 'ASC', 'posts_per_page' => 10)); ?>
		<?php while ( have_posts() ) : the_post(); ?>	
			<div class="item">	
				<div class="price"><div class="dollar">$</div><div class="amount"><?php the_field('price'); ?></div></div>
				<span class="title"><?php the_title(); ?></span>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="cont box">
		<span>ON LOCATION SERVICES OR OFF HOURS IN SALON</span>
		<div class="copy"><?php the_field('on_location_copy'); ?></div>
	</div>
</div>
<?php get_footer(); ?>