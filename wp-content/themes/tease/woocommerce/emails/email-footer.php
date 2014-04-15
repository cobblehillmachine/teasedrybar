<?php
/**
 * Email Footer
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Load colours
$base = get_option( 'woocommerce_email_base_color' );

$base_lighter_40 = woocommerce_hex_lighter( $base, 40 );

// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline.
$template_footer = "
	border-top:0;
	background-color: #ef4030;
	color:#fff;
	font:normal 13px Tahoma;
";

$credit = "
	border:0;
	font-family: Arial;
	font-size:12px;
	line-height:125%;
	text-align:center;
	color:#fff;
";

$footer_address = "float:left; margin-left:10px; text-align:left; font:normal 13px Helvetica; line-height:18px;";
$footer_social = "float:right; margin-right:10px;";
$social_icon ="float:left; width:20px; height:20px;";

?>
															</div>
														</td>
                                                    </tr>
                                                </table>
                                                <!-- End Content -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Body -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- Footer -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="650" id="template_footer" style="<?php echo $template_footer; ?>">
                                    	<tr>
                                        	<td valign="top">
                                                <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="credit" style="<?php echo $credit; ?>">
                                                        	<div style="<?php echo $footer_address; ?>">
																430 king street<br/>
																charleston, sc 29401<br/>
																<font style="text-decoration:none; color:#fff;"><a style="text-decoration:none; color:#fff;" href="843.724.9493">843.724.9493</a></font><br/>
																<font style="text-decoration:none; color:#fff;"><a href="mailto:info@teaseblowdrybar.com" style="text-decoration:none; color:#fff;">info@teaseblowdrybar.com</a></font>
															</div>
															<div style="<?php echo $footer_social; ?>">
																<a style="<?php echo $social_icon; ?>; margin:3px 30px 0 0;" href="http://www.facebook.com/TeaseDryBar" target="_blank">
																	<img style="border:0; <?php echo $social_img; ?>" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/fb_email.png" />
																</a>
																<a style="<?php echo $social_icon; ?>; margin-right:30px;" href="https://twitter.com/TeaseDryBar" target="_blank">
																	<img style="border:0; <?php echo $social_img; ?>" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/twitter_email.png" />
																</a>
																<a style="<?php echo $social_icon; ?>; margin-right:28px;" href="http://pinterest.com/teasedrybar/" target="_blank">
																	<img style="border:0; <?php echo $social_img; ?>" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/pinterest_email.png" />
																</a>
																<a style="<?php echo $social_icon; ?>;" href="http://web.stagram.com/n/teasedrybar/" target="_blank">
																	<img style="border:0; <?php echo $social_img; ?>" src="http://teaseblowdrybar.com/wp-content/themes/tease/images/instagram_email.png" />
																</a>
														
															</div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Footer -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>