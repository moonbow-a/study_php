<?php
/*******************************************************
 Guide to writing functions in WordPress
 ******************************************************/

 // a basic function

function alinakh_say_hello() {

echo 'Hello World';

}
add_action( 'compass_after_header', 'alinakh_say_hello', 20);

function akh_today_date() {
    
    echo date( 'l jS F Y');

}
add_action( 'compass_after_header', 'akh_today_date', 10);


 //a pluggable function

 if ( ! function_exists( 'alinakh_grumpy' ) ) {
     function alinakh_grumpy() {
         echo 'I\'m not in a good mood today, I\'m not going to say hello.';
     }
 }
 add_action( 'compass_after_header', 'alinakh_grumpy', 30)

 function alinakh_register_widgets() {

    //Sidebar widget area.
    register_sidebar( array(
        'name' => __( 'Sidebar Widget Area', 'alinakh' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'Widget area that appears in the sidebar.', 'alinakh' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
 }
 add_action( 'widget_init', 'alinakh_register_widgets' );

 echo apply_filters( 'akh_new_filter', '<h3>Latest posts</h3>' );

 functionakh_new_heading() {

    '<h3>My Latest Posts</h3>'
 }
 add_filter( 'akh_new_filter', 'akh_new_heading' );
