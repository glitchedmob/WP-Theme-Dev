<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dev-theme
 */

if ( ! is_active_sidebar( 'footer-widget-area-1' ) ) {
	return;
}
?>

<aside id="footer-widget-area" class="widget-area footer-widgets" role="complementary">
	<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
</aside><!-- #secondary -->
