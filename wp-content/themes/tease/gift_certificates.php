<?php
 /*
Template Name: Gift Certificates
*/

get_header(); ?>

<div id="gifts" class="wrapper">
	<div class="page-title"><?php the_title(); ?></div>
	<div class="subtitle first">SPLURGE, <span>A Full Month of Tease</span></div>
	<div class="gift-headline">Blow someone away with a gift certificate from Tease. They make a great gift for yourself or a special friend.</div>
	<div class="styles-cont splurge">		
			<div class="style-single">
					<div class="single-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/gift-price-75.png" /></div>	
					<div class="single-title">the usual</div>		
					<div class="single-text">Two blowouts, one TLC add-on,
					and 10% off all products.</div>
			</div>		
			<div class="style-single">
					<div class="single-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/gift-price-125.png" /></div>	
					<div class="single-title">the addict</div>		
					<div class="single-text">Four blowouts, two TLC add-ons,
					and 10% off all products.</div>
			</div>
	</div>
	<div class="line"></div>
	
	<div class="subtitle">TEASE TABS, <span>Money to Blow</span></div>
	<div class="gift-headline">Buy a bunch of blowouts at once, we’ll keep track of them and take them off your tab each time you come in.<br/> These never expire.</div>
	<div class="styles-cont tabs">	
		<div class="style-single">
				<div class="single-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/gift-price-100.png" /></div>	
				<div class="single-title">three blowouts</div>		
				<div class="single-text">save $5</div>
		</div>
		<div class="style-single">
				<div class="single-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/gift-price-190.png" /></div>	
				<div class="single-title">six blowouts</div>		
				<div class="single-text">save $20</div>
		</div>
		<div class="style-single">
				<div class="single-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/gift-price-360.png" /></div>	
				<div class="single-title">twelve blowouts</div>		
				<div class="single-text">save $60</div>
		</div>
	</div>
	<div class="line"></div>	
	<!-- <div class="subtitle">VIP MEMBERSHIP</div>
	<div class="gift-headline">Come in for 9 blowouts and the next one is on us along with a 10% discount on all our products.</div>
	<div class="styles-cont vip">
	</div> -->
	<div id="form-cont">
		<div class="title">order a gift certificate</div>
		<div class="text">Please fill out the information below and we will get in touch with you within 24 hours to deliver the gift certificate.</div>
		<div id="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="238" title="Gift certificate"]' ); ?>
		</div>
	</div>
	
</div>
