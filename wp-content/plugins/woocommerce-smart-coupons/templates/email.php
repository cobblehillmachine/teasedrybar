<?php if (!defined('ABSPATH')) exit; ?>

<?php woocommerce_get_template('emails/email-header.php', array( 'email_heading' => $email_heading )); ?>

<?php if( !empty( $message_from_sender )) { ?>
<center>
	<span style="font:normal 20px Tahoma; background:#161616; display:inline-block; width:315px; padding:34px 125px; color:#fff;">"<?php echo $message_from_sender; ?>"</span>
	<img style="display:inline-block" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/email_arrow.png" />
</center>
<?php } ?>
<!-- <p><?php echo sprintf(__("To redeem your discount use the following coupon code during checkout:", 'wc_smart_coupons'), $blogname); ?></p>

<strong style="margin: 10px 0; font-size: 2em; line-height: 1.2em; font-weight: bold; display: block; text-align: center;" title="<?php echo __( 'Click to apply', 'wc_smart_coupons' ); ?>">
	<a href="<?php echo home_url() . '?sc-page=shop&coupon-code=' . $coupon_code; ?>" style="text-decoration: none; color: hsl(0, 0%, 45%);">
	<?php echo $coupon_code; ?>
	</a>
</strong> -->



<?php if ( !empty( $from ) ) { ?>
	<p style="font:bold 12px Tahoma; float:left; width:100%; text-align:center; margin:15px 0 35px 0; color:#fff;">YOU RECEIVED THIS GIFT CERTIFICATE FROM<br/><font style="color:#fff; text-decoration:none;"><?php echo $sender; ?></font></p>
<?php } ?>
<center><p style="font:italic 14px Georgia; color:#fff; margin-bottom:30px;">Please print this email, and bring it with you on your next visit. Gift Certificates Expire One Year from Date of Issue. You may book your appointments online at 
	<font style="color:#fff; text-decoration:none;"><a href="http://teaseblowdrybar.com" target="_blank" style="color:#fff; text-decoration:none;">TeaseBlowDryBar.com</a></font></p></center>
<div style="clear:both;"></div>

<?php woocommerce_get_template('emails/email-footer.php'); ?>