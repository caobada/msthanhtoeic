<article <?php post_class('post clearfix'); ?>>
	<div class="column fivecol post-image">
		<?php get_template_part('content', 'course-item'); ?>
	</div>
	<div class="post-content course-description column sevencol last">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php  
		 echo ThemexCourse::getCertificate(ThemexCourse::$data["ID"],ThemexCourse::$data["uses"])['content']; 

		//  if(isset($GLOBALS['content'])) {
		// 	 echo $GLOBALS['content'];
		//  } else {
		// 	 the_content();
		//  }
		
		 ?>
 	<footer class="post-footer">
			<a href="<?php the_permalink(); ?>" class="element-button small"><?php _e('Đọc thêm','academy'); ?></a>
			<?php if(comments_open()) { ?>
			<div class="post-comment-count"><?php comments_number('0','1','%'); ?></div>
			<?php } ?>
		</footer>
	</div>
</article>
