<?php
/*
Template Name: journal
*/
?>

<?php get_header(); ?>

<main>
          <div id="container" class="container">	
      
            <div class="bb-custom-wrapper">
              <div id="bb-bookblock" class="bb-bookblock">


<?php
              global $post;
              $myposts = get_posts([
                  'numberposts' => -1,
                  'category'    => array(9),
                  'order'       => 'ASC',
              ]);

                if ($myposts) {
                    $count = 1; 
                    foreach ($myposts as $post) {
                        setup_postdata($post);
?>

        <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                    
        <div class="bb-item" id="item1">
            <div class="content">
                <div class="scroller">
                    <h2>Страница <?php echo $count; ?></h2>
                    <div class="image-container">
                        <div class="divMapImg">
                            <?php the_post_thumbnail('full', array('class' => 'map_img')); ?>
                        </div>
                        <div class="divMapImg">
                            <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', null, 'full', array('class' => 'map_img')); endif; ?>
                        </div>
                    </div>
                    <div class="text-container">
                        <h3 class="zagolovok"><?php the_title() ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>

<?php
        $count++;
} }
wp_reset_postdata(); 

?>



                <!-- <div class="bb-item" id="item1">
                  <div class="content">
                    <div class="scroller">
                      <h2>Страница 1</h2>
                      <div class="image-container">
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/1/map1.jpg" alt="" class="map_img"></div>
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/1/ostrov1.webp" alt="" class="map_img"></div>
                      </div>

                      <div class="text-container">
                        <h3 class="zagolovok">Бедственное положение Грабителя</h3>
                        <p>Бедственное положение Грабителя - это небольшой остров, расположенный в районе Диких земель с координатами Q-6.
                          Остров состоит в основном из песка и скал, с редкими участками растительности.
                          <br><br>
                          Особенности измененного источника
                          Особенности острова:<br>Свиньи<br>5 Бочек с ресурсами</p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="bb-item" id="item2">
                  <div class="content">
                    <div class="scroller">
                      <h2>Страница 2</h2>
                      <div class="image-container">
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/2/map2.jpg" alt="" class="map_img"></div>
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/2/ostrov2.webp" alt="" class="map_img"></div>
                      </div>

                      <div class="text-container">
                        <h3 class="zagolovok">Остров Олд Фейтфул</h3>
                        <p>Остров Олд Фейтфул (Old Faithful Isle) - это большой остров, расположенный в пустыне с координатами М-4.

                          Остров многоуровневый, и большая часть его береговой линии покрыта высокими скалами. На севере и юге можно найти небольшие пляжные площадки, а на востоке - пляж побольше, защищенный пушечными башнями. Вокруг острова построено несколько заброшенных укрепленных сооружений
                        <br>

                        </p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="bb-item" id="item3">
                  <div class="content">
                    <div class="scroller">
                      <h2>Страница 3</h2>
                      <div class="image-container">
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/3/map3.webp" alt="" class="map_img"></div>
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/3/ostrov3.webp" alt="" class="map_img"></div>
                      </div>

                      <div class="text-container">
                        <h3 class="zagolovok">Лагуна Шепота</h3>
                        <p>Лагуна Шепота - это небольшой остров, расположенный в районе Берегов Изобилия с координатой D-12.

                          Остров разделен на четыре небольшие части, в двух самых больших из которых есть растительность и большие валуны. Здесь находится тату-салон Umbra, что позволяет игрокам приобретать татуировки в этом месте при условии, что они выполнили соответствующие требования к Legends of the Sea.</p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="bb-item" id="item4">
                  <div class="content">
                    <div class="scroller">
                      <h2>Страница 4</h2>
                      <div class="image-container">
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/4/map4.jpg" alt="" class="map_img"></div>
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/4/ostrov4.webp" alt="" class="map_img"></div>
                      </div>

                      <div class="text-container">
                        <h3 class="zagolovok">Хребет Лжеца</h3>
                        <p>Хребет Лжеца - это небольшой остров, расположенный в регионе Уайлдс с координатами S-11. Этот остров в основном окружен скалами с отколовшимися от него островками поменьше. 
                          Это возвышенный остров с несколькими участками растительности. 
                          На острове также есть логово Вышивальщика Джима в скрытой пещере под островом.
                          <br><br>
                          Во время Отрекшихся берегов можно было найти Вышивальщика Джима, который прятался на острове. Во время Небылицы Сердце огня" выяснилось, что Вышивальщик Джим устроил убежище в скрытых пещерных сооружениях острова. Внутри игроки могут найти различные глифы-скелеты, вырезанные на стенах, дневник, написанный Джимом, и святилище, посвященное капитану Пламенное Сердце.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="bb-item" id="item5">
                  <div class="content">
                    <div class="scroller">
                      <h2>Страница 5</h2>
                      <div class="image-container">
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/5/map5.webp" alt="" class="map_img"></div>
                        <div class="divMapImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/journal/5/ostrov5.webp" alt="" class="map_img"></div>
                      </div>

                      <div class="text-container">
                        <h3 class="zagolovok">Остров Полумесяца</h3>
                        <p>Остров Полумесяца - это большой остров, расположенный в регионе Берегов Изобилия с координатами B-9.
                          Остров назван в честь своей формы полумесяца, с большой бухтой с причалом к северу и системой пещер, прорезающих его центр и ответвляющихся как на север, так и на юг.
                          <br><br>
                          Особенности острова:<br>Свиньи<br>Змеи<br>Древнее хранилище (Луна), расположенное в северной системе пещер, куда можно попасть через центральный туннель.<br>2 Сундука с боеприпасами<br>В туннеле центральной пещеры.<br>Самая южная скала.<br>2 Костра<br>Центральная пещера.<br>Пляж, обращенный к южной стороне.
                        </p>
                      </div>
                    </div>
                  </div>
                </div> -->


              </div>             
            </div>
          </div>    
        </main>  
        <nav id="book-navigation">
          <button id="bb-nav-prev">&larr;</button>
          <button id="bb-nav-next">&rarr;</button>
        </nav>  

<?php get_footer(); ?>