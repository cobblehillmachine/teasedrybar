<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<div class="subtitle">VIEW YOUR CART</div>
<div class="margin-cont">
<p><?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></p>

<?php do_action('woocommerce_cart_is_empty'); ?>

<p><a class="button cart-empty" href="/gift-certificates"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>
</div>