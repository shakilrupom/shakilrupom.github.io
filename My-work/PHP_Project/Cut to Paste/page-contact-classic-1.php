<?php
    session_start();
    include("assets/php/captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Contact Classic Right Map | BOOKRA</title>
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
									<li class="selected"><a href="index.html"><span>Home</span></a>
										
									</li>
									<li><a href="#"><span>About Us </span></a>
										<ul>
										<li><a href="#"><i class="fa fa-bookmark"></i>Our Management</a>
											<ul>
												<li><a href="#">Our Director</a>
													
												</li>
												<li><a href="#">Our Legagl Department</a>
													
												</li>
												<li><a href="#">Regional Members</a>
													
												</li>
												
												
											
											
												
												
											</ul>
										</li>
										<li><a href="#"><i class="fa fa-th"></i>Our Mission</a>
											<ul>
												<li><a href="#">Our Motive</a></li>
												<li><a href="#">Our Vision</a></li>
												<li><a href="#">Our Vision</a></li>
												<li><a href="#">Our Goal</a></li>

											</ul>
										</li>
										<li><a href="#"><i class="fa fa-heart-o"></i>Our Certificate</a>
											<ul>
												<li><a href="page-title.html">Govt. Authorization</a></li>
												<li><a href="page-title-bg.html">Certificate 2</a></li>
												<li><a href="page-title-center.html">Certificate 3</a></li>
												
												
												
											</ul>
										</li>
										
										
										
										</ul>
									</li>
									<li class="mega-menu"><a href="#"><span>Our Service</span></a>
										<!--<ul>
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
										</ul> -->
									</li>
									<li><a href="#"><span>Portfolio</span></a>
										<!--<ul>
											<li><a href="page-about-us.html">About us</a></li>
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
										</ul> -->
									</li>
									<li><a href="#"><span>Blog</span></a>
										<!--<ul>
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
										
										</ul> -->
									</li>
									<li><a href="#"><span>Team</span></a>
										<!--<ul>
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
										</ul> -->
									</li>
									<!--<li><a href="#"><span>Contact</span></a>
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
									</li> -->
                                    <li><a href="page-contact-classic-1.php"><span>Contact Us</span></a></li>
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
						<h1>Contact Classic Right Map</h1>
						<h3>This is sub heading text to describe the page functionality</h3>
					</div>
				</div>
				<div class="breadcrumbs">
					<div class="container">
						<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><a href="#">Pages</a><i class="fa fa-long-arrow-right main-color"></i><span>Contact Classic Right Map</span>
					</div>
				</div>

				<div class="md-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="heading style2">
									<h3 class="uppercase"><span class="main-color">Get In </span> Touch</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
								
								<hr class="dev-style2" />

								<form id="contact-form" class="ajax-form" name="contact" action="assets/php/sendemail.php" method="post" novalidate>

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

									<div class="form-group clearfix captcha-div">
	                                    <img alt="" src="<?php echo $_SESSION['captcha']['image_src']; ?>" id='captchaimg' class="left">
	                                    <input type="hidden" id="hidCap" value="<?php echo $_SESSION['captcha']['code']; ?>" data-error="Captcha does not match!" />
	                                    <input id="captcha_input" class="form-control sm required" name="captcha_input" type="text" placeholder="Enter the code here">
	                                </div>

									<div class="form-group m-t-2">
										<button class="btn main-bg btn-lg btn-3d uppercase" type="submit" id="contact-submit" name="contact-submit" value="submit">Send Message</button>
									</div>

								</form>	
								
							</div>
							<div class="col-md-5">
								<div id="ROADMAP" class="gmap full" style="height: 400px">
								    <p>This will be replaced with the Google Map.</p>
								</div>
								<div class="p-a-3 gry-bg">
									<h4 class="main-color uppercase">Headquarters:</h4>
									<ul class="details">
										<li>SKY POINT, (TORPIGNATTARA) VIA CASILINA 473; </br>ROME,ITALY
Rome </li>
										<li><i class="fa fa-phone main-color"></i><span><strong>Phone:</strong> 00393291898448 </span></li>
										<li><i class="fa fa-fax main-color"></i><span><strong>Viber :</strong> CELL: 00393291898448</span></li>
										<li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> info@eaglesofislan.com</span></li>
									</ul>
								</div>
								<div class="tbl social-list">
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Dribbble"><i class="fa fa-dribbble ic-dribbble"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Skype"><i class="fa fa-skype ic-skype"></i></a>
								</div>
							</div>
						</div>
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
						    		<a class="twitter-timeline" href="https://twitter.com" data-widget-id="529778322134167553"></a>
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
				    		<div class="copyrights col-md-5">© Copyrights <b class="main-color">Eagle of Islan</b> 2016. All rights reserved.</div>
				    						    		
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