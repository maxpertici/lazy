<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LAZY
 */

?>

	<footer id="colophon" class="site-footer">
		
		<?php get_template_part( 'template-parts/section/footer-navigation', '' ); ?>

		<?php get_template_part( 'template-parts/section/site-info', '' ); ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
