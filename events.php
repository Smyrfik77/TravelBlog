<?php
/*
Template Name: events
*/
?>

<?php get_header(); ?>

        <main>
          
          <div class="mapWorld_heading">

            
            <div class="eventList">

              <h4 class="heading element-animation">Скоро отправляемся</h4>

              <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'category'    => array(2),
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
              ?>
                <div class="event element-animation">
                <div class="eventImgDiv">
                  <?php the_post_thumbnail('full',
                    array(
                      'class' => 'eventImg',
                    )
                  ); ?>
                </div>
                <div class="textEvent">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_content(); ?></p>
                </div>        
              </div>
              <?php } } wp_reset_postdata(); // Сбрасываем $post?>
                              


            </div>

            <div>
              <h4 class="headingWorld">Карта Мира</h4>
              <div class="mapWorld_img"><img src="<?php bloginfo('template_url'); ?>/assets/img/event/T0jA2t1.jpeg " alt="" class="map_world"></div> 
            </div>


          </div>
        </main>  

<?php get_footer(); ?>