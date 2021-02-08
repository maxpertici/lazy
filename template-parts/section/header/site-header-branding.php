<div class="site-header__branding site-branding">
    <?php

    // 
    do_action( 'lazy_site_header__branding__before' );
    
    // site title
    $state = apply_filters( 'lazy_state_site_title', get_post_type() );
    if( false !==  $state ){

        if ( is_front_page() && is_home() ) {
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
        }else{
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        }
    }

    // site description
    $state = apply_filters( 'lazy_state_site_description', get_post_type() );
    if( false !==  $state ){
        $lazy_description = get_bloginfo( 'description', 'display' );
        if ( $lazy_description ) {
        ?>
        <p class="site-description"><?php echo $lazy_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
    <?php } } ?>

</div><!-- .site-branding -->