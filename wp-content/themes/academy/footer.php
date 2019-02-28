				<?php if(is_active_sidebar('footer')) { ?>
					<div class="clear"></div>
					<div class="footer-sidebar sidebar clearfix">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')); ?>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class="rcontent">
					<div class="row">
						<div class="col4">
							<div class="dong1">
								<h2>Thông tin về MsThanhToeic</h2>	
								
								<p>Tốt nghiệp đồng thủ khoa MBA ngành Kinh Tế Học tại trường Đại học APPLIED SCIENCES, Northwestern Switzerland</p>
								<p>Giảng viên bộ môn kinh tế của trường Đại Học Lincoln Mỹ, Đại Học OUM Malaysia. đại học Greenwich Anh Quốc liên kết với Việt Nam</p>
								<p>Kinh nghiệm giảng dạy 7 năm tại các trung tâm Anh Ngữ nổi tiếng tại TpHCM: ILA Việt Nam, VUS, Cleverlearn Vietnam….</p>
							</div>
						</div>
						<div class="col4">
							<div class="dong2">
								<h2>Liên hệ MsThanhToeic</h2>
								
								<p>
									<b><i class="fa fa-phone"></i> Phone:</b> 0912 863 219 (Ms.Thanh)
								</p>
								<p>
									<b><i class="fa fa-building"></i> Địa chỉ:</b> 64/11/2 Nguyễn Khoái, P2, Q4 (Ngay dưới chân cầu Nguyễn Văn Cừ)
								</p>
								<p>
								Lớp Toeic và Anh Văn Giao Tiếp của Ms.Thanh với những “độc quyền” chưa từng có trên thị trường, mang lại cho bạn kết quả khả quan, đúng như nguyện vọng. 
								</p>
							</div>
						</div>
						<div class="col4">
							<div class="dong3">
								<h2>Fanpage</h2>
								
								<div class="fb-page" data-href="https://www.facebook.com/msthanhtoeic/" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/msthanhtoeic/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/msthanhtoeic/">Ms.Thanh&#039;s Toeic</a></blockquote></div>
							</div>
						</div>
					</div>
				</div>
			<!-- /content -->
			<div class="footer-wrap">
				
				<footer class="site-footer">
					<div class="row">
						<div class="copyright center">
							<?php echo ThemexCore::getOption('copyright', 'Website của MsThanh Toeic &copy; '.date('Y')); ?>
						</div>
						<!-- /navigation -->				
					</div>			
				</footer>				
			</div>
			<!-- /footer -->			
		</div>
		<!-- /site wrap -->
	<?php wp_footer(); ?>
	</body>
</html>