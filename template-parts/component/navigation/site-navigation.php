<nav id="site-navigation" class="site-header__main-navigation main-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary-menu',
            'menu_id'        => 'primary-menu',
            'container'      => false,
        )
    );
    ?>
</nav><!-- #site-navigation -->