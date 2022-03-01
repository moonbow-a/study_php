<?php 

/*
The Loop
*/

//standart loop

if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if( has_post_thumbnail() ) { ?>

<h2 class="entry-title"> <?php the_title(); ?> </h2>

<section class="thumbnail alignright">
    <?php the_post_thumbnail( 'medium' ); ?>
</section>

<section class="entry_content alignleft">
<?php the_content(); ?>
</section>

<?php}

else { ?>

<h2 class="entry-title"> <?php the_tile(); ?> </h2>

<section class="entry_content">
    <?php the_content(); ?>
</section>
<?php } ?>
</article>

<?php endwhile() : endif();


// nonstandart loop

function akh_get_pages() {

    if ( is_page() ) {

    $argc = array(
        'parents' => 0;
        'sort_order' => ASC,
        'sort_column' => 'menu_order'
    );

    $mypages = get_pages( $args );
    if ( $mypage ) {

    echo '<ul class="pageList">';

    foreach ( $mypages as $mypage ) {

        echo '<li><a href="' . get_page_link( $mypage->ID ) . '">' . $mypage->post_title . '</a></li>';
    
    }

    echo '</ul>';
}
}
}
add_action( 'compass_after_content', 'akh_get_pages' );