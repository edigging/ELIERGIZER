<?php
function enqueue_styles() {
	wp_register_style('mymedia', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style( 'mymedia');

	wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style( 'fonts');

	wp_register_style('jquery.formstyler', get_template_directory_uri() . '/css/jquery.formstyler.css');
	wp_enqueue_style( 'jquery.formstyler');

	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'flexslider');

	wp_register_style('jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox-1.3.4.css');
	wp_enqueue_style( 'jquery.fancybox');

	wp_register_style('select2', get_template_directory_uri() . '/css/select2.min.css');
	wp_enqueue_style( 'select2');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

define('WOOCOMMERCE_USE_CSS', false);

add_theme_support( 'woocommerce' );

function woo_style() {
wp_register_style( 'my-woocommerce', get_template_directory_uri() . '/css/woocommerce.css', null, 1.0, 'screen' );
wp_enqueue_style( 'my-woocommerce' ); } add_action( 'wp_enqueue_scripts', 'woo_style' );

function woo2_style() {
wp_register_style( 'my-woocommerce-layout', get_template_directory_uri() . '/css/woocommerce-layout.css', null, 1.0, 'screen' );
wp_enqueue_style( 'my-woocommerce-layout' ); } add_action( 'wp_enqueue_scripts', 'woo2_style' );


add_action( 'wp_enqueue_scripts', 'my_scripts_method', 99 );
function my_scripts_method() {
	// получаем версию jQuery
	wp_enqueue_script( 'jquery' );
	// для версий WP меньше 3.6 'jquery' нужно поменять на 'jquery-core'
	$wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver;
	$jquery_ver = $wp_jquery_ver == '' ? '1.11.0' : $wp_jquery_ver;

	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/'. $jquery_ver .'/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}

function enqueue_scripts () {

	wp_register_script('jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox-1.3.4.js');
	wp_enqueue_script('jquery.fancybox');

	wp_register_script('jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
	wp_enqueue_script('jquery.flexslider');

	wp_register_script('jquery.formstyler', get_template_directory_uri() . '/js/jquery.formstyler.js');
	wp_enqueue_script('jquery.formstyler');

	wp_register_script('myscripts', get_template_directory_uri() . '/js/myscripts.js');
	wp_enqueue_script('myscripts');

	wp_register_script('select2', get_template_directory_uri() . '/js/select2.min.js');
	wp_enqueue_script('select2');

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
/**
 * Storefront engine room
 *
 * @package storefront
 */



/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_action( 'init', 'custom_remove_footer_credit', 10 );
 
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 
 
function custom_storefront_credit() {
	?>
	<div class="site-info"><span>ALL RIGHTS RESERVED, 
	<?php echo get_bloginfo( 'name' ) . ' &copy; ' . get_the_date( 'Y' ); ?></span>
	</div><!-- .site-info -->
	<?php
}
add_shortcode( 'cat_desc', 'cat_desc' );
function cat_desc($attr, $text=''){
	echo "<img class='wp-post-image' src='{$attr['src']}' alt=''>";
	echo $text;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }           
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
};

//количество выводимых на странице товаров
add_filter('loop_shop_per_page', create_function('$cols', 'return 6;'));

//!!! Изменяем количество колонок
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
return 3;
}
}

// Изменяем количество похожих товаров
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
 function jk_related_products_args( $args ) {
 
 $args['posts_per_page'] = 3; // количество "Похожих товаров"
 $args['columns'] = 3; // количество колонок
 return $args;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'storefront_single_post_bottom', 'storefront_display_comments', 20 );
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20);


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15 );

add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_title', 15 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_after_single_product', 'woocommerce_template_single_meta', 5 );

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_review_order_after_shipping', 'woocommerce_checkout_payment', 5 );


add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +

function woo_custom_product_add_to_cart_text() {
  
    return __( 'Купить', 'woocommerce' );
  
}

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
  
function woo_custom_single_add_to_cart_text() {
  
    return __( 'Купить', 'woocommerce' );
  
}


add_filter( 'woocommerce_get_breadcrumb', '__return_false' );


add_action( 'woocommerce_single_product_summary', "my_acf_load_value", 7 );
function my_acf_load_value( $value) {

  	 if (qtranxf_getLanguage() == 'ru') {
			echo '<span class="rezultat-text"><span class="rezultat-title">Результат:</span>'.get_field('rezultat').'</span>';
		}

		if (qtranxf_getLanguage() == 'en') {
			echo '<span class="rezultat-text"><span class="rezultat-title">Result:</span>'.get_field('rezultat-en').'</span>';
		}
	
}







function cart_more_buttons() {
echo '<a href="http://ваш_сайт.ru/shop/"> ← Продолжить покупки</a><a href="http://ваш_сайт.ru/checkout/">Оформить заказ →</a>';
}
add_action ('woocommerce_after_cart_totals', 'cart_more_buttons', 5);


/*add_filter('woocommerce_checkout_fields','remove_checkout_fields');
function remove_checkout_fields($fields){
    //unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['account']['account_username']);
    //unset($fields['account']['account_password']);
    //unset($fields['account']['account_password-2']);
    return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'new_woocommerce_checkout_fields', 10, 1 );
 
function new_woocommerce_checkout_fields($fields){
    
    $fields['billing']['billing_address_1']['label']="Адрес доставки";
    $fields['billing']['billing_city']['label']="Город доставки";
    
    return $fields;
}*/