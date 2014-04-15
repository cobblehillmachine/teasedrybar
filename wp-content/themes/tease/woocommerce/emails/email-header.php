<?php
/**
 * Email Header
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Load colours
$bg 		= get_option( 'woocommerce_email_background_color' );
$body		= get_option( 'woocommerce_email_body_background_color' );
$base 		= get_option( 'woocommerce_email_base_color' );
$base_text 	= woocommerce_light_or_dark( $base, '#202020', '#ffffff' );
$text 		= get_option( 'woocommerce_email_text_color' );

$bg_darker_10 = woocommerce_hex_darker( $bg, 10 );
$base_lighter_20 = woocommerce_hex_lighter( $base, 20 );
$text_lighter_20 = woocommerce_hex_lighter( $text, 20 );

// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline. !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
$wrapper = "
	background-color: #fff;
	width:100%;
	-webkit-text-size-adjust:none !important;
	margin:0;
	padding: 70px 0 70px 0;
	font-family: Tahoma;
";
$template_container = "
	-webkit-box-shadow:0 0 0 3px rgba(0,0,0,0.025) !important;
	box-shadow:0 0 0 3px rgba(0,0,0,0.025) !important;
	background-color: " . esc_attr( $body ) . ";
	border: 1px solid $bg_darker_10;

";
$template_header = "
	background-color: #ef4030;
	color: $base_text;

	border-bottom: 0;
	font-weight:bold;
	line-height:100%;
	vertical-align:middle;
";
$body_content = "
	background-color: #2c2c2c;
	color:#fff;
	font:normal 13px Tahoma;
";
$body_content_inner = "
	font-size:14px;
	line-height:150%;
	text-align:left;
";
$header_content_h1 = "
	color: #fff; font:bold 18px Tahoma; margin:20px 0 25px 0;
	line-height: 150%; width:100%; text-align:center;
";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo get_bloginfo('name'); ?></title>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<div style="<?php echo $wrapper; ?>">
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            	<tr>
                	<td align="center" valign="top">
                		<?php
                			if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                				echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name' ) . '" /></p>';
                			}
                		?>
                    	<table border="0" cellpadding="0" cellspacing="0" width="650" id="template_container" style="<?php echo $template_container; ?>">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- Header -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="650" id="template_header" style="<?php echo $template_header; ?>" bgcolor="<?php echo $base; ?>">
                                        <tr>
                                            <td style="text-align:center;">
                                            	<a href="http://teaseblowdrybar.com" target="_blank" style="display:inline-block; margin:40px 0 30px 0;"><img style="border:0;" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/logo.png" /></a>
												<p style="font:normal 11px Helvetica; letter-spacing:0.5px; margin-bottom:20px;">CHARLESTON'S FIRST BLOW DRY BAR</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Header -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- Body -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="650" id="template_body">
                                    	<tr>
                                            <td valign="top" style="<?php echo $body_content; ?>">
                                                <!-- Content -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div style="<?php echo $body_content_inner; ?>">
																<h1 style="<?php echo $header_content_h1; ?>"><?php echo $email_heading; ?></h1>