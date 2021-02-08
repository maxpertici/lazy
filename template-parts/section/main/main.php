<main id="primary" class="site-main mw1160p center">
	<?php
	
	if ( have_posts() ) :

		get_template_part( 'template-parts/component/title/page', 'title' );
		get_template_part( 'template-parts/component/post-list/loop', '' );

	else :
		get_template_part( 'template-parts/entry/content/entry-content', 'none' );

	endif;
	
	?>
</main><!-- #main -->