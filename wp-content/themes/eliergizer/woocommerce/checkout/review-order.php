<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="333">
	
</div>
<table class="shop_table woocommerce-checkout-review-order-table">
	<thead>
		
	</thead>
	<tbody>

	</tbody>
	<tfoot>

		<tr>
			<td class="total-title-td">
			<?php if(qtranxf_getLanguage() == 'ru') { ?>
				       ИТОГО
				    <?php } elseif (qtranxf_getLanguage() == 'en') { ?>
				       TOTAL
				    <?php } ?>
			</td>
			<td></td>
		</tr>
		<tr class="cart-subtotal">
			<td><?php echo WC()->cart->get_cart_contents_count().' товар(ов) на сумму:'; ?></td>
			<td class="cost-right"><?php wc_cart_totals_subtotal_html(); ?> руб.</td>
		</tr>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>

		

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td><?php echo wp_kses_post( $tax->formatted_amount ); ?> .руб</td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

		<tr>
			<td colspan="2">
				<div class="line-table"></div>
			</td>
		</tr>

		<tr class="order-total">
			<td>К оплате</td>
			<td class="order-total-text"><?php wc_cart_totals_order_total_html(); ?> руб.</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="form-row place-order but-pay">
					<?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Заказ подтверждаю" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p class="last-p">Подтверждая заказ, я принимаю условия пользовательского соглашения</p>
			</td>
		</tr>

		


	</tfoot>
</table>
<?php wp_reset_query(); ?>




