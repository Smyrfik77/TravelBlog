<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

    <!-- ПЕРВАЯ КАРТИНКА ЗАСТАВА -->
    <div class="bgimg-1">
      <div class="caption">
        <span class="border"><?php the_field('заголовок'); ?></span>
  
      </div>
    </div>

    <!-- ТЕКСТ ПОСЛЕ КАРТИНКИ -->
    <div style="color: #777; background-color: #222; text-align: center; padding: 50px 80px; text-align: justify;">
      <h3 style="text-align: center; color: #fff;">ВСТУПЛЕНИЕ</h3>
      <p style="margin-bottom: 40px;">
      <?php the_field('вступление'); ?>
      </p>
    </div>

    <!-- ВТОРАЯ КАРТИНКА (СТРЕЛКА ЛЕВО) -->
    <div class="bgimg-2">
      <div class="opacity"></div>
        <div class="content-blog-left element-animation">
          <h2>Мой личный дневник</h2>
          <p>Здесь я собрал все места, которые я успел <br> посетить.</p>
          <a href="<?php echo home_url('journal'); ?>"><button class="a_button" >Посмотреть</button></a>
        </div>          
    </div>

    <!-- 3 КАРТИНКА СТРЕЛКА ПРАВО -->
    <div class="bgimg-3">
      <div class="opacity"></div>
        <div class="content-blog-right element-animation">
          <h2>Куда держим путь?</h2>
          <p>Если ты искренне интересуешься, останься здесь и узнай все первым.</p>
          <a href="<?php echo home_url('events'); ?>"><button class="a_button" >Посмотреть</button></a>
        </div>
    </div>

    <!-- ТЕКСТ -->
    <div style="color: #777; background-color: #222; text-align: center; padding: 50px 80px; text-align: justify;">
      <h3 style="text-align: center; color: #fff;">СОВЕТ</h3>
      <p style="margin-bottom: 40px; text-align: center;">
      <?php the_field('совет'); ?>
      </p>
    </div>

    <!-- КОНЕЦ -->
    <div class="bgimg-1">
      <div class="caption">
      </div>
    </div>

<?php get_footer(); ?>


