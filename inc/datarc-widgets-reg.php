<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Datarc
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    
function datarc_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'datarc' ),
        'id'            => 'datarc-post-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="m-text23 p-b-34">',
        'after_title'   => '</h4>',
    ) );

    // Woo page sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Woo Page Sidebar', 'datarc' ),
        'id'            => 'datarc-woo-sidebar',
        'before_widget' => '<div id="%1$s" class="widget p-b-54 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="m-text14 p-b-7">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'datarc' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="single-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'datarc' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="single-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'datarc' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="single-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'datarc' ),
        'id'            => 'footer-4',
        'before_widget' => '<div id="%1$s" class="single-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );    
    
}
add_action( 'widgets_init', 'datarc_widgets_init' );
