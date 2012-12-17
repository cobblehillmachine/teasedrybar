<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="styles-page bgimg">

	<?php  if (is_single( '58' ))  { ?>
	
		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>
		<!-- <?php //echo do_shortcode('[ slideshow id=1 ]'); ?> -->
		<!-- <?php //echo nggShowSlideshow(1,1200,800); ?> -->
	
	 <?php } elseif (is_single( '63' )) { ?>
		
		 <?php echo do_shortcode('[cycloneslider id ="sophisticate"]'); ?>
		
	<?php } elseif (is_single( '65' )) { ?>
		
		 <?php echo do_shortcode('[cycloneslider id ="goddess"]'); ?>
		
	<?php } elseif (is_single( '67' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="free-spirit"]'); ?>

	<?php } elseif (is_single( '69' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="siren"]'); ?>
		
	<?php } elseif (is_single( '71' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="trendsetter"]'); ?>
		
	<?php } elseif (is_single( '60' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="glamour-girl"]'); ?>
		
	<?php } elseif (is_single( '85' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="heartbreaker"]'); ?>

	<?php } elseif (is_single( '92' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="uptease"]'); ?>

	<?php } elseif (is_single( '95' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="with-a-twist"]'); ?>
		
		
	<?php } ?>
	<div id="styles-circle" class="big-circle">
		<div class="title"><?php echo str_replace('-','&nbsp;',get_the_title()); ?></div>
		<?php  if (is_single( '58' ))  { ?>
			<div class="sub">our signature blowout</div>
		<?php } ?>
		<div class="instruction"><div class="ios">tap and use arrows to explore looks</div><div class="desktop">Use arrow keys to explore looks</div></div>
	</div>
	<div class="styles-menu">
		<div id="select-style">select a style</div>		
		<a href="/main-styles/tease" class="styles-menu-link">tease</a>
		<a href="/main-styles/sophisticate" class="styles-menu-link">sophisticate</a>
		<a href="/main-styles/goddess" class="styles-menu-link">goddess</a>
		<a href="/main-styles/free-spirit" class="styles-menu-link">free spirit</a>
		<a href="/main-styles/siren" class="styles-menu-link">siren</a>
		<a href="/main-styles/trendsetter" class="styles-menu-link">trendsetter</a>
		<a href="/specialty-styles/glamour-girl" class="styles-menu-link">glamour girl</a>
		<a href="/specialty-styles/heartbreaker" class="styles-menu-link">heartbreaker</a>
		<a href="/specialty-styles/uptease" class="styles-menu-link">uptease</a>
	</div>	
</div>

<?php get_footer(); ?>