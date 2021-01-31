<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LAZY
 */

if ( ! is_active_sidebar( 'lazy-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'lazy-sidebar' ); ?>
</aside><!-- #secondary -->
