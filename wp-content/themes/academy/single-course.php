<?php get_header(); ?>
<div class="course-content clearfix popup-container">
	<?php if(ThemexCourse::hasMembers() || is_active_sidebar('course') || !empty(ThemexCourse::$data['sidebar'])) { ?>
	<aside class="sidebar threecol column info-sidebar">
		<div class="title-calendar"><h2>Lịch khai giảng</h2></div>
		<?php

		$string = do_shortcode(themex_html(ThemexCourse::$data['sidebar']));
		$content = explode('?',$string);
		if(!empty($content)){
			foreach($content as $val){
				echo '<div class="antext">'.$val.'</div>';
			}
		}
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('course'));
		
		?>
			<footer class="course-footer">
				<?php get_template_part('module', 'form'); ?>
			</footer>
	</aside>
	<?php } ?>

	
	<div class="sevencol column last">
	<!-- Content Source -->
		<?php the_content(); ?>		
	</div>



	<?php if(!empty(ThemexCourse::$data['questions'])) { ?>
	<div class="course-questions fivecol column last">	
		<h1><?php _e('Questions', 'academy'); ?></h1>
		<ul class="styled-list style-2 bordered">
		<?php foreach(ThemexCourse::$data['questions'] as $question) {?>
		<li><a href="<?php echo get_comment_link($question->comment_ID); ?>"><?php echo get_comment_meta($question->comment_ID, 'title', true); ?></a></li>
		<?php } ?>
		</ul>	
	</div>
	<?php } ?>
	<?php if((!ThemexCourse::isSubscriber() || !ThemexCourse::isMember()) && !ThemexCourse::isAuthor()) { ?>
	<div class="popup hidden">
		<?php if(!ThemexCourse::isSubscriber()) { ?>
		<h2 class="popup-text"><?php _e('Subscribe to view this content', 'academy'); ?></h2>
		<?php } else { ?>
		<h2 class="popup-text"><?php _e('Take a course to view this content', 'academy'); ?></h2>
		<?php } ?>
	</div>
	<!-- /popup -->
	<?php } ?>
</div>






<!-- /course content -->
<?php get_template_part('module', 'related'); ?>
<?php get_footer(); ?>