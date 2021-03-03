<?php

/* Start the Loop */
while ( have_posts() ) :
			
    the_post();

    /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
    echo lazy_theme_part( 'template-parts/entry/content/entry-content', get_post_type() );

endwhile;

lazy_posts_navigation();