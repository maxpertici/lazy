<div class="site-info">
<div class="site-info__inner mw1920p center">
    <?php

    do_action( 'lazy_site_footer__info__before' );

    $state = apply_filters( 'lazy_state_site_footer_info', get_post_type() );
    if( false !==  $state ){ ?>
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

    }
    ?>
</div>
</div><!-- .site-info -->