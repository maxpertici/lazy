<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LAZY
 */

get_header();

if( is_404() ){
    get_template_part( 'template-parts/section/main/main', '404' );
}else{
    get_template_part( 'template-parts/section/main/main', '' );
}

get_template_part( 'template-parts/section/header/site-header', '' );

get_footer();
