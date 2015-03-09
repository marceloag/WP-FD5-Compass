<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

<section id="main" class="full">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
      <div class="large-2 columns">
              <div class="rss">
                <a href="https://www.facebook.com/icebergsie"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/IcebergsIE"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UC9tZBOaI8tNFMTyHo1mFY6A"><i class="fa fa-youtube"></i></a>
              </div>
      </div>
      <div class="large-3 column quees">
        <a href="" data-reveal-id="iceberg"><i class="fa fa-question-circle"></i> ¿Que es ICEBERG?</a>
      </div>
</div>

 <div class="inside">
         <div class="row">
           <div class="large-6 columns large-centered">
              <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Iceberg IE" class="logo">
              <hr>
              <div class="htcontainer">

                <div class="hometext"><?php the_excerpt(); ?></div>
              
              </div>
           </div>
         </div>

          <div id="noticias">
            <div class="row">
              <ul class="large-block-grid-4">
                <?php query_posts('orderby=date&order=desc&category_name=noticias&showposts=4'); ?>
                  <?php while (have_posts()) : the_post(); ?>
                      <li class="noticia">
                        <a href="<?php the_permalink();?>">
                          <?php the_post_thumbnail("homenoticia"); ?>
                          <h2><?php the_title();?></h1>
                        </a>
                      </li>
                  <?php endwhile;?> 
                <?php wp_reset_query(); ?>
              </ul>
            </div>
          </div>
    </div>

<!-- Modal -->

<div id="iceberg" class="reveal-modal large" data-reveal>

<h1><?php the_title();?></h1>

<?php the_content()?>
<?php endwhile; endif; ?>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- /Modal -->
</section>

<?php get_footer(); ?>
