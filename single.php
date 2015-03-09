<?php get_header(); ?>


<div class="row full single">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <div class="featimg">
  	<div class="large-1 column home">
  		<a href="http://www.icebergs.cl">
  			<img src="<?php bloginfo('template_directory'); ?>/images/iso.png" alt="">
  		</a>
  	</div>
  	<div class="autor">
  		Por: <?php echo get_the_author(); ?> 
  	</div>
  	<div class="overgradient">
  	</div>
    <?php the_post_thumbnail("featpost"); ?>
  </div>

  <div class="large-8 columns large-centered">
    <hr>
    <h1><?php the_title();?></h1>
    <hr>
	
	<div class="thecontent">
		<?php the_content(); ?>
	</div>
	<hr>
	<?php comments_template(); ?>

<?php endwhile; endif; ?>
</div>

</div>

<?php get_footer(); ?>
