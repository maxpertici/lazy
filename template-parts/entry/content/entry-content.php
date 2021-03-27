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

// $sidebar_state = apply_filters( 'lazy_state_entry_sidebar', $sidebar_context );

if( is_archive() || is_search() || is_home() ){
	$sidebar_context = false ;
}

$sidebar = lazy_theme_part( 'template-parts/component/sidebar/sidebar', null, null, $sidebar_context ); 

$has_sidebar_class = '';
if( $sidebar != false ){ $has_sidebar_class .= ' post--has-sidebar ';  }


?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $has_sidebar_class ); ?>>
	<?php
	
		/**
		 * Header
		 */
		echo lazy_theme_part( 'template-parts/entry/header/entry-header' );
		
		/**
		 * Post thumbnail
		 */
		echo lazy_theme_part( 'template-parts/entry/post-thumbnail/entry-post-thumbnail' );
		
	?>
	<div class="entry-content">
		<?php

		if( is_home() || is_archive() || is_search()  ){

			$excerpt = get_the_excerpt();
			$excerpt = substr($excerpt, 0, 260);
			$result  = substr($excerpt, 0, strrpos($excerpt, ' '));
			echo '<p>' . $result . '</p>';

			?>			
			<div class="wp-block-buttons paragraph-like">
				<div class="wp-block-button">
				<?php echo '<a class="wp-block-button__link read-more-link" href="'.get_permalink().'">' . __( 'Read more', 'lazy' ) . '</a>'; ?>
				</div>
			</div>
			<?php
			


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
		
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lazy' ),
					'after'  => '</div>',
				)
			);
			
		}

		?>
	</div><!-- .entry-content -->
	<?php

	echo $sidebar ;

	?>
</article><!-- #post-<?php the_ID(); ?> -->
