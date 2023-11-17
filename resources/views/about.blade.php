<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jinna Gik">
		<meta name="description" content="TrafficRein Template is a uniquely HTML5 template develop in HTML with a modern look.">
		<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

		<!-- favicon -->
		<link rel="shortcut icon"  href="{{ asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon"  href="{{ asset('assets/images/apple-touch-icon-57x57.png')}}">
		<link rel="apple-touch-icon" sizes="72x72"  href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}">

		<title>TrafficRein Digital</title>

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
					<section id="up" class="section-bg-dark" data-scroll-section>
						<div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
							<!-- padding-top-bottom-150 start -->
							<div class="padding-top-bottom-150">
								<!-- title start -->
								<div class="container small">
									<h2 class="headline-xxxl headline-uppercase after-preloader-anim">
										<span class="d-block">
											<span class="anim-chars-fadein" data-splitting>Optimal Strategies</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>& Concepts for</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.8" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>Your Enterprise</span>
										</span>
									</h2>
								</div><!-- title end -->
							</div><!-- padding-top-bottom-150 end -->

							<!-- background start -->
							<div class="pos-rel hidden-box height-100vh">
								<!-- bg-parallax -->
								<div class="bg-parallax" style="background-image:url(assets/images/backgrounds/ian-dooley-10ca-K3e6Ko-unsplash.jpg)" data-scroll data-scroll-speed="-1.5"></div>
								<a href="https://www.youtube.com/watch?v=hitNXU4PoRU" class="play-button js-popup-youtube js-pointer-large">
									<span class="play-button__inner"></span>
								</a>
							</div><!-- background end -->
						</div>
					</section><!-- page head end -->

					<!-- about us start -->
					<section class="section-bg-light" data-scroll-section>
						<!-- container start -->
						<div class="container padding-top-60 padding-bottom-150">
							<!-- flex-container start -->
							<div class="flex-container flex-align-center padding-top-60">
								<!-- column start -->
								<div class="five-columns padding-top-30">
									<div class="hidden-box">
										<div data-scroll data-scroll-speed="-1.2">
											<div class="anim-img-reveal" data-scroll data-scroll-offset="10%" style="background-image:url(assets/images/about/ian-dooley-1yl3jzKoKXg-unsplash.jpg)">
												<img src="{{ asset('assets/images/about/ian-dooley-1yl3jzKoKXg-unsplash.jpg')}}" alt="About us">
											</div>
										</div>
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="seven-columns padding-top-30 text-color-mix-blend" data-scroll data-scroll-speed="1">
									<div class="d-inline-block">
										<div class="scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="hidden-box text-left-offset">
												<h2 class="headline-xl anim-text-slide">About us</h2>
											</div>
										</div>
									</div>
									<div class="column-l-margin-40 margin-top-20">
										<p class="body-text-m max-width-400 d-inline-block anim-split-lines" data-scroll data-scroll-offset="20%">We are Digital Agency, your one-stop shop for all your online needs. We help you grow your business online with our services, such as web design, graphic design, content writing, SEO, social media marketing, and more. We have a team of passionate, creative, and professional experts who use the latest tools and technologies to deliver high-quality work. We have worked with clients from various industries and helped them create amazing websites, content, campaigns, and customers. We are not just a digital agency, we are your partner in success. We care about your vision and goals. We listen to your needs and provide customized solutions. We work with you until you are happy.</p>
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->

							<!-- flex-container start -->
							<div class="flex-container flex-align-center reverse padding-top-60">
								<!-- column start -->
								<div class="seven-columns padding-top-30 text-color-mix-blend text-right z-index-2" data-scroll data-scroll-speed="1">
									<div class="d-inline-block">
										<div class="scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="text-right-offset">
												<h3 class="headline-xl">
													<span class="hidden-box d-block">
														<span class="anim-text-slide">Branding &</span>
													</span>
													<span class="hidden-box d-block">
														<span class="anim-text-slide tr-delay-02">Development</span>
													</span>
												</h3>
											</div>
										</div>
									</div>
									<div class="column-r-margin-40 margin-top-20">
										<p class="body-text-m max-width-400 d-inline-block anim-split-lines" data-scroll data-scroll-offset="20%">We are Digital Agency, your online partner. We help you grow your business with our branding and development services. We have a team of passionate, creative, and professional experts who use the latest tools and technologies. We have worked with clients from various industries and helped them create amazing brands and websites. We care about your vision and goals. We listen to your needs and provide customized solutions. We work with you until you are happy.</p>
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="five-columns padding-top-30">
									<div class="hidden-box">
										<div data-scroll data-scroll-speed="-1.2">
											<div class="anim-img-reveal" data-scroll data-scroll-offset="10%" style="background-image:url(assets/images/about/ian-dooley-RTr1c-ZLe0c-unsplash.jpg)">
												<img src="{{ asset('assets/images/about/ian-dooley-RTr1c-ZLe0c-unsplash.jpg')}}" alt="About us">
											</div>
										</div>
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- container end -->
					</section><!-- about us end -->

					<!-- section-bg-dark start -->
					<div class="section-bg-dark" data-scroll-section>
						<!-- padding-top-bottom-30 start -->
						<div class="padding-top-bottom-30">
							<!-- clients start -->
							<section class="padding-top-bottom-120 container small">
								<h2 class="headline-m anim-split-lines max-width-400" data-scroll data-scroll-offset="20%">Fine Folks We’ve Worked With</h2>

								<!-- flex-container start -->
								<div class="flex-container padding-top-30">
									<!-- column start -->
									<div class="three-columns padding-top-60">
										<div class="text-center">
											<img class="client-logo" src="{{ asset('assets/images/clients/Mohsin.png')}}" alt="clients logo">
										</div>
									</div><!-- column end -->

									<!-- column start -->
									<div class="three-columns padding-top-60">
										<div class="text-center">
											<img class="client-logo" src="{{ asset('assets/images/clients/crocodile.png')}}" alt="clients logo">
										</div>
									</div><!-- column end -->

									<div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/luxorosh.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/dongolok.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/eptep-septep.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/guldoyjan.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/jorgo.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/judoboy.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/kizil-jindi.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/meyman.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/olchobay.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
                                    <!-- column start -->
                                    <div class="three-columns padding-top-60">
                                        <div class="text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/clients/tamaktan.png')}}" alt="clients logo">
                                        </div>
                                    </div><!-- column end -->
                                    
								</div><!-- flex-container end -->
							</section><!-- clients end -->

							<!-- marquee start -->
							<section class="padding-top-bottom-30">
								<div class="padding-top-bottom-90 pos-rel">
									<div class="line-top"></div>
									<!-- marquee start -->
									<h3 class="marquee headline-xxxxl headline-uppercase hidden-box" data-duration="20000" data-gap="20">
										<span class="text-stroke-white">Best</span>
										Solutions &
										<span class="text-stroke-white">Ideas</span>
										for Your Business /
										<span class="text-stroke-white">Best</span>
										Solutions &
										<span class="text-stroke-white">Ideas</span>
										for Your Business /
									</h3><!-- marquee end -->
									<div class="line-bottom"></div>
								</div>
							</section><!-- marquee end -->

							<!-- testimonials start -->
							<section class="padding-top-bottom-120 container small">
								<h2 class="headline-m anim-split-lines" data-scroll data-scroll-offset="20%">Client's Feedback</h2>

								<!-- pos-rel start -->
								<div class="pos-rel padding-top-90 padding-bottom-90">
									<!-- js-1-view-slider start -->
									<div class="js-1-view-slider hidden-box">
										<!-- swiper-wrapper start -->
										<div class="swiper-wrapper slider-scrollanim-activate" data-scroll>
											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<!-- anim-img-scale start -->
												<div class="anim-scale testimonials-author border-radius-50perc">
													<img class="anim-scale__inner" src="assets/images/testimonials/ivana-cajina-_7LbC5J-jw4-unsplash.jpg" alt="author">
												</div><!-- anim-img-scale end -->
												<p class="quote margin-top-60 body-text-m anim-fade-to-left">Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin.</p>
												<div class="text-right margin-top-20">
													<div class="headline-xxxs anim-chars-blur" data-splitting>Brian Amos</div>
													<div class="subhead-xs margin-top-5 anim-chars-blur" data-splitting>Health educator</div>
												</div>
											</div><!-- swiper-slide end -->

											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<!-- anim-img-scale start -->
												<div class="anim-scale testimonials-author border-radius-50perc">
													<img class="anim-scale__inner" src="{{ asset('assets/images/testimonials/radu-florin-G8hUrwJZqGs-unsplash.jpg')}}" alt="author">
												</div><!-- anim-img-scale end -->
												<p class="quote margin-top-60 body-text-m anim-fade-to-left">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct.</p>
												<div class="text-right margin-top-20">
													<div class="headline-xxxs anim-chars-blur" data-splitting>Edward Jordan</div>
													<div class="subhead-xs margin-top-5 anim-chars-blur" data-splitting>Fashion designer</div>
												</div>
											</div><!-- swiper-slide end -->

											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<!-- anim-img-scale start -->
												<div class="anim-scale testimonials-author border-radius-50perc">
													<img class="anim-scale__inner" src="{{ asset('assets/images/testimonials/oliver-ragfelt-khV4fTy6-D8-unsplash.jpg')}}" alt="author">
												</div><!-- anim-img-scale end -->
												<p class="quote margin-top-60 body-text-m anim-fade-to-left">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw.</p>
												<div class="text-right margin-top-20">
													<div class="headline-xxxs anim-chars-blur" data-splitting>James Hatcher</div>
													<div class="subhead-xs margin-top-5 anim-chars-blur" data-splitting>Investor</div>
												</div>
											</div><!-- swiper-slide end -->

											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<!-- anim-img-scale start -->
												<div class="anim-scale testimonials-author border-radius-50perc">
													<img class="anim-scale__inner" src="assets/images/testimonials/radu-florin-z51LHDsk_xw-unsplash.jpg" alt="author">
												</div><!-- anim-img-scale end -->
												<p class="quote margin-top-60 body-text-m anim-fade-to-left">Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha.</p>
												<div class="text-right margin-top-20">
													<div class="headline-xxxs anim-chars-blur" data-splitting>Frank Bell</div>
													<div class="subhead-xs margin-top-5 anim-chars-blur" data-splitting>Banquet manager</div>
												</div>
											</div><!-- swiper-slide end -->

											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<!-- anim-img-scale start -->
												<div class="anim-scale testimonials-author border-radius-50perc">
													<img class="anim-scale__inner" src="{{ asset('assets/images/testimonials/radu-florin-OP8655xgBjo-unsplash.jpg')}}" alt="author">
												</div><!-- anim-img-scale end -->
												<p class="quote margin-top-60 body-text-m anim-fade-to-left">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over.</p>
												<div class="text-right margin-top-20">
													<div class="headline-xxxs anim-chars-blur" data-splitting>Mary Ross</div>
													<div class="subhead-xs margin-top-5 anim-chars-blur" data-splitting>Cytotechnologist</div>
												</div>
											</div><!-- swiper-slide end -->
										</div><!-- swiper-wrapper end -->

										<!-- swiper-button-prev start -->
										<div class="swiper-button-prev-box">
											<div class="swiper-button-prev"></div>
										</div><!-- swiper-button-prev end -->
										<!-- swiper-button-next start -->
										<div class="swiper-button-next-box">
											<div class="swiper-button-next"></div>
										</div><!-- swiper-button-next end -->

										<!-- swiper-pagination start -->
										<div class="pagination-box">
											<div class="swiper-pagination"></div>
										</div><!-- swiper-pagination end -->
									</div><!-- js-1-view-slider end -->
								</div><!-- pos-rel end -->
							</section><!-- testimonials end -->
						</div><!-- padding-top-bottom-30 end -->
					</div><!-- section-bg-dark end -->

					<!-- section-bg-light start -->
					<div class="section-bg-light" data-scroll-section>
						<!-- padding-top-bottom-30 start -->
						<div class="padding-top-bottom-30">
							<!-- team start -->
							<section class="padding-top-bottom-120 container small">
								<h2 class="headline-xxl text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Our Creative Co-founders</h2>

								<!-- padding-top-90 start -->
								<div class="padding-top-90">
									<div class="scrollanim-activate" data-scroll>
										<div class="anim-fade-to-left d-block">
											<!-- js-team-slider start -->
											<div class="js-team-slider js-pointer-drag" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal">
												<!-- swiper-wrapper start -->
												<div class="swiper-wrapper">
													<!-- swiper-slide start -->
													<div class="swiper-slide">
														<img src="{{ asset('assets/images/team/ian-dooley-wzRKn-AjKf4-unsplash.jpg')}}" alt="Afridi Shams">
														<div class="margin-top-20 margin-left-40">
															<h4 class="headline-xxxs text-color-black">Afridi Shams</h4>
															<p class="subhead-xs text-color-black margin-top-5">Founder & Digital Marketer</p>
														</div>
													</div><!-- swiper-slide end -->

													<!-- swiper-slide start -->
													<div class="swiper-slide">
														<img src="{{ asset('assets/images/team/force-majeure-GGPq78xM8T0-unsplash.jpg')}}" alt="Amanda Bryan">
														<div class="margin-top-20 margin-left-40">
															<h4 class="headline-xxxs text-color-black">Shahoriar Fahim</h4>
															<p class="subhead-xs text-color-black margin-top-5">Co-Founder & Software Developer</p>
														</div>
													</div><!-- swiper-slide end -->
												</div><!-- swiper-wrapper end -->
											</div><!-- js-team-slider end -->
										</div>
									</div>
								</div><!-- padding-top-90 end -->
							</section><!-- team end -->

							<!-- skills start -->
							<section class="container small padding-top-bottom-30">
								<h2 class="headline-m text-color-black text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Our Skills</h2>

								<!-- padding-top-90 start -->
								<div class="padding-top-90">
									<!-- line-scrollanim-activate start -->
									<div class="line-scrollanim-activate" data-scroll data-scroll-offset="30%">
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="anim-line-top black"></div>
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-black skills-5-col padding-top-10">45+</div>
												<h4 class="headline-xxxs text-color-black skills-4-col padding-top-10">Clients</h4>
												<ul class="list skills-3-col subhead-xs text-color-black padding-top-10">
													<li class="list__item dot black">
														<p>Best agency</p>
													</li>
													<li class="list__item dot black">
														<p>Best website</p>
													</li>
													<li class="list__item dot black">
														<p>Best freelancer</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom black tr-delay-01"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-black skills-5-col padding-top-10">532</div>
												<h4 class="headline-xxxs text-color-black skills-4-col padding-top-10">Projects</h4>
												<ul class="list skills-3-col subhead-xs text-color-black padding-top-10">
													<li class="list__item dot black">
														<p>Branding</p>
													</li>
													<li class="list__item dot black">
														<p>Web design</p>
													</li>
													<li class="list__item dot black">
														<p>Web development</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom black tr-delay-02"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-black skills-5-col padding-top-10">236</div>
												<h4 class="headline-xxxs text-color-black skills-4-col padding-top-10">Freelancers</h4>
												<ul class="list skills-3-col subhead-xs text-color-black padding-top-10">
													<li class="list__item dot black">
														<p>HTML/CSS</p>
													</li>
													<li class="list__item dot black">
														<p>JavaScript</p>
													</li>
													<li class="list__item dot black">
														<p>WordPress</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom black tr-delay-03"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-black skills-5-col padding-top-10">32</div>
												<h4 class="headline-xxxs text-color-black skills-4-col padding-top-10">Permanent Team Members</h4>
												<ul class="list skills-3-col subhead-xs text-color-black padding-top-10">
													<li class="list__item dot black">
														<p>Instagram</p>
													</li>
													<li class="list__item dot black">
														<p>Behance</p>
													</li>
													<li class="list__item dot black">
														<p>Youtube</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom black tr-delay-04"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-black skills-5-col padding-top-10">13</div>
												<h4 class="headline-xxxs text-color-black skills-4-col padding-top-10">Ongoing Projects</h4>
												<ul class="list skills-3-col subhead-xs text-color-black padding-top-10">
													<li class="list__item dot black">
														<p>Branding & Identity</p>
													</li>
													<li class="list__item dot black">
														<p>Digital Strategy</p>
													</li>
													<li class="list__item dot black">
														<p>Creative Concepts & Ideas</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom black tr-delay-05"></div>
										</div><!-- pos-rel end -->
									</div><!-- line-scrollanim-activate end -->
								</div><!-- padding-top-90 end -->
							</section><!-- skills end -->

							<!-- img marquee start -->
							<section class="padding-top-bottom-120">
								<div class="scrollanim-activate" data-scroll>
									<div class="padding-bottom-90 container small">
										<h2 class="headline-m text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Creative Workdays</h2>
									</div>

									<!-- js-infinite-slider start -->
									<div class="js-infinite-slider hidden-box anim-fade-to-top d-block">
										<!-- swiper-wrapper start -->
										<div class="swiper-wrapper d-flex flex-align-end">
											<!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/ian-dooley-8HqPXTToMn0-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/ian-dooley-TT-ROxWj9nA-unsplash-2.jpg')}}" alt="About us">
                                                <img class="padding-top-20" src="{{ asset('assets/images/about/about_slider/ian-dooley-sB2hUtvU_Mc-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/force-majeure-Fn4Lua7N1NE-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/ian-dooley-pB7dccwGFTM-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/force-majeure-a5-_X8IktJg-unsplash.jpg')}}" alt="About us">
                                                <img class="padding-top-20" src="{{ asset('assets/images/about/about_slider/ian-dooley-toJOG3kbyD0-unsplash-2.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/force-majeure-keakjB6qkXs-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/ian-dooley-HBGUsKKTxdU-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/force-majeure-Tqv3noCldRc-unsplash-2.jpg')}}" alt="About us">
                                                <img class="padding-top-20" src="{{ asset('assets/images/about/about_slider/ian-dooley-Z4by5OSPAHg-unsplash.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/about/about_slider/ian-dooley-I2jxLD6obeM-unsplash-2.jpg')}}" alt="About us">
                                            </div><!-- swiper-slide end -->
                                            
										</div><!-- swiper-wrapper end -->
									</div><!-- js-infinite-slider end -->
								</div>
							</section><!-- img marquee end -->
						</div><!-- padding-top-bottom-30 end -->
					</div><!-- section-bg-light end -->
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
										<a href="index.html" class="footer-nav-btn js-pointer-small js-animsition-link">Home</a>
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
										<a href="contact.html" class="footer-nav-btn js-pointer-small js-animsition-link">Contact</a>
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
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+880 963 852 1414</a>
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