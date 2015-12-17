<?php get_header(); ?>

<div class="row">
	<div class="large-5 columns">
		<?php the_post_thumbnail("producto"); ?>
	</div>
	<div class="large-7 columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h3><?php the_title(); ?></h3>

		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>

</div>

<?php get_footer(); ?>