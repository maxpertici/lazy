<header id="masthead" class="site-header site-header--fixed"><!-- site-header--fixed ? -->

    <div class="site-branding">
        <?php
        
        if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        endif;
        $lazy_description = get_bloginfo( 'description', 'display' );
        if ( $lazy_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $lazy_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->

    <div id="top-site-navigation" class="top-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_id'        => 'top-menu',
            )
        );
        ?>
    </div><!-- #top-site-navigation -->

    <nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary-menu',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->