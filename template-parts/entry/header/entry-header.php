<header class="entry-header">
<?php

    if ( is_singular() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
    else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;

    if ( 'post' === get_post_type() ) {
        ?>
        <div class="entry-meta">
            <?php
            lazy_posted_on();
            lazy_posted_by();
            ?>
            <footer class="entry-footer">
            <?php lazy_entry_footer(); ?>
            </footer>
        </div><!-- .entry-meta -->
        <?php
    }
    
?>
</header><!-- .entry-header -->