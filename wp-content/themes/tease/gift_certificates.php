<?php
 /*
Template Name: Gift Certificates
*/

get_header(); ?>

<div id="gifts" class="wrapper">
	<div class="page-title"><?php the_title(); ?></div>
	
	<?php
		/**
		 * woocommerce_before_single_product hook
		 *
		 * @hooked woocommerce_show_messages - 10
		 */
		 do_action( 'woocommerce_before_single_product' );
	?>	
	<div class="subtitle">GIFT CERTIFICATES</div>
		<div id="custom"><?php echo do_shortcode('[product_category category="Money To Blow" per_page="12" columns="4" orderby="date" order="asc"]'); ?></div>
		<div class="line"></div>
	<div class="subtitle first">SPLURGE, <span>A Full Month of Tease</span></div>
	<div id="splurge"><?php echo do_shortcode('[product_category category="Splurge" per_page="12" columns="4" orderby="date" order="asc"]'); ?></div>

	<div class="line"></div>
	
	<div class="subtitle">TEASE TABS</div>

	<div id="tease-tabs"><?php echo do_shortcode('[product_category category="Tease Tabs" per_page="12" columns="4" orderby="date" order="asc"]'); ?></div>

	
	

	
</div>
