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
		// if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('course'));
		
		?>
		<div class="title-price"><h2>Học phí</h2></div>
		<div class="price-txt">
		<?php 
		echo number_format(ThemexCourse::$data['price']['number'], 0, ',', '.').' VNĐ';
		?>
		</div>

		<div class="title-phone"><h2>Liên hệ</h2></div>
		<div class="phone-txt">0912 863 219 (Ms.Thanh)  </div>

			<footer class="course-footer" >
				<?php get_template_part('module', 'form'); ?>
			</footer>
	</aside>
	<?php } ?>

	
	<div class="sevencol column last content-nomal">
	<!-- Content Source -->
		<?php the_excerpt(); ?>	
	</div>
	<div class="column content-main">
	<?php the_content(); ?>	
	</div>



</div>






<!-- /course content -->
<?php get_template_part('module', 'related'); ?>

<?php get_footer(); ?>