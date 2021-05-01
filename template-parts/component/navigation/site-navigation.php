<?php
/**
 * 
 * 
 * 
 * 
 * 
 */


$menu_class = '' ;
$menu_items_wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>' ;

if( ! lazy_is_wpam_active() ){
    $menu_class = ' ' . 'lazy-main-navigation' . ' ' ;
    $menu_items_wrap = '<button class="site-header__main-navigation-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-label">'.esc_html__( 'Menu', 'lazy' ).'</span><span class="veganburger"><span class="pain"></span><span class="ketchup"></span><span class="tempeh"></span></span></button><ul id="%1$s" class="%2$s">%3$s</ul>' ;
}


?>
<nav id="site-navigation" class="site-header__main-navigation main-navigation <?php echo $menu_class ; ?>">
    <?php
    wp_nav_menu(

        array(
            'theme_location' => 'primary-menu',
            'menu_id'        => 'primary-menu',

            'container'      => false,
            'items_wrap'     => $menu_items_wrap,

        )
    );
    ?>
</nav><!-- #site-navigation -->