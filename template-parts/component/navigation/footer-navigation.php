<div id="footer-navigation" class="footer-navigation">
<div class="footer-navigation__inner mw1920p center">
    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menu',
            'menu_id'         => 'footer-menu',
            'container'       => false,
            'menu_class' => 'menu footer-navigation__menu'
        )
    );
    ?>
</div>
</div><!-- #footer-site-navigation -->