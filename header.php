<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset= <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

  </head>
  <body>
    <!-- ХЕДЕР -->
    <header>
      <div class="container_header">
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav class="menu">
          <ul>
            <li><a href="<?php echo home_url('journal'); ?>">Личный дневник</a></li>
            <li><a href="<?php echo home_url('events'); ?>">События</a></li>
            <li><a href="<?php echo home_url('gallery'); ?>">Фотоальбом</a></li>
            <li><a href="<?php echo home_url('biography'); ?>">Биография</a></li>
          </ul>
        </nav> 
      </div>
    </header>