<?php ThemexCourse::queryCourses_tmp(); ?>
<?php if(have_posts()) { ?>
<div class="related-courses clearfix">
<h1><?php _e('Khóa học liên quan', 'academy'); ?></h1>
	<div class="courses-listing clearfix">
		<?php
		$counter=0;	
		while (have_posts()) {
			the_post();
			$counter++;
			?>
			<div class="column fourcol <?php echo $counter==3 ? 'last':''; ?>">
			<?php get_template_part('content', 'course-grid'); ?>
			</div>
			<?php
			if($counter==4) {
				$counter=0;
				echo '<div class="clear"></div>';
			}
		}
		?>
	</div>
</div>
<!-- /related courses -->
<?php } ?>