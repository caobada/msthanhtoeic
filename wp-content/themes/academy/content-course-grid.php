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
	<div class="course-meta source-grid">
		<header class="course-header">
			<h2 class="nomargin"><?php the_title(); ?></h2>
		</header>
		<div class="content-little">
		<?php  echo ThemexCourse::getCertificate(ThemexCourse::$data["ID"],ThemexCourse::$data["uses"])['content'];  ?>
		</div>
		<div class=" btn-info-more">
			<a href="<?php the_permalink(); ?>">
				<div  class="element-button">
					TÌM HIỂU KĨ HƠN
				</div>
			</a>
		</div>

	</div>
</div>