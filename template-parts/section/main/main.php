<main id="primary" class="site-main mw1160p center">
<?php



if( is_404() ){
    echo lazy_theme_part( 'template-parts/section/main/main-error' );

}else{

    echo lazy_theme_part( 'template-parts/section/main/main-content' );
    
}

?>
</main><!-- #main -->

