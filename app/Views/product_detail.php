<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Product
</title>
<!-- Stylesheets -->
<link href="<?php echo WEB_DIR?>public/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/style.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo WEB_IMG ?>favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo WEB_IMG ?>favicon.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LC7N1ZZDYC"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-LC7N1ZZDYC');
   </script>
   <style>
      ol li{
         list-style-type: none;
      }
		.refresh {
			display: inline-block;
			transform: rotate(90deg);
			font-size: 22px;
    		color: white;
		}
   </style>

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Three -->
	<?= view('home_header'); ?>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="close-button">
					<span class="fa fa-solid fa-power-off fa-fw"></span>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
						
							<!-- Title Box -->
							<div class="title-box">
								<h5>Shopping <span>Bag</span></h5>
								<div class="price">$15 from free economy shipping</div>
							</div>
							
							<!-- Empty Cart Box -->
							<div class="empty-cart-box">
								<!-- No Product -->
								<div class="no-cart">
									<span class="icon fa fa-solid fa-cart-plus fa-fw"></span>
									No products in cart.
								</div>
							</div>
							
							<!-- Lower Box -->
							<div class="lower-box">
								<h5>Popular <span>Suggestions</span></h5>
									
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="public/images/resource/post-thumb-1.jpg" alt="" />
										</div>
										<h6><a href="#">Technical Support</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="public/images/resource/post-thumb-2.jpg" alt="" />
										</div>
										<h6><a href="#">Business Planning</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$205</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="public/images/resource/post-thumb-3.jpg" alt="" />
										</div>
										<h6><a href="#">Cyber Security</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- Main Slider Three -->
	<div class="main-slider-three">
		<div class="slider-three_icon-one" data-parallax='{"y" : -80}' style="background-image:url(public/images/icons/service-22.png)"></div>
		<div class="slider-three_icon-two" data-parallax='{"y" : 80}' style="background-image:url(public/images/icons/service-23.png)"></div>
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-three_image-layer" style="background-image:url(public/images/main-slider/3.jpg)"></div>
				<div class="slider-three_curve-layer" style="background-image:url(public/images/main-slider/curve.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<a class="slider-three_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<i class="ripple"></i>
						</a>
						<h1 class="slider-three_title">Discover Our Proven <br> formula to get Success.</h1>
						<div class="slider-three_text">See, most new coaches get so busy marketing themselves.</div>
						<!-- Button Box -->
						<div class="slider-three_button-box text-center">
							<a class="btn-style-seven theme-btn" href="#">
								<div class="btn-wrap">
									<span class="text-one">get started</span>
									<span class="text-two">get started</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-three_image-layer" style="background-image:url(public/images/main-slider/3.jpg)"></div>
				<div class="slider-three_curve-layer" style="background-image:url(public/images/main-slider/curve.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<a class="slider-three_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<i class="ripple"></i>
						</a>
						<h1 class="slider-three_title">Discover Our Proven <br> formula to get Success.</h1>
						<div class="slider-three_text">See, most new coaches get so busy marketing themselves.</div>
						<!-- Button Box -->
						<div class="slider-three_button-box text-center">
							<a class="btn-style-seven theme-btn" href="#">
								<div class="btn-wrap">
									<span class="text-one">get started</span>
									<span class="text-two">get started</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-three_image-layer" style="background-image:url(public/images/main-slider/3.jpg)"></div>
				<div class="slider-three_curve-layer" style="background-image:url(public/images/main-slider/curve.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<a class="slider-three_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<i class="ripple"></i>
						</a>
						<h1 class="slider-three_title">Discover Our Proven <br> formula to get Success.</h1>
						<div class="slider-three_text">See, most new coaches get so busy marketing themselves.</div>
						<!-- Button Box -->
						<div class="slider-three_button-box text-center">
							<a class="btn-style-seven theme-btn" href="#">
								<div class="btn-wrap">
									<span class="text-one">get started</span>
									<span class="text-two">get started</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Main Slider Three -->
	
	<!-- Services Three -->
	<section class="services-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url(public/images/background/pattern-38.png)"></div>
						<div class="service-block_five_icon"><img src="public/images/icons/service-18.png" alt="service" /></div>
						<h5 class="service-block_five_heading"><a href="service-detail.html">Best UI/UX Design Service</a></h5>
						<div class="service-block_five-text">Our customer get solutions & business opportunities.</div>
						<a href="service-detail.html" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url(public/images/background/pattern-38.png)"></div>
						<div class="service-block_five_icon"><img src="public/images/icons/service-19.png" alt="service" /></div>
						<h5 class="service-block_five_heading"><a href="service-detail.html">Business Planner for Clients</a></h5>
						<div class="service-block_five-text">Our customer get solutions & business opportunities.</div>
						<a href="service-detail.html" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url(public/images/background/pattern-38.png)"></div>
						<div class="service-block_five_icon"><img src="public/images/icons/service-20.png" alt="service" /></div>
						<h5 class="service-block_five_heading"><a href="service-detail.html">Sequrity provider for Business</a></h5>
						<div class="service-block_five-text">Our customer get solutions & business opportunities.</div>
						<a href="service-detail.html" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url(public/images/background/pattern-38.png)"></div>
						<div class="service-block_five_icon"><img src="public/images/icons/service-21.png" alt="service" /></div>
						<h5 class="service-block_five_heading"><a href="service-detail.html">Technical Service Provider</a></h5>
						<div class="service-block_five-text">Our customer get solutions & business opportunities.</div>
						<a href="service-detail.html" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Company One -->
	
	
	<!-- About Two -->
	<section class="about-two">
		<div class="about-two_pattern-two" style="background-image:url(public/images/background/pattern-13.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_pattern-one" style="background-image:url(<?php echo WEB_IMG ?>background/pattern-12.png)"></div>
					<div class="about-two_image">
						<img src="<?php echo WEB_IMG ?>resource/about-2.webp" alt="" />
						<!-- About One Detail -->
					
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<div class="sec-title_two">
							<div class="sec-title_two-title">About Our Company</div>
							<h2 class="sec-title_two-heading">Welcome <span>to</span> National <br> Switchgears!</h2>
						</div>
						<div class="about-two_text">National Switchgears is synonymous with Resistors. It was established in the year 1978 and is in business of designing and manufacturing resistor for various energy control applications since then. It is a professionally managed, highly focused and an ISO company.

