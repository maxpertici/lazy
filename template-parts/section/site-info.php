<div class="site-info">

    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lazy' ) ); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'lazy' ), 'WordPress' );
        ?>
    </a>
    <span class="sep"> | </span>
    <?php
    /* translators: 1: Theme name, 2: Theme author. */
    printf( esc_html__( 'Theme: %1$s by %2$s.', 'lazy' ), 'LAZY', '<a href="https://m.pertici.fr">maxpertici</a>' );
    ?>
</div><!-- .site-info -->