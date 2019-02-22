<?php ThemexCourse::refresh($post->ID); ?>
<div class="course-preview <?php echo ThemexCourse::$data['status']; ?>-course">
	<div class="course-image">
		<?php the_post_thumbnail('normal'); ?>
		<?php if(empty(ThemexCourse::$data['plans']) && ThemexCourse::$data['status']!='private') { ?>
		<div class="course-price product-price">
			<div class="corner-wrap">
				<div class="corner"></div>
				<div class="corner-background"></div>
			</div>			
		</div>
		<?php } ?>
    </div>
    


</div>