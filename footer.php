<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewellery_Pro
 */

?>
</div>

<footer id="colophon" class="site-footer">
	<div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
		<div class="flex flex-col gap-4">
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
		</div>
		<div>
			<h3 class="font-bold text-text-main mb-4 uppercase tracking-wider text-sm">Shop</h3>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-shop',
					'container' => false,
				)
			);
			?>
		</div>
		<div>
			<h3 class="font-bold text-text-main mb-4 uppercase tracking-wider text-sm">Support</h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-support',
					'container' => false,
				)
			);
			?>
		</div>
	</div>
	<div
		class="border-t border-[#e5e5e5] pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-400">
		<p>© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
		<div class="legal-links flex gap-4">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-legal',
					'container' => false,
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</div>
	</div>
</footer>
</div>


<?php wp_footer(); ?>

</body>

</html>