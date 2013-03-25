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
		<div class="text">Function or plans for a night on the town? No worries.<br/> Please give us a call at 843-724-9493 <br/>or <a href="http://www.oursalononline.com/Online/%28S%28qnhn1p45e5dozkevaegpzib4%29%29/book.aspx?acc=teasedrybar" target="_blank">click here to book an appointment</a></div>
		<div class="title">subscribe</div>
		<div class="text">Join our mailing list and keep up with latest at Tease, and to receive special offers for your next blowout.</div>
		<div class="subscribe-cont">
			<?php echo do_shortcode( '[emma_form]' ); ?>
		</div>		
	</div>
	<div id="form-cont">
		<div class="title">get in touch</div>
		<div class="text">If you would like to get in contact with us or have any comments, please use the form below.  We would love to hear from you!</div>
		<div id="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]' ); ?>
		</div>
	</div>
</div>

