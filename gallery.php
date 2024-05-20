<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>

        <main>
        <h1 class="title" >Фотоальбом</h1>
            <section class="gallery">
            <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'category'    => array(3),
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
              ?>

                <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/1.jpg">
                <?php the_post_thumbnail('full',
                    array(
                      'class' => 'gallery-Img',
                    )
                  ); ?>
                </a>

              <?php } } wp_reset_postdata(); // Сбрасываем $post?>

            </section>
        </main>  

<?php get_footer(); ?>