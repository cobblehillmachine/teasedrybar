<?php
 /*
Template Name: Contact
*/

get_header(); ?>

<div id="contact" class="wrapper">
	<div class="page-title"><?php the_title(); ?></div>
	<a id="map-img" class="main-image" href="http://maps.google.com/maps?q=430+king+street+charleston+sc+29405&oe=utf-8&client=firefox-a&hnear=430+King+St,+Charleston,+South+Carolina+29403&gl=us&t=m&z=16" target="_blank">
		<img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" />
		<div class="directions">click for detailed directions</div>
	</a>
	<div class="other">
		<div class="title">book</div>
		<div class="text">Last minute function or plans for a night on the town? No worries.  We are here within a moments notice or feel free to book an appointment. <a href="http://www.oursalononline.com/Online/%28S%28qnhn1p45e5dozkevaegpzib4%29%29/book.aspx?acc=teasedrybar" target="_blank">Click here to book an appointment</a></div>
		<div class="title">subscribe</div>
		<div class="text">Join our mailing list and keep up with latest at Tease, and to receive special offers for your next blowout.</div>
		<div class="subscribe-cont">
			<?php echo do_shortcode( '[emma_form]' ); ?>
		</div>		
	</div>
	<div id="form-cont">
		<div class="title">get in touch</div>
		<div class="text">There’s no appointment needed to visit Tease Dry Bar, but if you’d like to get in contact with us please use the form below.</div>
		<div id="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]' ); ?>
		</div>
	</div>
</div>

