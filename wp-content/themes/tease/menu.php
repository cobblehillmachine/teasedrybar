<?php
 /*
Template Name: Menu
*/

get_header(); ?>
<div id="menu" class="wrapper">
	<div class="page-title"><?php the_title(); ?></div>
	
	<?php query_posts( 'post_type=tease_choose_a_style',array('order' => 'ASC') ); ?>
	<div class="subtitle-cont">
		<div class="dollar">$</div>	
		<div class="didot">35</div>
		<div class="subtitle-text">CHOOSE A STYLE,</div> 
		<div class="italic">wash included</div>
	</div>
	<div class="styles-cont">
	<?php while ( have_posts() ) : the_post(); ?>		
			<div class="style-single <?php echo str_replace(' ','-',get_the_title()); ?>">
					<a class="single-icon" href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail(); ?>	</a>	
					<div class="single-title"><?php the_title(); ?></div>		
					<div class="single-text"><?php the_content(); ?></div>
					<a class="style-link" href="<?php echo the_permalink(); ?>">view examples</a>
			</div>
	<?php endwhile; // end of the loop. ?>
	</div>
	<div class="line"></div>
	
	<?php query_posts( 'post_type=tease_specialty' ); ?>
	<div class="subtitle">SPECIALTY STYLES, <span>wash included</span></div>
	<div class="styles-cont specialty">
	<?php while ( have_posts() ) : the_post(); ?>		
			<div class="style-single <?php echo str_replace(' ','-',get_the_title()); ?>">
					<a class="single-icon" href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail(); ?>	</a>	
					<div class="single-title"><?php the_title(); ?></div>		
					<div class="single-text"><?php the_content(); ?></div>
					<a class="style-link" href="<?php echo the_permalink(); ?>">view examples</a>
			</div>
	<?php endwhile; // end of the loop. ?>
	</div>
	<div class="line"></div>
	
	<?php query_posts( 'post_type=tease_treat_yourself' ); ?>
	<div class="subtitle">TREAT YOURSELF, <span>Blowout Add-Ons</span></div>
	<div class="styles-cont treat">
	<?php while ( have_posts() ) : the_post(); ?>		
			<div class="style-single <?php echo str_replace(' ','-',get_the_title()); ?>">
					<div class="single-icon"><?php the_post_thumbnail(); ?>	</div>	
					<div class="single-title"><?php the_title(); ?></div>		
					<div class="single-text"><?php the_content(); ?></div>
					<a class="style-link" href="<?php echo get_page_link( $page->ID ); ?>">view examples</a>
			</div>
	<?php endwhile; // end of the loop. ?>
	</div>
</div>