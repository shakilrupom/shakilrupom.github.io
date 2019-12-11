<?php
    session_start();
    include("assets/php/captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Contact Classic Bottom Map | BOOKRA</title>
		<meta name="description" content="BOOKRA | Multi-purpose HTML5 Template">
		<meta name="author" content="IT-RAYS">
		
		<!-- Devices Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="assets/images/favicon.ico">
		    	
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
		<!-- Plugins CSS files -->
		<link rel="stylesheet" href="assets/css/assets.css">
		
		<!-- Template CSS files -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/shortcodes.css">
		<link id="theme_css" rel="stylesheet" href="assets/css/light.css">
		<link id="skin_css" rel="stylesheet" href="assets/css/skins/default.css">
		
	</head>
	<body>

		<!-- site preloader start -->
		<div class="page-loader"></div>
		<!-- site preloader end -->
		
		<div class="pageWrapper">

			<!-- Header start -->
			<div class="head-border"></div>
			<header class="top-head header-1 skew">
		    	<div class="container">
			    	<!-- Logo start -->
			    	<div class="logo">
				    	<a href="index.html"><img alt="" src="assets/images/logo.png" /></a>
				    </div>
				    <!-- Logo end -->
				    
					<div class="responsive-nav">
						<!-- top navigation menu start -->
						<nav class="top-nav">
							<ul>
								<li><a href="index.html"><span>Home</span></a>
									<ul>
										<li><a href="#"><span>Home - Corporate</span></a>
											<ul>
												<li><a href="index-corporate-1.html">Home Corporate 1</a></li>
												<li><a href="index-corporate-2.html">Home Corporate 2</a></li>
												<li><a href="index-corporate-3.html">Home Corporate 3</a></li>
												<li><a href="index-corporate-4.html">Home Corporate 4</a></li>
											</ul>
										</li>
										<li><a href="#"><span>Home - Portfolio</span></a>
											<ul>
												<li><a href="index-portfolio-full-screen.html">Portfolio - Full Screen</a></li>
												<li><a href="index-portfolio-2.html">Portfolio - Style 2</a></li>
												<li><a href="index-portfolio-3.html">Portfolio - Style 3</a></li>
											</ul>
										</li>
										<li><a href="#"><span>Home - Magazine</span></a>
											<ul>
												<li><a href="index-magazine-1.html">Home Magazine 1</a></li>
												<li><a href="index-magazine-2.html">Home Magazine 2</a></li>
												<li><a href="index-magazine-3.html">Home Magazine 3</a></li>
											</ul>
										</li>
										<li><a href="#"><span>Home - Blog</span></a>
											<ul>
												<li><a href="index-blog-1.html">Home Blog 1</a></li>
												<li><a href="index-blog-2.html">Home Blog 2</a></li>
											</ul>
										</li>
										<li><a href="#"><span>Home - Shop</span></a>
											<ul>
												<li><a href="index-shop-1.html">Home Shop 1</a></li>
												<li><a href="index-shop-2.html">Home Shop 2</a></li>
											</ul>
										</li>
										<li><a href="#"><span>Home - One Page</span></a>
											<ul>
												<li><a href="index-one-page-1.html">One Page 1</a></li>
												<li><a href="index-one-page-2.html">One Page 2</a></li>
												<li><a href="index-one-page-3.html">One Page 3</a></li>
												<li><a href="index-one-page-4.html">One Page 4</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="selected"><a href="#"><span>Features</span></a>
									<ul>
									<li><a href="#"><i class="fa fa-bookmark"></i>Headers</a>
										<ul>
											<li><a href="#">Header Style 1</a>
												<ul>
													<li><a href="header-1-light.html">Light - Skewed Elements</a></li>
													<li><a href="header-1-normal-light.html">Light - Normal Elements</a></li>
													<li><a href="header-1-center-logo-light.html">Light - Center Logo</a></li>
													<li><a href="header-1-right-logo-light.html">Light - Right Logo</a></li>
													<li><a href="header-1-full-light.html">Light - Full Width</a></li>
													<li><a href="header-1-dark.html">Dark - Skewed Elements</a></li>
													<li><a href="header-1-normal-dark.html">Dark - Normal Elements</a></li>
													<li><a href="header-1-center-logo-dark.html">Dark - Center Logo</a></li>
													<li><a href="header-1-right-logo-dark.html">Dark - Right Logo</a></li>
													<li><a href="header-1-full-dark.html">Dark - Full Width</a></li>
												</ul>
											</li>
											<li><a href="#">Header Style 2</a>
												<ul>
													<li><a href="header-2-light.html">Light - Normal</a></li>
													<li><a href="header-2-center-logo-light.html">Light - Center Logo</a></li>
													<li><a href="header-2-right-logo-light.html">Light - Right Logo</a></li>
													<li><a href="header-2-full-light.html">Light - Full Width</a></li>
													<li><a href="header-2-dark.html">Dark - Normal</a></li>
													<li><a href="header-2-center-logo-dark.html">Dark - Center Logo</a></li>
													<li><a href="header-2-right-logo-dark.html">Dark - Right Logo</a></li>
													<li><a href="header-2-full-dark.html">Dark - Full Width</a></li>
												</ul>
											</li>
											<li><a href="#">Transparent</a>
												<ul>
													<li><a href="header-transparent.html">Full Width</a></li>
													<li><a href="header-transparent-boxed.html">Boxed</a></li>
												</ul>
											</li>
											<li><a href="#">Semi Transparent</a>
												<ul>
													<li><a href="header-semi-trans-light-full.html">Light - Full Width</a></li>
													<li><a href="header-semi-trans-light-boxed.html">Light - Boxed</a></li>
													<li><a href="header-semi-trans-dark-full.html">Dark - Full Width</a></li>
													<li><a href="header-semi-trans-dark-boxed.html">Dark - Boxed</a></li>
												</ul>
											</li>
											<li><a href="#">Modern Header</a>
												<ul>
													<li><a href="header-modern.html">Modern Light Header</a></li>
													<li><a href="header-modern-dark.html">Modern Dark Header</a></li>
												</ul>
											</li>
											<li><a href="#">Classic Header</a>
												<ul>
													<li><a href="header-classic.html">Minimal Header</a></li>
													<li><a href="header-classic-boxes.html">Classic Header With Boxes</a></li>
													<li><a href="header-classic-bordered-boxes.html">Classic Header Bordered Boxes</a></li>
													<li><a href="header-classic-icons.html">Classic Header With Icons</a></li>
													<li><a href="header-classic-bottom-menu.html">Classic Header Bottom Menu</a></li>
													<li><a href="header-classic-center-logo.html">Classic Header Center Logo</a></li>
												</ul>
											</li>
											<li><a href="header-non-sticky.html">Non Sticky Header</a></li>
											<li><a href="header-left.html">Left Side Header</a></li>
											<li><a href="header-right.html">Right Side Header</a></li>
											<li><a href="#">Top Bar</a>
												<ul>
													<li><a href="top-bar.html">Normal</a></li>
													<li><a href="top-bar-gry.html">Gry Background</a></li>
													<li><a href="top-bar-colored.html">Colored</a></li>
													<li><a href="top-bar-dark.html">Dark</a></li>
													<li><a href="top-bar-transparent.html">Transparent</a></li>
													<li><a href="top-bar-semi-trans-light.html">Semi Transparent Light</a></li>
													<li><a href="top-bar-semi-trans-dark.html">Semi Transparent Dark</a></li>
												</ul>
											</li>
											<li><a href="#">Menu Labels Colors <span class="menu-hint hot">HOT</span></a>
												<ul>
													<li><a href="#">Normal <span class="menu-hint">default</span></a></li>
													<li><a href="#">Light <span class="menu-hint light">Light</span></a></li>
													<li><a href="#">Success <span class="menu-hint success">Success</span></a></li>
													<li><a href="#">Info <span class="menu-hint info">Info</span></a></li>
													<li><a href="#">Warning <span class="menu-hint warning">Warning</span></a></li>
													<li><a href="#">HOT <span class="menu-hint hot">HOT</span></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-th"></i>Footers</a>
										<ul>
											<li><a href="footer-2.html">Footer Style 2</a></li>
											<li><a href="footer-3.html">Footer Style 3</a></li>
											<li><a href="footer-4.html">Footer Style 4</a></li>
											<li><a href="footer-light.html">Light Colored Footer</a></li>
											<li><a href="footer-fixed.html">Fixed Footer</a></li>
											<li><a href="footer-minimal-1.html">Minimal Footer 1</a></li>
											<li><a href="footer-minimal-2.html">Minimal Footer 2</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-heart-o"></i>Page Titles</a>
										<ul>
											<li><a href="page-title.html">Normal Page Title <span class="menu-hint success">default</span></a></li>
											<li><a href="page-title-bg.html">Title Background Image</a></li>
											<li><a href="page-title-center.html">Centered Page Title</a></li>
											<li><a href="page-title-right.html">Right Page Title</a></li>
											<li><a href="page-title-colored.html">Colored Page Title</a></li>
											<li><a href="page-title-dark.html">Dark Page Title</a></li>
											<li><a href="page-title-pattern.html">Pattern Page Title</a></li>
											<li><a href="page-title-minimal.html">Minimal Page Title</a></li>
											<li><a href="#">Parallax Page Title</a>
												<ul>
													<li><a href="page-title-parallax.html">Default Header</a></li>
													<li><a href="page-title-parallax2.html">Transparent Header</a></li>
												</ul>
											</li>
											<li><a href="#">Page Title Video</a>
												<ul>
													<li><a href="page-title-video.html">Default Header</a></li>
													<li><a href="page-title-video2.html">Transparent Header</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-navicon"></i>Sub Menus</a>
										<ul>
											<li><a href="sub-menu-colored.html">Colored Sub Menu <span class="menu-hint success">default</span></a></li>
											<li><a href="sub-menu-light.html">Light Sub Menu</a></li>
											<li><a href="sub-menu-dark.html">Dark Sub Menu</a></li>
											<li><a href="sub-menu-mega.html">Mega Menu <span class="menu-hint hot">HOT</span></a></li>
										</ul>
									</li>
									<li class="selected"><a href="#"><i class="fa fa-envelope"></i>Contact Pages</a>
										<ul>
											<li class="selected">
												<a href="#">Classic</a>
												<ul>
													<li><a href="page-contact-classic-1.php">Right Map</a></li>
													<li><a href="page-contact-classic-2.php">Map On Top</a></li>
													<li class="selected"><a href="page-contact-classic-3.php">Map On Bottom</a></li>
													<li><a href="page-contact-classic-4.php">Full Map On Top</a></li>
													<li><a href="page-contact-classic-5.php">Full Map On Bottom</a></li>
												</ul>
											</li>
											<li><a href="page-contact-2.php">Contact 2</a></li>
											<li><a href="page-contact-3.php">Contact 3</a></li>
											<li><a href="page-contact-4.php">Contact 4</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-laptop"></i>Sliders</a>
										<ul>
											<li>
												<a href="slider-revolution.html">Revolution Slider</a>
											</li>
											<li>
												<a href="#">Camera Slider</a>
												<ul>
													<li><a href="slider-camera.html">Full Width</a></li>
													<li><a href="slider-camera-boxed.html">Boxed</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Flex Slider</a>
												<ul>
													<li><a href="slider-flex.html">Full Width</a></li>
													<li><a href="slider-flex-boxed.html">Boxed</a></li>
												</ul>
												</li>
											<li>
												<a href="#">OWL Slider</a>
												<ul>
													<li><a href="slider-owl.html">Full Width</a></li>
													<li><a href="slider-owl-boxed.html">Boxed</a></li>
												</ul>
											</li>
										</ul>
									</li>
									</ul>
								</li>
								<li class="mega-menu"><a href="#"><span>Shortcodes</span></a>
									<ul>
										<li>
											<div class="mega-content">
												<div class="row">
													<ul>
														<li class="col-md-3">
															<ul>
																<li><a href="shortcode-accordions.html"><i class="fa fa-list-ul"></i>Accordions</a></li>
																<li><a href="shortcode-animations.html"><i class="fa fa-bolt"></i>Animations</a></li>
																<li><a href="shortcode-breadcrumbs.html"><i class="fa fa-cog"></i>Breadcrumbs</a></li>
																<li><a href="shortcode-buttons.html"><i class="fa fa-hand-pointer-o"></i>Buttons</a></li>
																<li><a href="shortcode-cta.html"><i class="fa fa-reply-all"></i>Call To Action</a></li>
																<li><a href="shortcode-counters.html"><i class="fa fa-sort-numeric-asc"></i>Counters</a></li>
																<li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i>Charts</a></li>
																<li><a href="shortcode-carousels.html"><i class="fa fa-exchange"></i>Carousel Sliders</a></li>
																<li><a href="shortcode-galleries.html"><i class="fa fa-film"></i>Galleries</a></li>
															</ul>
														</li>
													
														<li class="col-md-3">
															<ul>
																<li><a href="shortcode-clients.html"><i class="fa fa-users"></i>Clients</a></li>
																<li><a href="shortcode-columns.html"><i class="fa fa-tasks"></i>Columns</a></li>
																<li><a href="shortcode-countdown-timers.html"><i class="fa fa-clock-o"></i>Countdown Timers</a></li>
																<li><a href="shortcode-dividers.html"><i class="fa fa-minus"></i>Dividers</a></li>
																<li><a href="shortcode-maps.html"><i class="fa fa-map-marker"></i>Maps</a></li>
																<li><a href="shortcode-font-icons.html"><i class="fa fa-share-square-o"></i>Font Icons</a></li>
																<li><a href="shortcode-featured-sections.html"><i class="fa fa-send-o"></i>Featured Sections</a></li>
																<li><a href="shortcode-featured-boxes.html"><i class="fa fa-mortar-board"></i>Featured Boxes</a></li>
																<li><a href="shortcode-forms.html"><i class="fa fa-check-square-o"></i>Forms</a></li>
															</ul>
														</li>
													
														<li class="col-md-3">
															<ul>
																<li><a href="shortcode-headings.html"><i class="fa fa-reorder"></i>Headings</a></li>
																<li><a href="shortcode-icon-boxes.html"><i class="fa fa-newspaper-o"></i>Icon Boxes</a></li>
																<li><a href="shortcode-list-groups.html"> <i class="fa fa-th-list"></i>List Groups</a></li>
																<li><a href="shortcode-magnific-popup.html"><i class="fa fa-search-plus"></i>Magnific Popup</a></li>
																<li><a href="shortcode-media.html"><i class="fa fa-play-circle"></i>Media (Audio &amp; Video)</a></li>
																<li><a href="shortcode-message-boxes.html"><i class="fa fa-info-circle"></i>Message Boxes</a></li>
																<li><a href="shortcode-modal-popup.html"><i class="fa fa-object-group"></i>Modal Popup</a></li>
																<li><a href="shortcode-pagination.html"><i class="fa fa-outdent"></i>Pagination</a></li>
																<li><a href="shortcode-pie-skills.html"><i class="fa fa-circle-o-notch"></i>PIE Skills</a></li>
															</ul>
														</li>

														<li class="col-md-3">
															<ul>
																<li><a href="shortcode-popover-tooltips.html"><i class="fa fa-lightbulb-o"></i>Popover &amp; tooltips</a></li>
																<li><a href="shortcode-progress-bars.html"><i class="fa fa-signal"></i>Progress Bars</a></li>
																<li><a href="shortcode-responsive-features.html"> <i class="fa fa-laptop"></i>Responsive features</a></li>
																<li><a href="shortcode-social-icons.html"><i class="fa fa-share"></i>Social Icons</a></li>
																<li><a href="shortcode-steps.html"><i class="fa fa-heart-o"></i>Steps</a></li>
																<li><a href="shortcode-tabs.html"><i class="fa fa-tasks"></i>Tabs</a></li>
																<li><a href="shortcode-toggles.html"><i class="fa fa-toggle-on"></i>Toggles</a></li>
																<li><a href="shortcode-testimonials.html"><i class="fa fa-users"></i>Testimonials</a></li>
																<li><a href="shortcode-typography.html"><i class="fa fa-text-width"></i>Typography</a></li>
															</ul>
														</li>
													
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li><a href="#"><span>Pages</span></a>
									<ul>
										<li><a href="page-about-us.php">About us</a></li>
										<li><a href="page-about-me.html">About me</a></li>
										<li><a href="page-FAQ.html">FAQ</a></li>
										<li><a href="page-find-job.html">Find a job</a></li>
										<li><a href="page-pricing.html">Pricing</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-team.html">Team Boxes</a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="page-side-menu.html">Page with side Menu</a></li>
												<li><a href="page-full.html">Page Full width</a></li>
												<li><a href="page-sidebar.html">Page with Sidebar</a></li>
												<li><a href="page-left-bar.html">Page with Left Sidebar</a></li>
												<li><a href="page-both-bars.html">Page with Both Sidebars</a></li>
											</ul>
										</li>
										<li><a href="#">Login</a>
											<ul>
												<li><a href="page-login-simple.html">Simple</a></li>
												<li><a href="page-login-creative.html">Creative</a></li>
												<li><a href="page-login-register.html">Login/Register</a></li>
												<li><a href="page-login-register-tabs.html">Login/Register Tabs</a></li>
											</ul>
										</li>
										<li><a href="#">Register</a>
											<ul>
												<li><a href="page-register-1.html">Register Style 1</a></li>
												<li><a href="page-register-2.html">Register Style 2</a></li>
											</ul>
										</li>
										<li><a href="#">Coming Soon</a>
											<ul>
												<li><a href="page-soon-simple.html">Simple Layout</a></li>
												<li><a href="page-soon-video.html">HTML5 Video</a></li>
											</ul>
										</li>
										<li><a href="#">404</a>
											<ul>
												<li><a href="page-404-simple.html">Simple Layout</a></li>
												<li><a href="page-404-parallax.html">Parallax Image</a></li>
												<li><a href="page-404-video.html">HTML5 Video</a></li>
											</ul>
										</li>
										<li><a href="page-maintenance.html">Maintenance Page</a></li>
										<li><a href="page-sitemap.html">Site Map</a></li>
									</ul>
								</li>
								<li><a href="#"><span>Blog</span></a>
									<ul>
										<li><a href="#">Blog Large Image</a>
											<ul>
												<li><a href="blog.html">Right Side Bar</a></li>
												<li><a href="blog-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Small Image</a>
											<ul>
												<li><a href="blog-thumbnails.html">Right Side Bar</a></li>
												<li><a href="blog-thumbnails-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-thumbnails-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Timeline</a>
											<ul>
												<li><a href="blog-timeline.html">Right Side Bar</a></li>
												<li><a href="blog-timeline-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-timeline-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="#">Blog masonry</a>
											<ul>
												<li><a href="blog-masonry.html">Right Side Bar</a></li>
												<li><a href="blog-masonry-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-masonry-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Grid</a>
											<ul>
												<li><a href="blog-grid.html">Right Side Bar</a></li>
												<li><a href="blog-grid-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-grid-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Single</a>
											<ul>
												<li><a href="blog-single.html">Right Side Bar</a></li>
												<li><a href="blog-single-left-bar.html">Left Side Bar</a></li>
												<li><a href="blog-single-no-bar.html">No side bar</a></li>
											</ul>
										</li>
									
									</ul>
								</li>
								<li><a href="#"><span>Portfolio</span></a>
									<ul>
										<li><a href="portfolio-classic-1-col.html">Classic 1 column</a></li>
										<li><a href="#">Grid Layout</a>
											<ul>
												<li><a href="portfolio-grid-2-cols.html">2 columns</a></li>
												<li><a href="portfolio-grid-3-cols.html">3 columns</a></li>
												<li><a href="portfolio-grid-4-cols.html">4 columns</a></li>
												<li><a href="portfolio-grid-5-cols.html">5 columns</a></li>
												<li><a href="portfolio-grid-6-cols.html">6 columns</a></li>
											</ul>
										</li>
										<li><a href="#">Masonry Layout</a>
											<ul>
												<li><a href="portfolio-masonry-2-cols.html">2 columns</a></li>
												<li><a href="portfolio-masonry-3-cols.html">3 columns</a></li>
												<li><a href="portfolio-masonry-4-cols.html">4 columns</a></li>
												<li><a href="portfolio-masonry-5-cols.html">5 columns</a></li>
												<li><a href="portfolio-masonry-6-cols.html">6 columns</a></li>
											</ul>
										</li>
										<li><a href="#">Project details</a>
											<ul>
												<li><a href="portfolio-single.html">Details Style 1</a></li>
												<li><a href="portfolio-single2.html">Details Style 2</a></li>
												<li><a href="portfolio-single3.html">Details Style 3</a></li>
											</ul>
										</li>
										<li><a href="#">Portfolio Styles <span class="menu-hint hot">HOT</span></a>
											<ul>
												<li><a href="portfolio-style-1.html">Portfolio Style 1</a></li>
												<li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
												<li><a href="portfolio-style-3.html">Portfolio Style 3</a></li>
												<li><a href="portfolio-style-4.html">Portfolio Style 4</a></li>
												<li><a href="portfolio-style-5.html">Portfolio Style 5</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#"><span>Shop</span></a>
									<ul>
										<li><a href="#">Shop Products listing</a>
											<ul>
												<li><a href="shop-2-cols.html">2 columns</a></li>
												<li><a href="shop-3-cols.html">3 columns</a></li>
												<li><a href="shop-4-cols.html">4 columns</a></li>
												<li><a href="shop-left-bar.html">Left Side Bar</a></li>
												<li><a href="shop-no-bar.html">No side bar</a></li>
												<li><a href="shop-full-width.html">Full Width</a></li>
											</ul>
										</li>
										<li><a href="#">Product Page</a>
											<ul>
												<li><a href="shop-product-right-bar.html">Right Side Bar</a></li>
												<li><a href="shop-product-left-bar.html">Left Side Bar</a></li>
												<li><a href="shop-product-no-bar.html">No side bar</a></li>
											</ul>
										</li>
										<li><a href="shop-cart.html">Shoping cart</a></li>
										<li><a href="shop-checkout.html">Check out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!-- top navigation menu end -->
					    <div class="f-right">
					    	<!-- top search start -->
						    <div class="top-search">
					    		<a href="#"><span class="fa fa-search"></span></a>
						    	<div class="search-box">
					    			<input type="text" name="t" placeHolder="Type And Hit Enter..." />
						    	</div>
						    </div>
						    <!-- top search end -->
						    
						    <!-- cart start -->
						    <div class="top-cart">
					    		<a href="#"><span class="fa fa-shopping-cart"></span><i class="cart-num main-bg white">3</i></a>
						    	<div class="cart-box main-border">
						    		<div class="empty hidden">Your shopping cart is empty!</div>
										<div class="mini-cart">
											<ul class="mini-cart-list">
												<li>
													<a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-1.jpg" alt=""></a>
													<div class="cart-body">
														<a href="product-left-bar.html">Ultimate Fashion Wear White</a>
														<div class="price">$150</div>
													</div>
													<a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
												</li>
												<li>
													<a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-2.jpg" alt=""></a>
													<div class="cart-body">
														<a href="product-left-bar.html">Fashion Wear White</a>
														<div class="price">$50</div>
													</div>
													<a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
												</li>
												<li>
													<a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-3.jpg" alt=""></a>
													<div class="cart-body">
														<a href="product-left-bar.html">Ultimate Fashion</a>
														<div class="price">$220</div>
													</div>
													<a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
												</li>
											</ul>
											<div class="mini-cart-total">
												<div class="clearfix">
													<div class="f-left">Sub-Total:</div>
													<div class="f-right">$230.00</div>
												</div>
												<div class="clearfix">
													<div class="f-left">Tax (-10.00):</div>
													<div class="f-right">$12.05</div>
												</div>
												<div class="clearfix total">
													<div class="f-left"><strong>Total:</strong></div>
													<div class="f-right">$200.20</div>
												</div>
											</div>
											<div class="checkout">
												<a class="btn main-bg" href="cart.html">View Cart</a><a class="btn btn-default" href="checkout.html">Checkout</a>
											</div>
										</div>
						    	</div>
						    </div>
						    <!-- cart end -->
					    </div>
					</div>
		    	</div>
		    </header>
		    <!-- Header start -->
		    
		    <!-- Content start -->
	    	<div class="pageContent">
	    		
	    		<div class="page-title">
					<div class="container">
						<h1>Contact Classic Map On Bottom</h1>
						<h3>This is sub heading text to describe the page functionality</h3>
					</div>
				</div>
				<div class="breadcrumbs">
					<div class="container">
						<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><a href="#">Pages</a><i class="fa fa-long-arrow-right main-color"></i><span>Contact Classic Map On Bottom</span>
					</div>
				</div>
				
				<div class="md-padding p-b-0">
					<div class="container">
						<div class="">
							<div class="heading main centered">
								<h3 class="uppercase lg-title"><span class="main-color">Get In </span> Touch</h3>
								<p>Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
							</div>

							<form id="contact-form" class="ajax-form" name="contact" action="assets/php/sendemail.php" method="post" novalidate="novalidate">

								<div class="contact-msg">
									<div class="alert alert-success">
										<img alt="" src="assets/images/ajax-loader.gif" class="contact-loader" />
										<div class="success-msg">
											<i class="fa fa-thumbs-o-up ico-block"></i>
											<p>Thanks for getting in touch with us, We'll check your message and get back to you shortly!</p>
										</div>
									</div>
								</div>

								<div class="row form-group over-hidden">
									
									<div class="col-md-4">
										<label for="contact-name">Name <small>*</small></label>
										<input type="text" id="contact-name" name="contact-name" class="form-control required">
									</div>

									<div class="col-md-4">
										<label for="contact-email">Email <small>*</small></label>
										<input type="email" id="contact-email" name="contact-email" class="form-control required">
									</div>

									<div class="col-md-4">
										<label for="contact-phone">Phone</label>
										<input type="text" id="contact-phone" name="contact-phone" class="form-control">
									</div>

								</div>

								<div class="row form-group over-hidden">

									<div class="col-md-6">
										<label for="contact-subject">Subject <small>*</small></label>
										<input type="text" id="contact-subject" name="contact-subject" class="form-control required">
									</div>

									<div class="col-md-6">
										<label for="contact-service">Services You Need</label>
										<select id="contact-service" name="contact-service" class="form-control">
											<option value="">-- Select Service --</option>
											<option value="design">Graphic Design</option>
											<option value="development">Web Development</option>
											<option value="HTML5 / CSS3">HTML5 / CSS3</option>
											<option value="training">Training</option>
										</select>
									</div>

								</div>

								<div class="form-group over-hidden">
									<label for="contact-message">Message <small>*</small></label>
									<textarea id="contact-message" name="contact-message" rows="6" cols="30" class="form-control required"></textarea>
								</div>

								<div class="tbl wid-70">
									<div class="form-group clearfix captcha-div">
			                            <img alt="" src="<?php echo $_SESSION['captcha']['image_src']; ?>" id='captchaimg' class="left">
			                            <input type="hidden" id="hidCap" value="<?php echo $_SESSION['captcha']['code']; ?>" data-error="Captcha does not match!" />
			                            <input id="captcha_input" class="form-control required" name="captcha_input" type="text" placeholder="Enter the code here">
			                        </div>

									<div class="form-group m-t-2">
										<button class="btn main-bg btn-block btn-lg btn-3d uppercase" type="submit" id="contact-submit" name="contact-submit" value="submit">Send Message</button>
									</div>
								</div>

							</form>	
						</div>
					</div>
				</div>

				<div class="container sm-padding">
					<hr class="dev-style4" />
				</div>

				<div class="p-b-3">
				    <div class="container">
					    <div class="row">
						    <div class="col-md-4">
							    <div class="white-bg lg-box t-center light-gry-border rect-angles">
								    <i class="fa fa-map-marker main-color lg-icon"></i>
								    <h4>Address</h4>
								    <p>123, Second Sunrise Avenue
                                    <br>
                                    New York,USA</p>
							    </div>
						    </div>
						    
						    <div class="col-md-4">
							    <div class="white-bg lg-box t-center light-gry-border rect-angles">
								    <i class="fa fa-phone-square main-color lg-icon"></i>
								    <h4>Phone</h4>
								    <p>
									    Phone: +2 012 000 0000<br>
									    Mobile: +2 012 000 0000<br>
								    </p>
							    </div>
						    </div>
						    
						    <div class="col-md-4">
							    <div class="white-bg lg-box t-center light-gry-border rect-angles">
								    <i class="fa fa-envelope main-color lg-icon"></i>
								    <h4>E-mail Address</h4>
								    <p>
									    info@it-rays.net<br>
									    email@domain.com
								    </p>
							    </div>
						    </div>
						    
					    </div>
				    </div>
			    </div>

			    <div class="container md-padding">
					<div id="ROADMAP" class="gmap full" style="height: 400px">
					    <p>This will be replaced with the Google Map.</p>
					</div>
				</div>

		    </div>			    
	    	<!-- Content start -->

	    	<!-- Footer start -->
		    <footer id="footWrapper">
		    	
		    	<!-- footer top bar start -->
		    	<div class="footer-top">
		    		<div class="container">
						<p class="lg-txt f-left">
							Our Main Goal is to Create New Design Trends For Your Next Website, It is <span class="main-color heavy">BOOKRA</span> All You Need.
						</p>
						<a class="f-right btn uppercase main-gradient skew-btn" href="#"><span>Buy Now</span></a>
		    		</div>
		    	</div>
		    	<!-- footer top bar start -->

		    	<!-- footer widgets start -->
		    	<div class="footer-middle">
				    <div class="container">
					    <div class="row">
					    	
						    <div class="col-md-3 first">
							    <h3>About us</h3>
							    <p class="foot-about-par">
							    	BOOKRA template is a big library of pre-designed web elements which help you create website in few minutes. Each and every design element was designed for retina ready display on all kind of devices.
							    </p>
							    <div class="social-list half-icons">
								    <a href="#"><i class="fa fa-dribbble ic-dribbble ic-colored sm-icon"></i><span>follow us</span></a>
								    <a href="#"><i class="fa fa-facebook ic-facebook ic-colored sm-icon sm-icon"></i><span>Like us</span></a>
								    <a href="#"><i class="fa fa-linkedin ic-linkedin ic-colored sm-icon"></i><span>follow us</span></a>
								    <a href="#"><i class="fa fa-google-plus ic-gplus ic-colored sm-icon"></i><span>plus 1 us</span></a>
								    <a href="#"><i class="fa fa-twitter ic-twitter ic-colored sm-icon"></i><span>follow us</span></a>
								    <a href="#"><i class="fa fa-youtube ic-youtube ic-colored sm-icon"></i><span>follow us</span></a>
							    </div>
						    </div>
						    
						    <div class="col-md-3">
						    	<h3>Latest News</h3>
						    	<div class="recent-posts-footer">
									<ul>
										<li>
											<div class="post-img">
												<img src="assets/images/blog/small/1.jpg" alt="">
											</div>
											<div class="widget-post-info">
												<h4>
													<a href="blog-single.html">
														We Offer Unlimited Design Elements To Get Started
													</a>
												</h4>
												<div class="meta">
													<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span>
												</div>
											</div>
										</li>
										<li>
											<div class="post-img">
												<img src="assets/images/blog/small/2.jpg" alt="">
											</div>
											<div class="widget-post-info">
												<h4>
													<a href="blog-single.html">
														A Clean Website Gives More Experience To The Visitors
													</a>
												</h4>
												<div class="meta">
													<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span>
												</div>
											</div>
										</li>
										<li>
											<div class="post-img">
												<img src="assets/images/blog/small/3.jpg" alt="">
											</div>
											<div class="widget-post-info">
												<h4>
													<a href="blog-single.html">
														How You Can Impact Your Customers With Great Design
													</a>
												</h4>
												<div class="meta">
													<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
						    </div>
						    
						    <div class="col-md-3 widget_it_widget_tweets">
						    	<h3>Twitter Feed</h3>
						    	<div class="tweet">
						    		<a class="twitter-timeline" href="https://twitter.com/it_rays" data-widget-id="529778322134167553"></a>
						    	</div>
						    </div>
						    
						    <div class="col-md-3 last contact-widget">
							    <h3>Contact Us</h3>
							    <p class="foot-about-par">
							    	Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. 
							    </p>
							    <ul class="details">
							    	<li><i class="fa fa-map-marker"></i><span>123 Street Name, City, Country.</span></li>
							    	<li><i class="fa fa-envelope"></i><span>e-mail@company.com</span></li>
							    	<li><i class="fa fa-phone"></i><span>+1(888)000-0000</span></li>
							    </ul>
							    <div class="foot-newletters">
							    	<form action="link-to-your-site" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate class="boo-nl">
							    		
							    		<label>Subscribe to our NewsLetters:</label>
							    		
							    		<input class="form-control" type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email here" required />
							    		
							    		<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn main-bg" value="Send" />
							    		
							    		<div class="hidden"><input type="text" name="name-of-the-hidden-field" value=""></div>
							    		
		   								 <div class="nl-note"><span></span></div>
		   								 
							    	</form>
							    </div>
						    </div>						    							    							    							    
					    </div>
					    
				    </div>	
			    </div>
			    <!-- footer widgets start -->

			    <!-- footer bottom bar start -->
			    <div class="footer-bottom">
				    <div class="container">
			    		<div class="row">
				    		<!-- footer copyrights left cell -->
				    		<div class="copyrights col-md-5">© Copyrights <b class="main-color">BOOKRA</b> 2016. All rights reserved.</div>
				    						    		
				    		<!-- footer bottom menu start -->
						    <div class="col-md-7 last">
						    	<ul class="footer-menu f-right">
								    <li><a href="#">Home</a></li>
								    <li><a href="#">About</a></li>
								    <li><a href="#">Services</a></li>
								    <li><a href="#">Portfolio</a></li>
								    <li><a href="#">Blog</a></li>
								    <li><a href="#">Contact</a></li>
							    </ul>
						    </div>
						    <!-- footer bottom menu end -->
						    
			    		</div>
				    </div>
			    </div>
			    <!-- footer bottom bar end -->

			</footer>
			<!-- Footer end -->

		</div>

		<!-- Back to top Link -->
	    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

		<!-- Load JS plugins -->
 		<script type="text/javascript" src="assets/js/jquery-1.12.0.min.js"></script>
 		<script type="text/javascript" src="assets/js/assets.js"></script>

 		<!-- general script file -->
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script type="text/javascript" src="assets/js/jquery.gmap.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			$(function(){
			   $('#ROADMAP').gMap({
			   		latitude: -2.206,
			        longitude: -79.897,
			        maptype: 'ROADMAP', // 'HYBRID', 'SATELLITE', 'ROADMAP' or 'TERRAIN'
			        zoom: 12,
			        markers:[
						{
							latitude: -2.2014,
							longitude: -80.9763,
							html: "_latlng"
						},
						{
							address: "Guayaquil, Ecuador",
							html: "My Hometown",
							popup: true
						},
						{
							address: "Galapagos, Ecuador",
							html: "_address"
						}
					],
					icon: {
						image: "assets/images/gmap_pin.png", 
						iconsize: [26, 46],
						iconanchor: [12, 46]
					},
			        controls: {
			            panControl: true,
			            zoomControl: false,
			            mapTypeControl: true,
			            scaleControl: false,
			            streetViewControl: false,
			            overviewMapControl: false
			        }
			   });
			});
		</script>

	</body>
</html>