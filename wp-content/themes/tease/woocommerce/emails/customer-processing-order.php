<?php
/**
 * Customer processing order email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 


$header_content_title = "
	color: #fff; font:bold 18px Tahoma; margin:40px 0 15px 0;
	line-height: 150%; width:100%; text-align:left;
";
?>

<?php do_action('woocommerce_email_header', $email_heading); ?>

<p style="font:normal 13px Tahoma; flaot:left; width:100%; text-align:center; margin-bottom:45px;">Your order has been received and is now being processed.<br/> Your order details are shown below for your reference:</p>

<?php do_action('woocommerce_email_before_order_table', $order, false); ?>

<!-- <h2><?php// echo __( 'Order:', 'woocommerce' ) . ' ' . $order->get_order_number(); ?></h2> -->

<table cellspacing="0" cellpadding="6" style="width: 100%; border: 1px solid #3a3a3a;" border="1" bordercolor="#3a3a3a">
	<thead>
		<tr>
			<th scope="col" style="text-align:left; border: 1px solid #3a3a3a;"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #3a3a3a;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #3a3a3a;"><?php _e( 'Price', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( $order->is_download_permitted(), true, ($order->status=='processing') ? true : false ); ?>
	</tbody>
	<tfoot>
		<?php
			if ( $totals = $order->get_order_item_totals() ) {
				$i = 0;
				foreach ( $totals as $total ) {
					$i++;
					?><tr>
						<th scope="row" colspan="2" style="text-align:left; border: 1px solid #3a3a3a; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['label']; ?></th>
						<td style="text-align:left; border: 1px solid #3a3a3a; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action('woocommerce_email_after_order_table', $order, false); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, false ); ?>

<h1 style="<?php echo $header_content_title; ?>"><?php _e( 'Customer details', 'woocommerce' ); ?></h1>

<?php if ($order->billing_email) : ?>
	<strong style="font-size:13px; font-family: Tahoma;"><?php _e( 'Email:', 'woocommerce' ); ?></strong> <font style="color:#fff; text-decoration:none;"><?php echo $order->billing_email; ?></font><br/>
<?php endif; ?>
<?php if ($order->billing_phone) : ?>
	<strong style="font-size:13px; font-family: Tahoma;"><?php _e( 'Tel:', 'woocommerce' ); ?></strong> <?php echo $order->billing_phone; ?>
<?php endif; ?>

<?php woocommerce_get_template('emails/email-addresses.php', array( 'order' => $order )); ?>

<?php do_action('woocommerce_email_footer'); ?>