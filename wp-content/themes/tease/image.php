<?php
/**
 * The template for displaying image attachments.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="styles-page">

	<?php  if (is_single( '54' ))  { ?>
	
		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>
	
	 <?php } elseif (is_single( '64' )) { ?>
		
		 <?php echo do_shortcode('[cycloneslider id ="sophisticate"]'); ?>
		
	<?php } elseif (is_single( '66' )) { ?>
		
		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>
		
	<?php } elseif (is_single( '68' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>

	<?php } elseif (is_single( '70' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>
		
	<?php } elseif (is_single( '72' )) { ?>

		 <?php echo do_shortcode('[cycloneslider id ="tease"]'); ?>
		
	<?php } ?>
	<div class="big-circle">
		<div class="title"><?php echo str_replace('-','&nbsp;',get_the_title()); ?></div>
		<?php  if (is_single( '54' ))  { ?>
			<div class="sub">our signature blowout</div>
		<?php } ?>
		<div class="instruction">Swipe or use arrows keys <br/>to explore looks</div>
	</div>
	<div class="styles-menu">
		<div id="select-style">select a blow out</div>
		<a href="/menu/tease" class="styles-menu-link">tease</a>
		<a href="/menu/sophisticate" class="styles-menu-link">sophisticate</a>
		<a href="/menu/goddess" class="styles-menu-link">goddess</a>
		<a href="/menu/free-spirit" class="styles-menu-link">free spirit</a>
		<a href="/menu/siren" class="styles-menu-link">siren</a>
		<a href="/menu/trendsetter" class="styles-menu-link">trendsetter</a>
		<a href="/menu/glamour-girl" class="styles-menu-link">glamour girl</a>
		<a href="/menu/heartbreaker" class="styles-menu-link">heartbreaker</a>
		<a href="/menu/uptease" class="styles-menu-link">uptease</a>
	</div>	
</div>
<?php get_footer(); ?>