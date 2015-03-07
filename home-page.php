<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

 <div class="inside">
         <div class="row">
           <div class="large-6 columns large-centered">
              <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Iceberg IE" class="logo">
              <hr>
              <div class="htcontainer">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="hometext"><?php the_excerpt(); ?></div>
              <?php endwhile; endif; ?>
              </div>
           </div>
         </div>

          <div id="noticias">
            <div class="row">
              <ul class="large-block-grid-4">
                <li><img src="http://fakeimg.pl/700x400/00CED1/FFF/?text=img+placeholder"></li>
                <li><img src="http://fakeimg.pl/700x400/00CED1/FFF/?text=img+placeholder"></li>
                <li><img src="http://fakeimg.pl/700x400/00CED1/FFF/?text=img+placeholder"></li>
                <li><img src="http://fakeimg.pl/700x400/00CED1/FFF/?text=img+placeholder"></li>
              </ul>
            </div>
          </div>
    </div>


<?php get_footer(); ?>
