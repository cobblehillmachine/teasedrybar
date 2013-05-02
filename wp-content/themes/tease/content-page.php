<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


<div class="main-image">
	<div class="page-title"><?php the_title(); ?></div>
	<?php the_post_thumbnail('full'); ?>
</div>
<div class="page-content">
	<?php the_content(); ?>
</div>
<div class="feature-cont">
	<div class="feature-img">
		<?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
		    kd_mfi_the_featured_image( 'featured-image-2', 'page' );
		} ?>
	</div>
	<div class="feature-img">
		<?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
		    kd_mfi_the_featured_image( 'featured-image-3', 'page' );
		} ?>
	</div>
</div>