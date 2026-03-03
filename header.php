<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewellery_Pro
 */
use Automattic\WooCommerce\Blocks\BlockTypes\MiniCart;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'jewellery-pro'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				if (has_custom_logo()):
					the_custom_logo();
				else:

					if (is_front_page() && is_home()):
						?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
								rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
					else:
						?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
								rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
					endif;
					$jewellery_pro_description = get_bloginfo('description', 'display');
					if ($jewellery_pro_description || is_customize_preview()):
						?>
						<p class="site-description">
							<?php echo $jewellery_pro_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</p>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php $cart_count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>

			<div class="relative group" id="mini-cart-wrapper">
				<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="relative inline-flex items-center"
					aria-label="<?php esc_attr_e('Shopping Cart', 'shree-jewels'); ?>">
					<span class="material-symbols-outlined">shopping_bag</span>
					<?php if (WC()->cart->get_cart_contents_count() > 0): ?>
						<span id="mini-cart-count"
							class="absolute -top-1 -right-1 bg-primary text-white text-[10px] font-bold h-4 w-4 rounded-full flex items-center justify-center">
							<?php echo intval(WC()->cart->get_cart_contents_count()); ?>
						</span>
					<?php endif; ?>
				</a>
				<div id="mini-cart-dropdown"
					class="hidden group-hover:block absolute right-0 mt-4 w-80 bg-white shadow-xl rounded-xl p-4 z-50">
					<?php woocommerce_mini_cart(); ?>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
