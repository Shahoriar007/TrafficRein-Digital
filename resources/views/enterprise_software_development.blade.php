<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jinna Gik">
		<meta name="description" content="TUMAR Template is a uniquely HTML5 template develop in HTML with a modern look.">
		<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

		<!-- favicon -->
		<link rel="shortcut icon"  href="{{ asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon"  href="{{ asset('assets/images/apple-touch-icon-57x57.png')}}">
		<link rel="apple-touch-icon" sizes="72x72"  href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}">

		<title>TrafficRein Digital | Enterprise Software Development</title>

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
							<!-- bg-parallax -->
							<div class="bg-parallax" style="background-image:url(assets/images/portfolio/project_06/esdmain.jpg)" data-scroll data-scroll-speed="-1.5"></div>

							<!-- flex-min-height-100vh start -->
							<div class="flex-min-height-100vh">
								<div class="padding-top-bottom-120 container text-center after-preloader-anim">
									<h2 class="headline-xxl headline-uppercase anim-chars-fadein" data-splitting>Enterprise Software Development</h2>
									<div data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
										<div class="subhead-s subhead-uppercase anim-chars-blur" data-splitting>Software Services for Your Business</div>
									</div>
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

					<!-- section-bg-dark start -->
					<section id="down" class="section-bg-dark" data-scroll-section>
						<!-- padding-top-bottom-120 start -->
						<div class="padding-top-bottom-120">
							<!-- marquee start -->
							<div class="marquee headline-xl hidden-box" data-duration="10000" data-gap="20">
								Identity / Marketing / <span class="text-stroke-white">UX Design</span> /
								Identity / Marketing / <span class="text-stroke-white">UX Design</span> /
								Identity / Marketing / <span class="text-stroke-white">UX Design</span> /
							</div><!-- marquee end -->

							<!-- container start -->
							<div class="container padding-top-120">
								<!-- flex-container start -->
								<div class="flex-container padding-top-70 padding-bottom-90 pos-rel">
									<!-- anim-line-top -->
									<div class="anim-line-top" data-scroll data-scroll-offset="20%"></div>
									<!-- column start -->
									<div class="four-columns padding-top-20">
										<div class="column-r-margin-20 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<h2 class="headline-xxxs anim-fade-to-left">Service Details</h2>
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="eight-columns padding-top-20">
										<div class="scrollanim-activate" data-scroll data-scroll-offset="20%">
											<p class="body-text-s text-color-dadada anim-fade-to-left tr-delay-01">Write something about SaaS Product, and how we can support businesses by our services.</p>
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="four-columns padding-top-60">
										<div class="column-r-margin-20 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<h6 class="headline-xxxs anim-fade-to-left">Software Type</h6>
											<!-- list start -->
											<ul class="list padding-top-20">
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-01">SaaS</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-02"></p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-03"></p>
												</li>
											</ul><!-- list end -->
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="four-columns padding-top-60">
										<div class="column-r-margin-20 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<h6 class="headline-xxxs anim-fade-to-left">Industries</h6>
											<!-- list start -->
											<ul class="list padding-top-20">
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-01">Categories Management</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-02">E-commerce Management</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-03">Business Management</p>
												</li>
											</ul><!-- list end -->
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="four-columns padding-top-60">
										<div class="column-r-margin-20 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<h6 class="headline-xxxs anim-fade-to-left">Specialities</h6>
											<!-- list start -->
											<ul class="list padding-top-20">
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-01">Customizable</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-02">Scalable</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-02">Secured</p>
												</li>
												<li class="list__item">
													<p class="subhead-xs anim-fade-to-left tr-delay-03">Efficient</p>
												</li>
											</ul><!-- list end -->
										</div>
									</div><!-- column end -->
									<!-- anim-line-bottom -->
									<div class="anim-line-bottom" data-scroll data-scroll-offset="20%"></div>
								</div><!-- flex-container end -->
							</div><!-- container end -->

							<!-- flex-container start -->
							<div class="flex-container container padding-top-100">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-20">
									<div class="column-r-margin-20-999">
										<h3 class="headline-xxs anim-split-lines" data-scroll data-scroll-offset="20%">Why We are Not Just Another Software Developer?</h3>
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-20">
									<p class="body-text-m text-color-dadada anim-split-lines" data-scroll data-scroll-offset="20%">Because we don't cook what we know how to cook. We cook based on what you will like to eat. And our specialisations are ****, *****, *****, ****, and *****. Each and every SaaS Product that you will receive from our end will be custom tailored based on your business needs.</p>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- padding-top-bottom-120 end -->
					</section><!-- section-bg-dark end -->

					<!-- background start -->
					<div class="hidden-box" data-scroll-section>
						<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.5">
							<img class="anim-opacity-scale" src="{{ asset('assets/images/portfolio/project_06/SAAS1.svg')}}" alt="project image">
						</div>
					</div><!-- background end -->

					<!-- section-bg-dark start -->
					<section class="section-bg-dark" data-scroll-section>
						<!-- container start -->
						<div class="container padding-top-100 padding-bottom-120">
							<!-- flex-container start -->
							<div class="flex-container">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-20">
									<h2 class="headline-xxs max-width-300 anim-split-lines" data-scroll data-scroll-offset="30%">Higly Secured Softwares</h2>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-20">
									<div class="column-l-margin-40-999">
										<p class="body-text-m text-color-dadada anim-split-lines" data-scroll data-scroll-offset="30%">Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim. Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest. Mixtape kinfolk cray, wolf palo santo brunch iPhone. 3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify. IPhone humblebrag kale chips hell of.</p>
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->

							<div class="padding-top-120">
								<a href="assets/images/portfolio/project_06/braden-collum-9HI8UJMSdZA-unsplash.jpg" class="d-block hidden-box js-pointer-zoom js-photo-popup">
									<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
										<img class="anim-opacity-scale" src="{{ asset('assets/images/portfolio/project_06/braden-collum-9HI8UJMSdZA-unsplash.jpg')}}" alt="project image">
									</div>
								</a>
							</div>
						</div><!-- container end -->
					</section><!-- section-bg-dark end -->

					<!-- section-bg-light start -->
					<section class="section-bg-light" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- flex-container start -->
							<div class="container flex-container padding-top-100 padding-bottom-120">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-20">
									<h2 class="headline-xxs text-color-black max-width-300 anim-split-lines" data-scroll data-scroll-offset="30%">Industries We Serve</h2>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-20">
									<div class="column-l-margin-40-999">
										<p class="body-text-m text-color-6d6d6d anim-split-lines" data-scroll data-scroll-offset="30%">Our SaaS software development service is adaptable to a wide range of industries, including but not limited to: Healthcare, Finance, Manufacturing, Education, Retail, Logistics, Energy Whether you're looking to enhance customer engagement, optimize internal processes, or expand your digital footprint, our SaaS Software Development Service is your gateway to achieving these objectives</p>
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- section-bg-light end -->

					<!-- background start -->
					<div class="hidden-box" data-scroll-section>
						<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.5">
							<img class="anim-opacity-scale" src="{{ asset('assets/images/portfolio/project_06/saas2.png')}}" alt="project image">
						</div>
					</div><!-- background end -->


					<!-- section-bg-dark start -->
					<section class="section-bg-dark" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- flex-container start -->
							<div class="container flex-container padding-top-100 padding-bottom-120">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-20">
									<h2 class="headline-xxs max-width-300 anim-split-lines" data-scroll data-scroll-offset="30%">Custom Need Based Designs</h2>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-20">
									<div class="column-l-margin-40-999">
										<p class="body-text-m text-color-dadada anim-split-lines" data-scroll data-scroll-offset="30%">Each of our softwares are designed and built based on the need of every clients.</p>
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- section-bg-dark end -->

					<!-- background start -->
					<div class="hidden-box" data-scroll-section>
						<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.5">
							<img class="anim-opacity-scale" src="{{ asset('assets/images/portfolio/project_06/saas3.jpg')}}" alt="project image">
						</div>
					</div><!-- background end -->

					<!-- section-bg-dark start -->
					<section class="section-bg-dark" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- width-100perc start -->
							<div class="width-100perc padding-top-100 padding-bottom-120">
								<!-- flex-container start -->
								<div class="flex-container container">
									<!-- column start -->
									<div class="four-columns column-100-999 padding-top-20">
										<h2 class="headline-xxs max-width-300 anim-split-lines" data-scroll data-scroll-offset="30%">Trust fund four dollar toast gentrify</h2>
									</div><!-- column end -->

									<!-- column start -->
									<div class="eight-columns column-100-999 padding-top-20">
										<div class="column-l-margin-40-999">
											<p class="body-text-m text-color-dadada anim-split-lines" data-scroll data-scroll-offset="30%">Mixtape kinfolk cray, wolf palo santo brunch iPhone. 3 wolf moon microdosing scenester, tilde roof party affogato typewriter celiac echo park craft beer bicycle rights man braid trust fund four dollar toast gentrify. IPhone humblebrag kale chips hell of. Brooklyn whatever chia deep v slow-carb lomo put a bird on. Austin fam chia cold-pressed raw denim. Retro jean shorts cronut lumbersexual mixtape hella you probably haven't heard of them austin williamsburg af mustache pinterest.</p>
										</div>
									</div><!-- column end -->
								</div><!-- flex-container end -->

								<!-- padding-top-120 start -->
								<div class="padding-top-120">
									<!-- js-2-view-slider start -->
									<div class="js-2-view-slider padding-bottom-90 hidden-box pos-rel anim-slider-fade" data-scroll>
										<!-- swiper-wrapper start -->
										<div class="swiper-wrapper slider-scrollanim-activate" data-scroll>
											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<a href="assets/images/portfolio/project_06/maksim-larin-1vy2QcZd5FU-unsplash.jpg" class="anim-scale d-block js-photo-popup js-pointer-zoom">
													<img class="anim-scale__inner" src="{{ asset('assets/images/portfolio/project_06/maksim-larin-1vy2QcZd5FU-unsplash.jpg')}}" alt="project image">
												</a>
											</div><!-- swiper-slide end -->
											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<a href="assets/images/portfolio/project_06/maksim-larin-Ai356rggKvw-unsplash.jpg" class="anim-scale d-block js-photo-popup js-pointer-zoom">
													<img class="anim-scale__inner" src="{{ asset('assets/images/portfolio/project_06/maksim-larin-Ai356rggKvw-unsplash.jpg')}}" alt="project image">
												</a>
											</div><!-- swiper-slide end -->
											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<a href="assets/images/portfolio/project_06/maksim-larin-LtB12xWnkpw-unsplash.jpg" class="anim-scale d-block js-photo-popup js-pointer-zoom">
													<img class="anim-scale__inner" src="{{ asset('assets/images/portfolio/project_06/maksim-larin-LtB12xWnkpw-unsplash.jpg')}}" alt="project image">
												</a>
											</div><!-- swiper-slide end -->
											<!-- swiper-slide start -->
											<div class="swiper-slide">
												<a href="assets/images/portfolio/project_06/maksim-larin-NOpsC3nWTzY-unsplash.jpg" class="anim-scale d-block js-photo-popup js-pointer-zoom">
													<img class="anim-scale__inner" src="{{ asset('assets/images/portfolio/project_06/maksim-larin-NOpsC3nWTzY-unsplash.jpg')}}" alt="project image">
												</a>
											</div><!-- swiper-slide end -->
										</div><!-- swiper-wrapper end -->

										<div class="container small pos-abs pos-bottom-center-0px">
											<!-- swiper-button-prev start -->
											<div class="swiper-button-prev-box">
												<div class="swiper-button-prev"></div>
											</div><!-- swiper-button-prev end -->
											<!-- swiper-button-next start -->
											<div class="swiper-button-next-box">
												<div class="swiper-button-next"></div>
											</div><!-- swiper-button-next end -->
										</div>

										<!-- swiper-pagination start -->
										<div class="pagination-box">
											<div class="swiper-pagination"></div>
										</div><!-- swiper-pagination end -->
									</div><!-- js-2-view-slider end -->
								</div><!-- padding-top-120 end -->
							</div><!-- width-100perc end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- section-bg-dark end -->

					<!-- section-bg-light start -->
					<section class="section-bg-light" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<div class="container small padding-top-bottom-120">
								<div class="scrollanim-activate" data-scroll data-scroll-offset="30%">
									<blockquote class="quote black body-text-l text-color-black">
										<span class="anim-split-lines">"Synth keytar distillery offal man braid sartorial 90's blue bottle fanny pack kale chips craft beer pok pok chambray. Yuccie listicle bicycle rights put a bird on it lyft flexitarian direct trade meggings vape chicharrones green juice man bun. Organic craft beer chambray, migas vinyl chartreuse godard palo santo lomo readymade vexillologist. DIY occupy craft beer 3 wolf moon, VHS cornhole master cleanse irony paleo vaporware butcher chicharrones."</span>
									</blockquote>
									<h5 class="margin-top-20 text-right">
										<span class="headline-xxxxs text-color-black anim-fade-to-left tr-delay-01">Jason Hardeman</span><br>
										<span class="subhead-xxs text-color-black margin-top-5 anim-fade-to-left tr-delay-03">XOXO production LTD</span>
									</h5>
								</div>
							</div>
						</div><!-- flex-min-height-100vh end -->
					</section><!-- section-bg-light end -->
				</main><!-- main end -->

				<!-- next project start -->
				<section class="section-bg-dark" data-scroll-section>
					<div class="flex-min-height-100vh pos-rel" data-scroll data-scroll-speed="-4" data-scroll-position="bottom">
						<div class="width-100perc padding-top-bottom-120 pos-rel">
							<a href="project_07.html" class="container small d-block js-pointer-large js-animsition-link">
								<img src="{{ asset('assets/images/portfolio/project_07/main.jpg')}}" alt="project">
							</a>
							<div class="pos-abs pos-center-center width-100perc hidden-box text-color-mix-blend pointer-none">
								<h2 class="marquee headline-xxxl headline-uppercase hidden-box" data-duration="10000" data-gap="20">Black Bike Black Bike Black Bike Black Bike Black Bike Black Bike Black Bike</h2>
							</div>
						</div>

						<!-- next-project-footer start -->
						<div class="next-project-footer container">
							<p class="copyright margin-right-30">
								&copy; Copyright 2020 TUMAR. Template by <a href="#" class="copyright__author js-pointer-small">Jinna Gik</a>
							</p>
							<!-- to top btn start -->
							<a href="#up" class="scroll-to-btn js-pointer-large" data-scroll data-scroll-repeat data-scroll-to>
								<span class="scroll-to-btn__arrow"></span>
							</a><!-- to top btn end -->
						</div><!-- next-project-footer end -->
					</div>
				</section><!-- next project end -->
			</div><!-- js-animsition-overlay end -->
		</div><!-- scroll-content end -->

		<!-- scripts -->
		<script src="{{ asset('assets/js/plugins.js')}}"></script>
		<script src="{{ asset('assets/js/main.js')}}"></script>
	</body>
</html>