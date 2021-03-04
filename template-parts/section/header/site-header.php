<header id="masthead" class="site-header">
    <div class="site-header__inner mw1920p center">
    <?php
    
    echo lazy_theme_part( 'template-parts/section/header/site-header-top-bar' );
    
    ?>
    <div class="site-header__main-bar">
        <?php
        
        echo lazy_theme_part( 'template-parts/section/header/site-header-branding' );

        echo lazy_theme_part( 'template-parts/component/navigation/site-navigation' );
        
        ?>
    </div>

    </div>
</header><!-- #masthead -->