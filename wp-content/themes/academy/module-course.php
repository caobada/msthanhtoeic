<?php the_post(); ?>
<?php ThemexCourse::refresh($post->ID, true); ?>
<?php if(ThemexCourse::hasMembers() || is_active_sidebar('course') || !empty(ThemexCourse::$data['sidebar'])) { ?>
<div class="eightcol column">
<?php } else { ?>
<div class="eightcol column">
<?php } ?>
	<div class="course-description widget <?php echo ThemexCourse::$data['status']; ?>-course">	
		<div class="widget-img">
			<?php 	the_post_thumbnail(); ?>
		</div>	
	</div>
</div>
<div class="fourcol column last">
	<div class="form-regis">
		<label class="title-regis"><b>ĐĂNG KÍ KHÓA HỌC<b></label>
		<div style="padding-top:25px">
		<?php echo do_shortcode('[contact-form-7 id="3491" title="register header"]'); ?>
		</div>
	</div>
</div>
