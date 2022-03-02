<?php

/*
echoing out text and more
*/

// simple echo
echo 'Hello World';

// using a template tag
echo get_the_title();
the_title();

// echoing html
<?php get_header(); ?>
<?php // loop opns ?>
<article ID="<?php th_ID(); ?>">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</article>
<?php // loop closes ?>
<?php get_sidebar(); ?>

//alternative using echo
<?php 
get_header();
// loop opens
echo '<article ID="' . get_the_ID() . '">';
echo '<h2>' . get_the_title() . '</h2>';
the_content();
echo '</article>';
// loop closes
get_sidebar();
?>

// internationalization
_e( 'Hello World', 'akh' );

// including variables and text

function akh_get_pages() {

    $args = array(
        'parent' => 0;
        'sort_order' => ASC,
        'sort_column' => 'menu_order'
    );

    $mypages = get_pages( $args );

    echo '<ul class="pagelist">';
    
    foreach ( $mypages as $mypage ) {
        echo '<li><a href="' . get_page_link( $mypage->ID ) . '">' . $mypage->post_title . '</a></li>';
    }
    echo '</ul>';
}