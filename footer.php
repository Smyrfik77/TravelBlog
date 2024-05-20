<footer>
      <div class="container_footer">
        <div class="logo">
          <?php the_custom_logo(); ?>
          <span>Творческое объединение</span>
        </div>
        <div class="social-icons">
          <a href="<?php the_field('ссылка_на_telegram'); ?>" ><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/free-icon-telegram-2111646.png"/></a> <!-- Телеграм -->
          <a href="<?php the_field('ссылка_на_vk');?>" ><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/free-icon-vkontakte-4494517.png"/></a> <!-- ВКонтакте -->
          <a href="<?php the_field('ссылка_на_youtube');?>" ><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/free-icon-youtube-4494485.png"/></a> <!-- YouTube -->
        </div>
      </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>