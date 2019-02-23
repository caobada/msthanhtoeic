<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="281276965655896"
  logged_in_greeting="Xin chào! MsThanh Toeic có thể giúp gì cho bạn?"
  logged_out_greeting="Xin chào! MsThanh Toeic có thể giúp gì cho bạn?">
</div>
<!-- Fanpage facebook-->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=259245034987926&autoLogAppEvents=1"></script>




	<div class="site-wrap">
		<div class="header-wrap">
			<header class="site-header">
				<div class="row">
					<div class="site-logo left">
						<a href="<?php echo SITE_URL; ?>" rel="home">
							<img width="180px" src="<?php echo ThemexCore::getOption('site_logo', THEME_URI.'images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
						</a>
					</div>
					<!-- /logo -->
					<div class="header-options right clearfix">					
						<!-- <div class="login-options right"> -->
						<?php if(is_user_logged_in()) { ?>
							<!-- <div class="button-wrap left">
								<a href="<?php echo wp_logout_url(SITE_URL); ?>" class="element-button dark">
									<span class="button-icon logout"></span><?php _e('Sign Out','academy'); ?>
								</a>							
							</div>
							<div class="button-wrap left">
								<a href="<?php echo ThemexUser::$data['user']['profile_url']; ?>" class="element-button">
									<span class="button-icon register"></span><?php _e('My Profile','academy'); ?>
								</a>						
							</div>							 -->
							<?php } else { ?>						
							<!-- <div class="button-wrap left tooltip login-button">
								<a href="#" class="element-button dark"><span class="button-icon login"></span><?php _e('Sign In','academy'); ?></a>
								<div class="tooltip-wrap">
									<div class="tooltip-text">
										<form action="<?php echo AJAX_URL; ?>" class="ajax-form popup-form" method="POST">
											<div class="message"></div>
											<div class="field-wrap">
												<input type="text" name="user_login" value="<?php _e('Username','academy'); ?>" />
											</div>
											<div class="field-wrap">
												<input type="password" name="user_password" value="<?php _e('Password','academy'); ?>" />
											</div>
											<div class="button-wrap left nomargin">
												<a href="#" class="element-button submit-button"><?php _e('Sign In','academy'); ?></a>
											</div>											
											<?php if(ThemexFacebook::isActive()) { ?>
											<div class="button-wrap left">
												<span class="element-button facebook-button" title="<?php _e('Sign in with Facebook','academy'); ?>" data-redirect="<?php echo ThemexFacebook::getURL(); ?>">
													<span class="button-icon facebook"></span>
												</span>
											</div>
											<?php } ?>
											<div class="button-wrap switch-button left">
												<a href="#" class="element-button dark" title="<?php _e('Password Recovery','academy'); ?>">
													<span class="button-icon help"></span>
												</a>
											</div>
											<input type="hidden" name="user_action" value="login_user" />
											<input type="hidden" name="user_redirect" value="<?php echo esc_attr(themex_value($_POST, 'user_redirect')); ?>" />
											<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
											<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
										</form>
									</div>
								</div>
								<div class="tooltip-wrap password-form">
									<div class="tooltip-text">
										<form action="<?php echo AJAX_URL; ?>" class="ajax-form popup-form" method="POST">
											<div class="message"></div>
											<div class="field-wrap">
												<input type="text" name="user_email" value="<?php _e('Email','academy'); ?>" />
											</div>
											<div class="button-wrap left nomargin">
												<a href="#" class="element-button submit-button"><?php _e('Reset Password','academy'); ?></a>
											</div>
											<input type="hidden" name="user_action" value="reset_password" />
											<input type="hidden" name="nonce" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
											<input type="hidden" name="action" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
										</form>
									</div>
								</div>
							</div> -->
							<?php if(get_option('users_can_register')) { ?>
							<!-- <div class="button-wrap left">
								<a href="<?php echo ThemexCore::getURL('register'); ?>" class="element-button">
									<span class="button-icon register"></span><?php _e('Register','academy'); ?>
								</a>
							</div> -->
							<?php } ?>
						<?php } ?>
						<!-- </div> -->
						<!-- /login options -->										
						<div class="search-form right">
							<?php get_search_form(); ?>
						</div>
						<!-- /search form -->
						<?php if($code=ThemexCore::getOption('sharing')) { ?>
						<div class="button-wrap share-button tooltip right">
							<a href="#" class="element-button dark"><span class="button-icon plus nomargin"></span></a>
							<div class="tooltip-wrap">
								<div class="corner"></div>
								<div class="tooltip-text"><?php echo themex_html($code); ?></div>
							</div>
						</div>
						<!-- /share button -->
						<?php } ?>
					</div>
					<!-- /header options -->
					<div class="mobile-search-form">
						<?php get_search_form(); ?>
					</div>
					<!-- /mobile search form -->
					<nav class="header-navigation right">
						<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_class' => 'menu' ) ); ?>						
						<div class="select-menu select-element redirect">
							<span></span>
							<?php ThemexInterface::renderDropdownMenu('main_menu'); ?>							
						</div>
						<!--/ select menu-->
					</nav>
					<!-- /navigation -->						
				</div>			
			</header>
			<!-- /header -->
		</div>
		<div class="featured-content">
		
			<?php if(is_front_page() && is_page()) { ?>
			<?php get_template_part('module', 'slider'); ?>
			<?php } else { ?>
			<div class="row">
			<?php if(is_singular('course')) { ?>
				<?php get_template_part('module', 'course');  ?>
			<?php } else { ?>
				<div class="page-title">
					<h1 class="nomargin"><?php ThemexInterface::renderPageTitle(); ?></h1>
				</div>
				<!-- /page title -->				
			<?php } ?>
			</div>
		<?php } ?>		
		</div>
		<!-- /featured -->
		<div class="main-content">
			<div class="row">