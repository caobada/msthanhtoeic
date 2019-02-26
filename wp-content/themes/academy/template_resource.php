
<?php
/*
 Template Name: Template Resource
 */
get_header();
$layout=ThemexCore::getOption('posts_layout', 'right');
if($layout=='left') {
?>
<aside class="sidebar column fourcol">
	<?php get_sidebar(); ?>
</aside>
<div class="column eightcol last">
<?php } else if($layout=='right') { ?>
<div class="column eightcol">
<?php } else { ?>
<div class="fullwidth-section">
<?php } ?>


	<?php echo themex_format(category_description()); ?>
	<div class="clear"></div>
	<div class="posts-listing">
        <?php
        
		if(is_page()) {
			query_posts(array(
				'post_type' =>'post',
                'paged' => themex_paged(),
                'cat' => 2
			));
		}
		
		if(have_posts()) {
			while(have_posts()) {
				the_post(); 
				get_template_part('content', 'resource');
			} 
		}
        ?>
    </div>
	<?php ThemexInterface::renderPagination(); ?>
</div>
<?php if($layout=='right') { ?>
<aside class="sidebar column fourcol last">
	<?php get_sidebar(); ?>
</aside>
<?php } ?>
<?php 
get_footer();
?>