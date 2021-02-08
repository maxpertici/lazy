<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LAZY
 */


$sidebar_context =  get_post_type() ;
if( $sidebar_context !=  'post' ){ $sidebar_context = false ; }
$sidebar_state = apply_filters( 'lazy_state_entry_sidebar', $sidebar_context );

if( is_archive() || is_search() || is_home() ){
	$sidebar_state = false ;
}

$has_sidebar_class = '';
if( $sidebar_state != false ){ $sidebar_state .= ' post--has-sidebar '; }

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $sidebar_state ); ?>>
	<?php
	
		/**
		 * Header
		 */
		$state = apply_filters( 'lazy_state_entry_header', get_post_type() );
		if( false !==  $state ){
			get_template_part( 'template-parts/entry/header/entry-header', $state );
		}

		/**
		 * Post thumbnail
		 */
		$state = apply_filters( 'lazy_state_entry_post_thumbnail', get_post_type() );
		if( false !==  $state ){
			get_template_part( 'template-parts/entry/post-thumbnail/entry-post-thumbnail', $state );
		}
		
	?>
	<div class="entry-content">
	<?php

		if( is_home() || is_archive() || is_search()  ){

			$excerpt = get_the_excerpt();
			$excerpt = substr($excerpt, 0, 260);
			$result = substr($excerpt, 0, strrpos($excerpt, ' '));
			echo '<p>' . $result . '</p>';

		}else{

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
		}

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lazy' ),
				'after'  => '</div>',
			)
		);
		
		?>
		<footer class="entry-footer">
			<?php lazy_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->
	<?php

	if( false !==  $sidebar_state ){
		get_template_part( 'template-parts/component/sidebar/sidebar', $sidebar_state ); 
	}

	?>
	
</article><!-- #post-<?php the_ID(); ?> -->
