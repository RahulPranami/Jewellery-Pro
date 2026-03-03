<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewellery_Pro
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || is_woocommerce() || is_shop() || is_product_taxonomy() || is_product() || is_account_page() || is_cart() || is_checkout() ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
