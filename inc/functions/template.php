<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package LAZY
 */



/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

 if( ! function_exists('lazy_body_classes') ){

    function lazy_body_classes( $classes ) {
        // Adds a class of hfeed to non-singular pages.
        if ( ! is_singular() ) {
            $classes[] = 'hfeed';
        }

        if( is_singular() ){
            $classes[] = 'singular';
        }

        // Adds a class of no-sidebar when there is no sidebar present.
        if ( ! is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }

        return $classes;
    }
}
add_filter( 'body_class', 'lazy_body_classes' );



/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
if( ! function_exists('lazy_pingback_header') ){

    function lazy_pingback_header() {
        if ( is_singular() && pings_open() ) {
            printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
        }
    }
}
add_action( 'wp_head', 'lazy_pingback_header' );





/**
 * 
 * 
 * 
 */
if( ! function_exists('lazy_archive_title') ){

    function lazy_archive_title( $title ) {
        if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        } elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        } elseif ( is_tax() ) {
            $title = single_term_title( '', false );
        }

        return $title;
    }
}
 
add_filter( 'get_the_archive_title', 'lazy_archive_title' );





/**
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */
if( ! function_exists('lazy_theme_part') ){

    function lazy_theme_part( $part  = null, $slug = null , $args = null , $context = null ){

        // site title
        if( is_null( $part)     ){ $part    = '';      }
        if( is_null( $slug )    ){ $slug    = '';      }
        if( is_null( $args )    ){ $args    = array(); }
        if( is_null( $context ) ){ $context = '';      }
        
        $match =  $part . '-' . $slug ;

        // $part
        if( $part  !=  '' ){ $part = apply_filters( "lazy_theme_part_{$part}_part", $part );  }
        if( $slug  !=  '' ){ $part = apply_filters( "lazy_theme_part_{$slug}_part", $part );  }
        if( $match != '-' ){ $part = apply_filters( "lazy_theme_part_{$match}_part", $part ); }
        
        // $slug
        if( $part  !=  '' ){ $slug = apply_filters( "lazy_theme_part_{$part}_slug", $slug );  }
        if( $slug  !=  '' ){ $slug = apply_filters( "lazy_theme_part_{$slug}_slug", $slug );  }
        if( $match != '-' ){ $slug = apply_filters( "lazy_theme_part_{$match}_slug", $slug ); }

        // $args filter
        if( $part  !=  '' ){ $args = apply_filters( "lazy_theme_part_{$part}_args", $args );  }
        if( $slug  !=  '' ){ $args = apply_filters( "lazy_theme_part_{$slug}_args", $args );  }
        if( $match != '-' ){ $args = apply_filters( "lazy_theme_part_{$match}_args", $args ); }

        // $context filters
        if( $part  !=  '' ){ $context = apply_filters( "lazy_theme_part_{$part}_context", $context );  }
        if( $slug  !=  '' ){ $context = apply_filters( "lazy_theme_part_{$slug}_context", $context );  }
        if( $match != '-' ){ $context = apply_filters( "lazy_theme_part_{$match}_context", $context ); }
        
        ob_start();
        
        // action
        if( $part  !=  '' ){ do_action( "lazy_theme_part_{$part}_before" );  }
        if( $slug  !=  '' ){ do_action( "lazy_theme_part_{$slug}_before" );  }
        if( $match != '-' ){ do_action( "lazy_theme_part_{$match}_before" ); }

        // get_template_part
        if( isset( $context ) && ( $context !== false )  ){

            if( $context != '' ){
                get_template_part( $part, $slug . '-' . $context ,  $args );

            }else{
                get_template_part( $part, $slug, $args );
            }

        }

        // action
        if( $part  !=  '' ){ do_action( "lazy_theme_part_{$part}_after" );  }
        if( $slug  !=  '' ){ do_action( "lazy_theme_part_{$slug}_after" );  }
        if( $match != '-' ){ do_action( "lazy_theme_part_{$match}_after" ); }

        $return =  ob_get_clean();

        if( $return == '' ){ return false ; }

        return $return ;
    }
}