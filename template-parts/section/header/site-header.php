<header id="masthead" class="site-header">
    <div class="site-header__inner mw1920p center">
    <?php
    
    get_template_part( 'template-parts/section/header/site-header', 'top-bar' );
    
    ?>
    <div class="site-header__main-bar">
        <?php
        
        get_template_part( 'template-parts/section/header/site-header', 'branding' );

        get_template_part( 'template-parts/component/navigation/site', 'navigation' );
        
        ?>
    </div>

    </div>
</header><!-- #masthead -->