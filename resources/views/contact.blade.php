<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="TrafficRein">
		<meta name="description" content="TR2 Template is a uniquely HTML5 template develop in HTML with a modern look.">
		<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

		<!-- favicon -->
		<link rel="shortcut icon"  href="{{ asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon"  href="{{ asset('assets/images/apple-touch-icon-57x57.png')}}">
		<link rel="apple-touch-icon" sizes="72x72"  href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}">

		<title>TrafficRein Digital | Contact us</title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

		<!-- styles -->
		<link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
		<link  href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body class="preloader cursor-anim-enable">
		<div class="preloader__out-overlay"></div>

		<!-- preloader-loading start -->
		<div class="preloader__loading in">
			<div class="preloader__loading-anim" data-splitting>Loading...</div>
		</div>
		<div class="preloader__loading out">
			<div class="preloader__loading-anim" data-splitting>Loading...</div>
		</div><!-- preloader-loading end -->

		<!-- pointer start -->
		<div class="pointer js-pointer" id="js-pointer">
			<div class="pointer__inner drag">drag</div>
			<i class="pointer__inner fas fa-search"></i>
		</div><!-- pointer end -->

		<!-- header start -->
		<header class="fixed-header">
			<!-- logo start -->
			<div class="header-logo">
				<a href="{{ route('home')}}" class="header-logo__box js-pointer-large js-animsition-link">
					<img class="header-logo__img" src="{{ asset('assets/images/logo/logo.png')}}" alt="logo">
				</a>
			</div><!-- logo end -->

			<!-- menu-icon start -->
			<div class="menu-icon js-menu-open-close js-pointer-large">
				<div class="menu-icon__box">
					<span class="menu-icon__inner"></span>
					<span class="menu-icon__close"></span>
				</div>
			</div><!-- menu-icon end -->
		</header><!-- header end -->

		<!-- navigation overlay -->
		<div class="nav-overlay"></div>
		<!-- navigation start -->
		<nav class="nav-container js-dropdown-active-box">
			<!-- nav-box start -->
			<div class="container small nav-box">
				<!-- dropdown close btn start -->
				<div class="dropdown-close">
					<div class="dropdown-close__inner js-dropdown-close js-pointer-large">
						<span class="dropdown-close__arrow"></span>
					</div>
				</div><!-- dropdown close btn end -->

				<!-- menu-box start -->
				<ul class="menu-box nav-bg-overlay-box">
					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a  href="{{route('home')}}" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Home">Home</span>
						</a>

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/bonnet-casual-close-up-2802601.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a href="{{ route('about')}}" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="About">About</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/pexels-marlene-1019771.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-nav-bg-active js-dropdown-open">
						<a class="nav-btn dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Services">Services</span>
						</a>

						<!-- dropdown start -->
						<ul class="menu-box dropdown js-dropdown">
							<li class="nav-btn-box">
								<a href="{{ route('services') }}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="All Services">All Services</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="{{ route('web_development')}}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Web Development">Web Development</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="{{ route('app_development')}}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="App Development">App Development</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="{{ route('enterprise_software_development')}}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Enterprise Software Development">Enterprise Software Development</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="{{ route('graphics_design')}}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Graphics Design">Graphics Design</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="{{ route('digital_marketing')}}" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Digital Marketing">Digital Marketing</span>
								</a>
							</li>
						</ul><!-- dropdown end -->
						
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/two-vases-on-table-842950.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					{{-- <li class="nav-btn-box js-nav-bg-change js-dropdown-open">
						<a class="nav-btn dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Portfolio">Portfolio</span>
						</a>

						
						<ul class="menu-box dropdown js-dropdown">
							<li class="nav-btn-box">
								<a href="portfolio_fullscreen.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Fullscreen">Fullscreen</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_carousel.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Carousel">Carousel</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_grid-3-col.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Grid 3 Col">Grid 3 Col</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_flex-columns.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Flex Columns">Flex Columns</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_creative-grid.html" class="nav-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Creative Grid">Creative Grid</span>
								</a>
							</li>
						</ul>

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/goashape-RvyJGaoaWrs-unsplash.jpg);"></div>
						</div>
					</li> --}}
					<!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					{{-- <li class="nav-btn-box js-nav-bg-change">
						<a href="blog.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Blog">Blog</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/face-facial-hair-fashionable-2555100.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end --> --}}

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a href="{{  route('contact') }}" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Contact">Contact</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/architectural-design-architecture-building-exterior-1707823.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->
				</ul><!-- menu-box end -->
			</div>
			<!-- nav-box end -->
		</nav><!-- navigation end -->

		<!-- scroll-content start -->
		<div id="js-scroll-content">
			<!-- js-animsition-overlay start -->
			<div class="js-animsition-overlay" data-animsition-overlay="true">
				<!-- main start -->
				<main class="main-content">
					<!-- page head start -->
					<section id="up" class="pos-rel hidden-box" data-scroll-section>
						<div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
							<!-- video-bg-box start -->
							<div class="video-bg-box" data-scroll data-scroll-speed="-1.5">
								<video src="http://www.nurseitmukaytegin.com/envato-templates/videos/team.mp4" class="video-bg" muted loop autoplay playsinline poster="assets/images/backgrounds/team.jpg"></video>
							</div><!-- video-bg-box end -->

							<!-- bg-overlay -->
							<div class="bg-overlay-black"></div>

							<!-- flex-min-height-100vh start -->
							<div class="flex-min-height-100vh">
								<div class="padding-top-bottom-150 container small">
									<h2 class="headline-xxl headline-uppercase after-preloader-anim">
										<span class="d-block">
											<span class="anim-chars-fadein" data-splitting>The Creative</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>Agency That</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.8" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>Your Businnes Needs!</span>
										</span>
									</h2>
								</div>
							</div><!-- flex-min-height-100vh end -->

							<!-- to top btn start -->
							<a href="#down" class="scroll-to-btn to-down js-pointer-large" data-scroll-to>
								<div class="scroll-to-down-box">
									<span class="scroll-to-btn__arrow"></span>
								</div>
							</a><!-- to top btn end -->
						</div>
					</section><!-- page head end -->

					<!-- contact us start -->
					<section id="down" class="section-bg-dark" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- flex-container start -->
							<div class="container flex-container flex-align-center padding-top-60 padding-bottom-150">
								<!-- column start -->
								<div class="six-columns column-100-999 padding-top-90">
									<div class="column-r-margin-20-999 hidden-box">
										<div data-scroll data-scroll-speed="-1.3">
											<div class="anim-img-reveal" data-scroll data-scroll-offset="20%" style="background-image:url(assets/images/contact/watcharlie-ywUYblWR0tc-unsplash.jpg)">
												<img src="{{ asset('assets/images/contact/watcharlie-ywUYblWR0tc-unsplash.jpg')}}" alt="Contact photo">
											</div>
										</div>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="six-columns column-100-999 padding-top-90 z-index-2">
									<!-- column-l-margin-20-999 start -->
									<div class="column-l-margin-20-999" data-scroll data-scroll-speed="1">
										<!-- title start -->
										<h2 class="padding-bottom-90 d-inline-block">
											<a href="#" class="text-left-offset headline-xl headline-uppercase hover-stroke-fill-white js-pointer-large" data-text="contact us">contact us</a>
										</h2><!-- title end -->

										<!-- pos-rel start -->
										<div class="pos-rel">
											<!-- anim-line-top -->
											<div class="anim-line-top" data-scroll data-scroll-offset="20%"></div>

											<!-- flex-container start -->
											<div class="flex-container">
												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">General Contact</h4>
														<div class="margin-top-20">
															<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+880 963 852 1414</a>
															<div class="margin-top-bottom-5">
																<p class="subhead-xxs text-color-b0b0b0">9.00 — 18.00, Mon to Fri</p>
															</div>
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">info@trafficrein.digital</a>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Support</h4>
														<div class="margin-top-20">
															<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+880 19 1108 1080</a>
															<div class="margin-top-bottom-5">
																<p class="subhead-xxs text-color-b0b0b0">9.00 — 18.00, Mon to Fri</p>
															</div>
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">support@trafficrein.digital</a>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Address</h4>
														<div class="margin-top-20">
															<p class="subhead-xxs text-color-b0b0b0">
																8 Monthope Rd, London E1 5LS<br>
																United Kingdom
															</p>
															<div class="margin-top-5">
																<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">open in google maps</a>
															</div>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Careers</h4>
														<div class="margin-top-20">
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">career@trafficrein.digital</a>
															<div class="margin-top-5">
																<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small"></a>
															</div>
														</div>
													</div>
												</div><!-- column end -->
											</div><!-- flex-container end -->
										</div><!-- pos-rel end -->
									</div><!-- column-l-margin-20-999 end -->
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- contact us end -->

					<!-- form section start -->
					<section class="pos-rel hidden-box" data-scroll-section>
						<!-- bg-parallax -->
						<div class="bg-parallax" style="background-image:url(assets/images/backgrounds/watcharlie-gGtRPDcW5kE-unsplash.jpg)" data-scroll data-scroll-speed="-1.5"></div>

						<!-- bg-overlay -->
						<div class="bg-overlay-black bg-overlay-black_deep"></div>

						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- container start -->
							<div class="container small padding-top-bottom-150">
								<!-- pos-rel start -->
								<div class="pos-rel">
									<!-- form-box start -->
									<div class="form-box scrollanim-activate line-scrollanim-activate form-anim-activate" data-scroll data-scroll-offset="30%">
										<!-- title start -->
										<div class="text-center">
											<h3 class="headline-xxxxs anim-fade-to-top">Lets Get In Touch!</h3>
										</div><!-- title end -->

										<!-- form start -->
										<form method="post" name="formobrsv" id="send_form">
											<!-- flex-container start -->
											<div class="flex-container padding-top-60">
												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="text" name="first_name" id="first_name" required class="form-input js-pointer-small">
														<label for="first_name" class="form-label" data-text="First name">First name</label>
														<div class="anim-line-bottom"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="text" name="last_name" id="last_name" required class="form-input js-pointer-small">
														<label for="last_name" class="form-label tr-delay-01" data-text="Last name">Last name</label>
														<div class="anim-line-bottom tr-delay-01"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="email" name="email" id="email" required class="form-input js-pointer-small">
														<label for="email" class="form-label tr-delay-02 email-label" data-text="Email address">Email address</label>
														<div class="anim-line-bottom tr-delay-02"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="twelve-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<textarea name="message" id="message" required class="form-input js-pointer-small"></textarea>
														<label for="message" class="form-label tr-delay-03" data-text="Message content">Message content</label>
														<div class="anim-line-bottom tr-delay-03"></div>
													</div>
												</div><!-- column end -->
											</div><!-- flex-container end -->

											<!-- button start -->
											<div class="padding-top-90 text-center">
												<button id="send" class="border-btn js-pointer-large anim-fade-to-top tr-delay-06">
													<span class="border-btn__inner">submit</span>
													<span class="btn-wait">Wait</span>
													<span class="border-btn__lines-1"></span>
													<span class="border-btn__lines-2"></span>
												</button>
											</div><!-- button end -->
										</form><!-- form end -->
									</div><!-- form-box end -->

									<!-- alert start -->
									<div class="js-popup-fade" id="m_sent">
										<div class="js-popup text-center">
											<div class="popup-icon">
												<i class="fas fa-check"></i>
											</div>
											<div class="popup-alert headline-xs">
												Thank you!<br>
												Your submission<br>
												has been received!
											</div>
											<div class="flip-btn js-popup-close js-pointer-large" data-splitting>Close</div>
										</div>
									</div><!-- alert end -->

									<!-- alert start -->
									<div class="js-popup-fade" id="m_err">
										<div class="js-popup text-center">
											<div class="popup-icon">
												<i class="fas fa-times"></i>
											</div>
											<div class="popup-alert headline-xs">Error</div>
											<div class="flip-btn js-popup-close js-pointer-large" data-splitting>Close</div>
										</div>
									</div><!-- alert end -->
								</div><!-- pos-rel end -->
							</div><!-- container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- form section end -->
				</main><!-- main end -->

				<!-- footer start -->
				<footer class="section-bg-dark" data-scroll-section>
					<!-- container start -->
					<div class="container padding-top-bottom-30" data-scroll data-scroll-speed="-4" data-scroll-position="bottom">
						<!-- flex-container start -->
						<div class="flex-container flex-align-center">
							<!-- column start -->
							<div class="eight-columns padding-top-90">
								<h4 class="column-l-r-margin-10 headline-s headline-uppercase">
									The Best<br>
									Agency for<br>
									Your Businnes
								</h4>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-90">
								<ul class="column-l-r-margin-10 list">
									<li class="list__item">
										<a href="{{ route('home') }}" class="footer-nav-btn js-pointer-small js-animsition-link">Home</a>
									</li>
									<li class="list__item">
										<a href="about.html" class="footer-nav-btn js-pointer-small js-animsition-link">About</a>
									</li>
									<li class="list__item">
										<a href="services.html" class="footer-nav-btn js-pointer-small js-animsition-link">Services</a>
									</li>
									<li class="list__item">
										<a href="portfolio_fullscreen.html" class="footer-nav-btn js-pointer-small js-animsition-link">Portfolio</a>
									</li>
									<li class="list__item">
										<a href="blog.html" class="footer-nav-btn js-pointer-small js-animsition-link">Blog</a>
									</li>
									<li class="list__item">
										<a href="{{ route('contact') }}" class="footer-nav-btn js-pointer-small js-animsition-link">Contact</a>
									</li>
								</ul>
							</div><!-- column end -->
						</div><!-- flex-container end -->

						<!-- flex-container start -->
						<div class="flex-container padding-top-30">
							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Email:</div>
									<div class="margin-top-20">
										<a href="#" class="line-btn js-pointer-small">info@trafficrein.digital</a>
										<div class="margin-top-5">
											<a href="#" class="line-btn js-pointer-small">career@trafficrein.digital</a>
										</div>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Phone:</div>
									<div class="margin-top-20">
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+880 19 1108 1080</a>
										<div class="margin-top-5">
											<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small"></a>
										</div>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Address:</div>
									<div class="margin-top-20">
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">
											8 Monthope Rd, London E1 5LS<br>
											United Kingdom
										</a>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="twelve-columns padding-top-90">
								<div class="column-l-r-margin-10 padding-top-30 pos-rel">
									<div class="anim-line-top" data-scroll data-scroll-offset="5%"></div>
									<!-- footer-social start -->
									<ul class="list list_row list_margin-30px">
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Facebook</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Dribbble</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Instagram</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Youtube</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Behance</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Twitter</a>
										</li>
									</ul><!-- footer-social end -->
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="twelve-columns padding-top-120">
								<div class="column-l-r-margin-10 pos-rel">
									<p class="copyright margin-right-30">
										&copy; Copyright 2024 TrafficRein Digital.  <a href="#" class="copyright__author js-pointer-small"></a>
									</p>
									<!-- to top btn start -->
									<a href="#up" class="scroll-to-btn js-pointer-large" data-scroll data-scroll-repeat data-scroll-to>
										<span class="scroll-to-btn__arrow"></span>
									</a><!-- to top btn end -->
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</footer><!-- footer end -->
			</div><!-- js-animsition-overlay end -->
		</div><!-- scroll-content end -->

		<!-- scripts -->
		<script src="{{ asset('assets/js/plugins.js')}}"></script>
		<script src="{{ asset('assets/js/main.js')}}"></script>
	</body>
</html>