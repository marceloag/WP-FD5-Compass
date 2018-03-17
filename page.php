<?php get_header(); ?>

  <section id="main">
    <div class="row page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	      <div class="large-10 large-centered columns">
						<?php the_content(); ?>
	      </div>
			<?php endwhile; endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
