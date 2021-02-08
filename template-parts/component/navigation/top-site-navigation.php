<div id="top-site-navigation" class="top-navigation site-header__top-bar-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_id'        => 'top-menu',
            'container'      => false,
        )
    );
    ?>
</div><!-- #top-site-navigation -->