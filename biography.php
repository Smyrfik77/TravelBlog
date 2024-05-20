<?php
/*
Template Name: biography
*/
?>

<?php get_header(); ?>

        <main>
          <div class="container_main_biography">
              <div class="biography">
                  <div class="biography_a">
                    <a href=""><img src="<?php the_field('фото'); ?>" alt="" class="avatar"></a>
                  </div>
                  <div class="biographyText">
                      <h2 class="biographyTitle"><?php the_field('фио'); ?></h2>
                      <p class="biographyDescription">
                      <?php the_field('биография'); ?>
                      </p>
                      <h2 class="biographyTitle"><?php the_field('любимая_фраза'); ?></h2>            
                  </div>
              </div>
          </div>
        </main>    

<?php get_footer(); ?>
