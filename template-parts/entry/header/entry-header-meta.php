<?php
/**
 * 
 * 
 * 
 * 
 * 
 */

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
