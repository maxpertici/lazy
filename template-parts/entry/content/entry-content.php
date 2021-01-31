<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LAZY
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		/**
		 * Header
		 */
		// get_template_part( 'template-parts/entry/header/entry-header', get_post_type() );

		/**
		 * Post thumbnail
		 */
		// get_template_part( 'template-parts/entry/post-thumbnail/entry-post-thumbnail', get_post_type() );
		
	?>
	<div class="entry-content">
	<?php

		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lazy' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lazy' ),
				'after'  => '</div>',
			)
		);
		
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php lazy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
