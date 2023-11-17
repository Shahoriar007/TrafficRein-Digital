<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="TrafficRein">
		<meta name="description" content="TrafficRein Template is a uniquely HTML5 template develop in HTML with a modern look.">
		<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

		<!-- favicon -->
		<link rel="shortcut icon"  href="{{ asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon"  href="{{ asset('assets/images/apple-touch-icon-57x57.png')}}">
		<link rel="apple-touch-icon" sizes="72x72"  href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}">

		<title>TrafficRein Digital</title>

		<!-- fonts  -->
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

		<!-- navigation overlay  -->
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
						<!-- home slider start -->
						<div class="pos-rel hidden-box js-home-slider page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
							<!-- swiper-wrapper start -->
							<div class="swiper-wrapper">
								<!-- swiper-slide start -->
								<div class="swiper-slide">
									<!-- background start -->
									<div class="js-parallax-slide-bg">
										<div class="bg-img-cover height-100perc" style="background-image: url(assets/images/backgrounds/diego-sanchez-mXhAf7IXPUc-unsplash.jpg);" data-scroll data-scroll-speed="-1.5"></div>
									</div><!-- background end -->

									<!-- bg-overlay -->
									<div class="bg-overlay-black"></div>

									<!-- content start -->
									<div class="flex-min-height-100vh">
										<div class="container small padding-top-bottom-150">
											<div>
												<div class="max-width-600 d-inline-block">
													<h2 class="headline-l headline-uppercase anim-split-lines">
														Empowering Your Digital Journey
														<span class="text-stroke-white">- 360 Degree Solution</span>for Your <span class="text-stroke-white">Digital Existance</span>
													</h2>
												</div>
											</div>
											<div class="margin-top-40 anim-fade-to-top">
												<div data-scroll data-scroll-speed="-0.3" data-scroll-position="top">
													<a href="#" class="border-btn js-pointer-large">
														<span class="border-btn__inner">Read more</span>
														<span class="border-btn__lines-1"></span>
														<span class="border-btn__lines-2"></span>
													</a>
												</div>
											</div>
										</div>
									</div><!-- content end -->
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide">
									<!-- background start -->
									<div class="js-parallax-slide-bg">
										<div class="bg-img-cover height-100perc" style="background-image: url(assets/images/backgrounds/revolt-BMest61rcqs-unsplash.jpg);" data-scroll data-scroll-speed="-1.5"></div>
									</div><!-- background end -->

									<!-- bg-overlay -->
									<div class="bg-overlay-black"></div>

									<!-- content start -->
									<div class="flex-min-height-100vh">
										<div class="container small padding-top-bottom-150 text-center">
											<div>
												<div class="max-width-600 d-inline-block">
													<h2 class="headline-l headline-uppercase anim-split-lines">
														We’r Provided
														<span class="text-stroke-white">Best</span> Digital
														<span class="text-stroke-white">Services</span>
													</h2>
												</div>
											</div>
											<div class="margin-top-40 anim-fade-to-top">
												<div data-scroll data-scroll-speed="-0.3" data-scroll-position="top">
													<a href="#" class="border-btn js-pointer-large">
														<span class="border-btn__inner">Read more</span>
														<span class="border-btn__lines-1"></span>
														<span class="border-btn__lines-2"></span>
													</a>
												</div>
											</div>
										</div>
									</div><!-- content end -->
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide">
									<!-- background start -->
									<div class="js-parallax-slide-bg">
										<div class="bg-img-cover height-100perc" style="background-image: url(assets/images/backgrounds/roman-bozhko-PypjzKTUqLo-unsplash.jpg);" data-scroll data-scroll-speed="-1.5"></div>
									</div><!-- background end -->

									<!-- bg-overlay -->
									<div class="bg-overlay-black"></div>

									<!-- content start -->
									<div class="flex-min-height-100vh">
										<div class="container small padding-top-bottom-150">
											<div>
												<div class="max-width-600 d-inline-block">
													<h2 class="headline-l headline-uppercase anim-split-lines">
														<span class="text-stroke-white">Best</span> Solutions
														& <span class="text-stroke-white">Ideas</span> for
														Your Business
													</h2>
												</div>
											</div>
											<div class="margin-top-40 anim-fade-to-top">
												<div data-scroll data-scroll-speed="-0.3" data-scroll-position="top">
													<a href="#" class="border-btn js-pointer-large">
														<span class="border-btn__inner">Read more</span>
														<span class="border-btn__lines-1"></span>
														<span class="border-btn__lines-2"></span>
													</a>
												</div>
											</div>
										</div>
									</div><!-- content end -->
								</div><!-- swiper-slide end -->
							</div><!-- swiper-wrapper end -->

							<!-- swiper-button-prev start -->
							<div class="swiper-button-prev-box after-preloader-anim">
								<div class="anim-fade-to-right tr-delay-03">
									<div class="swiper-button-prev"></div>
								</div>
							</div><!-- swiper-button-prev end -->
							<!-- swiper-button-next start -->
							<div class="swiper-button-next-box after-preloader-anim">
								<div class="anim-fade-to-left tr-delay-03">
									<div class="swiper-button-next"></div>
								</div>
							</div><!-- swiper-button-next end -->

							<!-- swiper-pagination start -->
							<div class="pagination-box vertical-pagination after-preloader-anim">
								<div class="anim-fade-to-top d-block tr-delay-06">
									<div class="swiper-pagination"></div>
								</div>
							</div><!-- swiper-pagination end -->

							<!-- to top btn start -->
							<a href="#down" class="scroll-to-btn to-down js-pointer-large" data-scroll-to>
								<div class="scroll-to-down-box">
									<span class="scroll-to-btn__arrow"></span>
								</div>
							</a><!-- to top btn end -->
						</div><!-- home slider end -->
					</section><!-- page head end -->

					<!-- portfolio start -->
					<section id="down" class="section-bg-light" data-scroll-section>
						<!-- padding-top-120 start -->
						<div class="padding-top-120 padding-bottom-150">
							<!-- title start -->
							<div class="pos-rel">
								<h2 class="title-offset big-head container full z-index-2 text-stroke-black pointer-none padding-top-30">
									<span class="d-block" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal" data-splitting>Projects</span>
								</h2>
							</div><!-- title end -->

							<!-- js-isotope-grid-box start -->
							<div class="js-isotope-grid-box container">
								<!-- empty grid -->
								<div class="empty-grid-1px-50-50-none js-isotope-grid-item"></div>
								<div class="empty-grid-200px-50-50-none js-isotope-grid-item"></div>

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_02.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="0.6">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/credosite1.png" alt="Project')}}">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Credo Wallets</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Website</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2021</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_01.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="1.1">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/artemis1.png')}}" alt="Project">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Luxorosh & Company</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Photography</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2020</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_06.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="0.3">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/mohsin.png')}}" alt="Project">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Mohsin & Company</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Website</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2020</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_04.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="1">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/cronus4k.png')}}" alt="Project">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Luxorosh Writing Instruments</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">4K 3D Photorealistic Modelling</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2021</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_03.html" class="grid-margin-box d-block js-pointer-large js-animsition-link">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<video src="{{ asset('assets/images/home projects/luxoroshwatch.mp4')}}" class="width-100perc anim-opacity-scale" muted loop autoplay playsinline poster="assets/images/home projects/luxoroshwatch.mp4"></video>
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Luxorosh & Company</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Watch Commercial Video</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2021</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_05.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="0.4">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/papipanda.png')}}" alt="Project">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Papipanda, NL</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">UI/UX Design</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2023</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->

								<!-- grid-item start -->
								<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
									<a href="project_07.html" class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll data-scroll-speed="1.2">
										<!-- project img start -->
										<div class="hidden-box">
											<div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
												<img class="anim-opacity-scale" src="{{ asset('assets/images/home projects/cdb1.png')}}" alt="Project">
											</div>
										</div><!-- project img end -->

										<!-- project content start -->
										<div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate" data-scroll data-scroll-offset="30%">
											<div class="anim-fade-to-left d-block">
												<h3 class="headline-xxxs text-color-black">Crocodile Bangladesh</h3>
												<div class="d-flex flex-wrap flex-justify-between margin-top-10">
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Social Media Design & Digital Marketing</span>
													<span class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2022</span>
												</div>
											</div>
											<div class="anim-line-bottom black"></div>
										</div><!-- project content end -->
									</a>
								</div><!-- grid-item end -->
							</div><!-- js-isotope-grid-box end -->
						</div><!-- padding-top-120 end -->
					</section><!-- portfolio end -->

					<!-- about us start -->
					<div class="section-bg-dark" data-scroll-section>
						<!-- padding-top-30 start -->
						<div class="padding-top-30 padding-bottom-120">
							<!-- flex-container start -->
							<section class="flex-container container padding-top-100 padding-bottom-30">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-20">
									<div class="column-r-margin-40-999">
										<h2 class="headline-xxs">
											<span class="d-block anim-split-lines" data-scroll data-scroll-offset="20%">Who We Are</span>
										</h2>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-20">
									<p class="body-text-m text-color-dadada anim-split-lines" data-scroll data-scroll-offset="20%">We are a digital agency that helps businesses grow in the online world. We offer digital 360 degree solutions that cover every aspect of your online presence, from web design and development, to SEO and social media marketing, to content creation and analytics. Whether you need a stunning website, a powerful online campaign, or a compelling content strategy, we have the skills and experience to deliver. We work with you to understand your goals, your audience, and your brand identity, and we create customized solutions that suit your needs and budget. We are passionate about digital innovation and we are always looking for new ways to help you reach your potential customers and stand out from the competition. Contact us today and let us show you how we can transform your online business.</p>
									<!-- flex-container start -->
									<div class="flex-container">
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left">
													<h3 class="headline-xxxxs">Strategy</h3>
													<!-- list start -->
													<ul class="list margin-top-20">
														<li class="list__item dot">
															<p class="subhead-xxs">Digital Strategy</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Content Strategy</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Responsive developement</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Web Design</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Motion Design</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Data Analysis</p>
														</li>
														<li class="list__item dot">
															<p class="subhead-xxs">Brand Experience</p>
														</li>
													</ul><!-- list end -->
												</div>
											</div>
										</div><!-- column end -->
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left tr-delay-01">
													<h3 class="headline-xxxxs">Development</h3>
													<!-- list start -->
													<ul class="list list_counter margin-top-20">
														<li class="list__item opacity-05">
															<p class="subhead-xxs">Design Direction</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">Web and Mobile UI</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">Creative Concepts & Ideas</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">User Experience Design</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">Branding & Identity</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">Websites & Web Applications</p>
														</li>
														<li class="list__item opacity-05">
															<p class="subhead-xxs">E-Commerce</p>
														</li>
													</ul><!-- list end -->
												</div>
											</div>
										</div><!-- column end -->
									</div><!-- flex-container end -->
								</div><!-- column end -->
							</section><!-- flex-container end -->

							<!-- flex-container start -->
							<section class="flex-container container padding-top-60 padding-bottom-30">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-60">
									<div class="column-r-margin-40-999">
										<h2 class="headline-xxs">
											<span class="d-block anim-split-lines" data-scroll data-scroll-offset="20%">What We Do</span>
										</h2>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-60">
									<div class="line-scrollanim-activate" data-scroll data-scroll-offset="30%">
										<!-- pos-rel start -->
										<div class="pos-rel padding-bottom-30">
											<div class="padding-left-50 pos-rel">
												<div class="subhead-xs pos-abs pos-left-top-0px">01</div>
												<h3 class="headline-xxxxs">Digital Marketing Services</h3>
												<p class="body-text-xs text-color-dadada margin-top-10">We build stunning and interactive websites and web applications using the latest web technologies and frameworks. We ensure that your website or application is responsive, accessible, fast, secure, and SEO-friendly. We design and develop your website or application according to your goals, needs, and preferences. We are passionate about front-end development and we love creating beautiful and functional websites and web applications for our clients.</p>
											</div>
											<div class="anim-line-bottom"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel padding-bottom-30 padding-top-60">
											<div class="padding-left-50 pos-rel">
												<div class="subhead-xs pos-abs pos-left-top-0px">02</div>
												<h3 class="headline-xxxxs">Web Development</h3>
												<p class="body-text-xs text-color-dadada margin-top-10">Back-end development is the process of creating the server-side software that powers a website or application. Back-end developers use various programming languages, frameworks, and tools to build, maintain, and improve the functionality, performance, and security of the website or application. They also manage the communication between the front-end and the database, ensuring that data is stored, retrieved, and processed correctly. Back-end development is essential for creating dynamic, interactive, and user-friendly websites and applications</p>
											</div>
											<div class="anim-line-bottom tr-delay-01"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel padding-bottom-30 padding-top-60">
											<div class="padding-left-50 pos-rel">
												<div class="subhead-xs pos-abs pos-left-top-0px">03</div>
												<h3 class="headline-xxxxs">Software Development</h3>
												<p class="body-text-xs text-color-dadada margin-top-10">User interface design is the process of creating the visual and interactive elements of a software or device, such as icons, buttons, menus, sounds, etc. User interface design aims to make the user experience easy, enjoyable, and satisfying.</p>
											</div>
											<div class="anim-line-bottom tr-delay-02"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel padding-bottom-30 padding-top-60">
											<div class="padding-left-50 pos-rel">
												<div class="subhead-xs pos-abs pos-left-top-0px">04</div>
												<h3 class="headline-xxxxs">App Development</h3>
												<p class="body-text-xs text-color-dadada margin-top-10">We design the end-to-end experience that users have when interacting with a company, its services, and its products. We use research, data analysis, and test results to create products that are meaningful, relevant, and enjoyable for users. We consider all aspects of the user experience, such as branding, design, usability, and function. We aim to make the user experience easy, satisfying, and delightful.</p>
											</div>
											<div class="anim-line-bottom tr-delay-03"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel padding-bottom-30 padding-top-60">
											<div class="padding-left-50 pos-rel">
												<div class="subhead-xs pos-abs pos-left-top-0px">05</div>
												<h3 class="headline-xxxxs">Graphics Design</h3>
												<p class="body-text-xs text-color-dadada margin-top-10">We create animated and dynamic visuals that communicate your message in an engaging and effective way. We use graphic design principles and techniques to combine images, text, sound, and motion. We can produce motion graphics for various purposes and platforms, such as film, television, web, social media, and more. We are passionate about motion design and we love creating stunning and captivating visuals for our clients.</p>
											</div>
											<div class="anim-line-bottom tr-delay-04"></div>
										</div><!-- pos-rel end -->
									</div>
								</div><!-- column end -->
							</section><!-- flex-container end -->

							<!-- flex-container start -->
							<section class="flex-container container padding-top-60 padding-bottom-30">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-60">
									<div class="column-r-margin-40-999">
										<h2 class="headline-xxs">
											<span class="d-block anim-split-lines" data-scroll data-scroll-offset="20%">Work Process</span>
										</h2>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999">
									<!-- flex-container start -->
									<div class="flex-container">
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left">
													<div class="subhead-xs">01</div>
													<h3 class="headline-xxxxs margin-top-30">Brainstorming</h3>
													<p class="body-text-xs text-color-dadada margin-top-20">Brainstorming is the first step of our work process, where we generate ideas for your project as a team. We use brainstorming to find creative solutions and identify the best options for your needs and goals. We encourage everyone to share their thoughts and opinions freely and use various techniques and tools to stimulate our creativity and organize our ideas.</p>
												</div>
											</div>
										</div><!-- column end -->
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left tr-delay-01">
													<div class="subhead-xs">02</div>
													<h3 class="headline-xxxxs margin-top-30">Approaching</h3>
													<p class="body-text-xs text-color-dadada margin-top-20">Approaching is the second step of our work process, where we communicate with you and understand your needs and expectations. We use approaching to establish a clear and mutual understanding of your project’s scope, objectives, and requirements. We also use approaching to discuss your preferences, budget, and timeline. We listen to your feedback and suggestions and answer any questions you may have. Approaching helps us to build a trusting and collaborative relationship with you and ensure your satisfaction and happiness.</p>
												</div>
											</div>
										</div><!-- column end -->
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left">
													<div class="subhead-xs">03</div>
													<h3 class="headline-xxxxs margin-top-30">Adjusting</h3>
													<p class="body-text-xs text-color-dadada margin-top-20">Adjusting is the third step of our work process, where we fine-tune and optimize your project to achieve the best results. We use adjusting to make sure that your project meets your standards and expectations, as well as the industry best practices and guidelines. We also use adjusting to test and improve the performance, functionality, and usability of your project. We welcome your feedback and suggestions and make necessary changes and corrections. Adjusting helps us to deliver a high-quality product that satisfies your needs and goals.</p>
												</div>
											</div>
										</div><!-- column end -->
										<!-- column start -->
										<div class="six-columns padding-top-60">
											<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
												<div class="anim-fade-to-left tr-delay-01">
													<div class="subhead-xs">04</div>
													<h3 class="headline-xxxxs margin-top-30">Result</h3>
													<p class="body-text-xs text-color-dadada margin-top-20">Result is the final step of our work process, where we deliver your project and celebrate your success. We use result to present your project to you and show you how it meets your needs and goals. We also use result to provide you with any documentation, training, or support that you may need. We appreciate your feedback and testimonials and thank you for choosing us as your partner. Result helps us to complete your project with a smile and a handshake. </p>
												</div>
											</div>
										</div><!-- column end -->
									</div><!-- flex-container end -->
								</div><!-- column end -->
							</section><!-- flex-container end -->

							<!-- flex-container start -->
							<section class="flex-container container padding-top-60 padding-bottom-30">
								<!-- column start -->
								<div class="four-columns column-100-999 padding-top-60">
									<div class="column-r-margin-40-999">
										<h2 class="headline-xxs">
											<span class="d-block anim-split-lines" data-scroll data-scroll-offset="20%">Our Status</span>
										</h2>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="eight-columns column-100-999 padding-top-60">
									<div class="line-scrollanim-activate" data-scroll data-scroll-offset="30%">
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="anim-line-top"></div>
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-white skills-5-col padding-top-10">45+</div>
												<h4 class="headline-xxxxs skills-4-col padding-top-10">Clients</h4>
												<ul class="list skills-3-col subhead-xxs padding-top-10">
													<li class="list__item dot">
														<p>Best agency</p>
													</li>
													<li class="list__item dot">
														<p>Best website</p>
													</li>
													<li class="list__item dot">
														<p>Best freelancer</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom tr-delay-01"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-white skills-5-col padding-top-10">532+</div>
												<h4 class="headline-xxxxs skills-4-col padding-top-10">Projects</h4>
												<ul class="list skills-3-col subhead-xxs padding-top-10">
													<li class="list__item dot">
														<p>Branding</p>
													</li>
													<li class="list__item dot">
														<p>Web design</p>
													</li>
													<li class="list__item dot">
														<p>Web development</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom tr-delay-02"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-white skills-5-col padding-top-10">236</div>
												<h4 class="headline-xxxxs skills-4-col padding-top-10">Freelancers</h4>
												<ul class="list skills-3-col subhead-xxs padding-top-10">
													<li class="list__item dot">
														<p>HTML/CSS</p>
													</li>
													<li class="list__item dot">
														<p>JavaScript</p>
													</li>
													<li class="list__item dot">
														<p>WordPress</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom tr-delay-03"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-white skills-5-col padding-top-10">32</div>
												<h4 class="headline-xxxxs skills-4-col padding-top-10">Team Members</h4>
												<ul class="list skills-3-col subhead-xxs padding-top-10">
													<li class="list__item dot">
														<p>Instagram</p>
													</li>
													<li class="list__item dot">
														<p>Behance</p>
													</li>
													<li class="list__item dot">
														<p>Youtube</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom tr-delay-04"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="d-flex flex-wrap flex-align-center padding-bottom-10">
												<div class="headline-xxxxl text-stroke-white skills-5-col padding-top-10">13</div>
												<h4 class="headline-xxxxs skills-4-col padding-top-10">Ongoing Projects</h4>
												<ul class="list skills-3-col subhead-xxs padding-top-10">
													<li class="list__item dot">
														<p>Branding & Identity</p>
													</li>
													<li class="list__item dot">
														<p>Digital Strategy</p>
													</li>
													<li class="list__item dot">
														<p>Creative Concepts & Ideas</p>
													</li>
												</ul>
											</div>
											<div class="anim-line-bottom tr-delay-05"></div>
										</div><!-- pos-rel end -->
									</div>
								</div><!-- column end -->
							</section><!-- flex-container end -->
						</div><!-- padding-top-30 end -->
					</div><!-- about us end -->

					<!-- section-bg-light start -->
					<div class="section-bg-light" data-scroll-section>
						<!-- padding-top-bottom-30 start -->
						<div class="padding-top-bottom-30">
							<!-- advantages start -->
							<section class="padding-top-100 padding-bottom-30 container">
								<div class="scrollanim-activate" data-scroll>
									<div class="anim-fade-to-left d-block">
										<!-- js-services-slider start -->
										<div class="js-skills-slider js-pointer-drag" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal">
											<!-- swiper-wrapper start -->
											<div class="swiper-wrapper">
												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<div class="flex-container reverse flex-align-center">
														<div class="six-columns padding-top-20">
															<div class="column-r-margin-40">
																<h3 class="headline-xxs text-color-black">Elegant & Sophisticated</h3>
																<p class="body-text-m text-color-6d6d6d margin-top-20">a Company that specializes in building luxury and niche businesses.</p>
															</div>
														</div>
														<div class="six-columns padding-top-20">
															<img src="{{ asset('assets/images/home projects/luxury.png')}}" alt="Advantages">
														</div>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<div class="flex-container reverse flex-align-center">
														<div class="six-columns padding-top-20">
															<div class="column-r-margin-40">
																<h3 class="headline-xxs text-color-black">Team of Professionals</h3>
																<p class="body-text-m text-color-6d6d6d margin-top-20">We are a company where we treat of people as team members. Handpicked skillful, highly experienced web developers, digital marketers, content writers, app developers, UI/UX designers, 3D artists from all over the world, together we work the preseve the quality and the name of the TrafficRein Digital.</p>
															</div>
														</div>
														<div class="six-columns padding-top-20">
															<img src="{{ asset('assets/images/home projects/team.png')}}" alt="Advantages">
														</div>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<div class="flex-container reverse flex-align-center">
														<div class="six-columns padding-top-20">
															<div class="column-r-margin-40">
																<h3 class="headline-xxs text-color-black">Quality Service</h3>
																<p class="body-text-m text-color-6d6d6d margin-top-20">We embarked our journey in this industry with the hope to provide the finest quality of our services in the form of a product to develop the niche business group. An industry that totally targets the elite group of people and supplying to their demands.</p>
															</div>
														</div>
														<div class="six-columns padding-top-20">
															<img src="{{ asset('assets/images/home projects/quality.jpg')}}" alt="Advantages">
														</div>
													</div>
												</div><!-- swiper-slide end -->
											</div><!-- swiper-wrapper end -->
										</div><!-- js-services-slider end -->
									</div>
								</div>
							</section><!-- advantages end -->

							<!-- team start -->
							<section class="padding-top-bottom-120 container small">
								<h2 class="headline-xxxl text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Our Co-Founders</h2>

								<!-- flex-container start -->
								<div class="flex-container flex-align-center padding-top-60">
									<div class="six-columns padding-top-30">
										<div class="hidden-box">
											<div data-scroll data-scroll-speed="-1.2">
												<div class="anim-img-reveal" data-scroll style="background-image:url(assets/images/team/ian-dooley-wzRKn-AjKf4-unsplash.jpg)">
													<img src="{{ asset('assets/images/team/ian-dooley-wzRKn-AjKf4-unsplash.jpg')}}" alt="Afridi Shams">
												</div>
											</div>
										</div>
									</div>
									<div class="six-columns padding-top-30" data-scroll data-scroll-speed="1">
										<div class="column-l-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-top">
												<h4 class="headline-xxxs text-color-black">Afridi Shams</h4>
												<div class="subhead-xxs text-color-black margin-top-5">Founder & Digital Marketer</div>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Cardigan disrupt fashion axe post-ironic, cold-pressed woke hoodie letterpress YOLO schlitz sartorial etsy prism squid church-key. Cliche kickstarter yr, twee offal craft beer actually live-edge waistcoat cardigan you probably haven't heard of them.</p>
											</div>
										</div>
									</div>
								</div><!-- flex-container end -->

								<!-- flex-container start -->
								<div class="flex-container reverse flex-align-center padding-top-60">
									<div class="six-columns padding-top-30" data-scroll data-scroll-speed="1">
										<div class="column-r-margin-40 text-right scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-top">
												<h4 class="headline-xxxs text-color-black">Shahoriar Fahim</h4>
												<div class="subhead-xxs text-color-black margin-top-5">Co-founder & Software Developer</div>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Pinterest lumbersexual forage chillwave godard pitchfork vexillologist deep v chia truffaut four dollar toast food truck meditation. Hot chicken coloring book cliche YOLO, crucifix kale chips swag hexagon raclette paleo next level austin yuccie thundercats.</p>
											</div>
										</div>
									</div>
									<div class="six-columns padding-top-30">
										<div class="hidden-box">
											<div data-scroll data-scroll-speed="-1.2">
												<div class="anim-img-reveal" data-scroll style="background-image:url(assets/images/team/force-majeure-GGPq78xM8T0-unsplash.jpg)">
													<img src="{{ asset('assets/images/team/force-majeure-GGPq78xM8T0-unsplash.jpg')}}" alt="Shahoriar Fahim">
												</div>
											</div>
										</div>
									</div>
								</div><!-- flex-container end -->
							</section><!-- team end -->

							<!-- marquee start -->
							<section class="padding-top-bottom-30">
								<div class="padding-top-bottom-90 pos-rel">
									<div class="line-top black"></div>
									<!-- marquee start -->
									<h3 class="marquee headline-xxxxl text-color-black headline-uppercase hidden-box" data-duration="20000" data-gap="20">
										/ We generate
										<span class="text-stroke-black">Creative</span>
										& novation
										<span class="text-stroke-black">ideas</span>
										/ We generate
										<span class="text-stroke-black">Creative</span>
										& novation
										<span class="text-stroke-black">ideas</span>
									</h3><!-- marquee end -->
									<div class="line-bottom black"></div>
								</div>
							</section><!-- marquee end -->

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
									The Creative<br>
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
										<a href="{{ route('services') }}" class="footer-nav-btn js-pointer-small js-animsition-link">Services</a>
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
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 8532 7834</a>
										<div class="margin-top-5">
											<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 9635 7335</a>
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
											PO Box 223158 Oliver Street<br>
											East Victoria 2006 UK
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