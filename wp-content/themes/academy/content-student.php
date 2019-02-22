<article <?php post_class('post clearfix'); ?>>
	<?php if(has_post_thumbnail()) { ?>
	<div class="column fivecol post-image">
		<div class="bordered-image thick-border">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
	</div>
	<div class="post-content column sevencol last">
	<?php } else { ?>
	<div class="post-content">
	<?php } ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php 
		if(isset($GLOBALS['content'])) {
			echo $GLOBALS['content'];
		} else {
			the_excerpt();
		}
		?>
		<footer class="post-footer">
			<a href="<?php the_permalink(); ?>" class="element-button small"><?php _e('Đọc thêm','academy'); ?></a>
			<?php if(comments_open()) { ?>
			<div class="post-comment-count"><?php comments_number('0','1','%'); ?></div>
			<?php } ?>
		
		</footer>
	</div>
</article>