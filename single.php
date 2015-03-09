<?php get_header(); ?>

<div class="row full single">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <div class="featimg">
  	<div class="large-1 column home">
  		<a href="http://www.icebergs.cl"><img src="images/iso.png" alt=""></a>
  	</div>
  	<div class="autor">
  		Por: Sebastián Saavedra
  	</div>
  	<div class="overgradient">
  	</div>
    <?php the_post_thumbnail("featpost"); ?>
  </div>

  <div class="large-8 columns large-centered">
    <hr>
    <h1><?php the_title();?></h1>
    <hr>

	<?php the_content(); ?>
	<hr>
	<?php comments_template(); ?>

<?php endwhile; endif; ?>
</div>

</div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>

</html>