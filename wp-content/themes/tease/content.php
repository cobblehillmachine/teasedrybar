<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<div id="post-<?php the_ID(); ?>" class="post-content">
		<div class="date">
			<?php twentyeleven_posted_on(); ?>
		</div>
		<div class="title">
			<?php the_title(); ?>
		</div>

		<div class="post-text">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-<?php the_ID(); ?> -->
	<div class="line"></div>