</div>
						<div class="about-two_feature">
							<div class="row clearfix">
							
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="<?php echo WEB_IMG ?>icons/about-1.png" alt="about" />
										</span>
										<h6 class="about-two_block-heading"><br/>Experience</h6>
									</div>
								</div>
								
								<!-- About Two Block -->
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="<?php echo WEB_IMG?>icons/about-2.png" alt="about" />
										</span>
										<h6 class="about-two_block-heading"><br/>Technical Support</h6>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="d-flex flex-wrap">
							<a class="btn-style-three theme-btn btn-item" href="#">
								<div class="btn-wrap">
									<span class="text-one">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">Contact Us <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
							
							<!-- About Phone Box -->
							<div class="about-phone_box">
								<span class="about-phone_icon fa-solid fa-phone fa-fw"></span>
								Call for help <br>
								<a class="about-two_phone-number" href="tel:+91-124-3467-2345">91 124 3467 2345</a>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->
	
	<!-- CTA Two -->
	<section class="cta-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
		<div class="auto-container">
			<div class="cta-two_inner-container" style="background-image: url(images/background/map.png)">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="cta-two_author">
						<span class="cta-two_author-image"><img src="public/images/resource/author-9.png" alt="" /></span>
						Arnold Burner
						<i>Support Person</i>
					</div>
					<div class="cta-two_title">Contact with us Any time!</div>
					<!-- Button Box -->
					<div class="cta-two_button-box">
						<a class="btn-style-seven theme-btn" href="#">
							<div class="btn-wrap">
								<span class="text-one">Contact us!</span>
								<span class="text-two">Contact us!</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Two -->
	
	<!-- Services Four -->
	<section class="services-four">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three centered">
				<div class="sec-title_three-title">Our Feachered Services</div>
				<h2 class="sec-title_three-heading">We provide some <span>exclusive</span> <br> services for clients</h2>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-25.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">UI/UX Design</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-26.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">SEO & Marketing</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-27.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Business Planning</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-28.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Web Development</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-29.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Cloud Services</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="public/images/icons/service-30.gif" alt="service" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Hosting Services</a></h4>
								<div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
								<a class="service-block_six-more theme-btn" href="#">Discover more</a>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Button Box -->
				<div class="services-four_button-box text-center">
					<a class="btn-style-seven theme-btn" href="#">
						<div class="btn-wrap">
							<span class="text-one">get started</span>
							<span class="text-two">get started</span>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Four -->
	
	<!-- Contact One -->
	<section class="contact-one">
		<div class="contact-one_pattern" data-parallax='{"y" : 60}' style="background-image:url(public/images/background/pattern-42.png)"></div>
		<div class="contact-one_pattern-two" data-parallax='{"y" : -60}' style="background-image:url(public/images/background/pattern-43.png)"></div>
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three">
				<div class="sec-title_three-title">Contact Us</div>
				<h2 class="sec-title_three-heading">It’s very easy to <span>contact</span> us</h2>
			</div>
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_form-inner">
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="contact.html">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Your Name" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Web Address" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="email" placeholder="Email Address" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="" name="message" placeholder="Type Your Message"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<!-- Button Box -->
										<div class="button-box">
											<button class="theme-btn btn-style-seven">
												<span class="btn-wrap">
													<span class="text-one">Send Message Now</span>
													<span class="text-two">Send Message Now</span>
												</span>
											</button>
										</div>
									</div>
									
								</div>
							</form>
						</div>
						<!-- End Default Form -->
						
					</div>
				</div>
				<!-- Form Column -->
				<div class="contact-one_info-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_info-inner">
						<div class="row clearfix">
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-phone fa-fw"></span>
									Call Us for help!
									<strong>+ (888) 452 1505</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-map fa-fw"></span>
									Our Locations
									<strong>30 Commercial Road, Australia</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-envelope fa-fw"></span>
									Our Mail Address
									<strong>help@gmail.com <br> envato@gmail.com</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-clock fa-fw"></span>
									Official Timing:
									<strong>Mon-Sat 9:00 - 7:00</strong>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact One -->
	
	<!-- Testimonial Two -->
	<section class="testimonial-two">
		<div class="testimonial-two_pattern" data-parallax='{"y" : 60}' style="background-image:url(public/images/background/pattern-44.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="testimonial-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-two_image-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="testimonial-two_image">
							<img src="<?php echo WEB_IMG ?>resource/testmonial.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="testimonial-two_carousel-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-two_carousel-inner">
						<!-- Sec Title Three -->
						<div class="sec-title_three">
							<div class="sec-title_three-title">Testimonials</div>
							<h2 class="sec-title_three-heading">We have many good <br> <span>client’s</span> review</h2>
						</div>
						<div class="single-item-carousel owl-carousel owl-theme">
						
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="public/images/icons/quote.png" alt="service" /></span>
									<div class="testimonial-block_two-author">
										<img src="public/images/resource/author-10.jpg" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="public/images/icons/quote.png" alt="service" /></span>
									<div class="testimonial-block_two-author">
										<img src="public/images/resource/author-10.jpg" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="public/images/icons/quote.png" alt="service" /></span>
									<div class="testimonial-block_two-author">
										<img src="public/images/resource/author-10.jpg" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Two -->
	
	<!-- Clients Three -->
	<section class="clients-three">
		<div class="auto-container">
			<div class="clients-three_inner-container">
				<!-- Sponsors Carousel -->
				<ul class="sponsors-carousel-two owl-carousel owl-theme">
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/18.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="public/images/clients/18.png" alt=""></a></figure></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Clients Three -->
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best Switch Disconnectors?</h3>
				</div>
				<div class="right-box">
					<a class="btn-style-seven theme-btn" href="#">
						<div class="btn-wrap">
							<span class="text-one">get a quote</span>
							<span class="text-two">get a quote</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
<?= view('footer'); ?>
	
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="<?php echo WEB_DIR?>public/js/jquery.js"></script>
<script src="<?php echo WEB_DIR?>public/js/appear.js"></script>
<script src="<?php echo WEB_DIR?>public/js/owl.js"></script>
<script src="<?php echo WEB_DIR?>public/js/wow.js"></script>
<script src="<?php echo WEB_DIR?>public/js/odometer.js"></script>
<script src="<?php echo WEB_DIR?>public/js/nav-tool.js"></script>
<script src="<?php echo WEB_DIR?>public/js/mixitup.js"></script>
<script src="<?php echo WEB_DIR?>public/js/popper.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/parallax.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/parallax-scroll.js"></script>
<script src="<?php echo WEB_DIR?>public/js/bootstrap.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/tilt.jquery.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/magnific-popup.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="public/js/respond.js"></script><![endif]-->

</body>
</html>
