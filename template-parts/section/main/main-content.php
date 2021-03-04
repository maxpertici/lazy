<?php

/**
 * 
 * 
 * 
 * 
 * 
 */
if ( have_posts() ) :

    echo lazy_theme_part( 'template-parts/component/title/page-title' );

    echo lazy_theme_part( 'template-parts/component/post-list/loop'   );
    
else :

    echo lazy_theme_part( 'template-parts/entry/content/entry-content', 'none' );

endif;