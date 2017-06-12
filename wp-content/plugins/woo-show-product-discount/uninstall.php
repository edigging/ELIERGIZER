<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
 
$options_to_delete = apply_filters( 'woo_show_product_discount_alter_options_to_delete', array() );
foreach ($options_to_delete as $option_name) {
	// for site options in Singlesite
	delete_option($option_name);
	// for site options in Multisite
	delete_site_option($option_name);
}
?>