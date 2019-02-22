<article <?php post_class('post clearfix'); ?>>
	<div class="column fivecol post-image">
		<?php get_template_part('content', 'course-item'); ?>
	</div>
	<div class="course-description column sevencol last">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_excerpt(); ?>
	</div>
</article>
