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

		<title>TrafficRein Digital | Our Services</title>

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
						<a href="{{ route('home') }}" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Home">Home</span>
						</a>

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/bonnet-casual-close-up-2802601.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a href="about.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="About">About</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/pexels-marlene-1019771.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-nav-bg-active">
						<a href="services.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Services">Services</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/two-vases-on-table-842950.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-dropdown-open">
						<a class="nav-btn dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Portfolio">Portfolio</span>
						</a>

						<!-- dropdown start -->
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
						</ul><!-- dropdown end -->

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/goashape-RvyJGaoaWrs-unsplash.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a href="blog.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Blog">Blog</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/face-facial-hair-fashionable-2555100.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change">
						<a href="contact.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Contact">Contact</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/architectural-design-architecture-building-exterior-1707823.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->
				</ul><!-- menu-box end -->
			</div><!-- nav-box end -->
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
									<h2 class="headline-xxxxl headline-uppercase after-preloader-anim">
										<span class="d-block">
											<span class="anim-chars-fadein" data-splitting>digital innovators</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>elevating businesses</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.8" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>with smart solutions.</span>
										</span>
									</h2>
								</div><!-- title end -->
							</div><!-- padding-top-bottom-150 end -->

							<!-- background start -->
							<div class="pos-rel hidden-box height-100vh">
								<!-- bg-parallax -->
								<div class="bg-parallax" style="background-image:url(assets/images/backgrounds/force-majeure-SmIlY2uAHo8-unsplash.jpg)" data-scroll data-scroll-speed="-1.5"></div>
							</div><!-- background end -->
						</div>
					</section><!-- page head end -->

					<!-- services start -->
					<section class="section-bg-dark" data-scroll-section>
						<!-- container start -->
						<div class="padding-top-bottom-150 container small">
							<h2 class="headline-xxxl anim-split-lines" data-scroll data-scroll-offset="20%">Our Services</h2>

							<!-- padding-top-90 start -->
							<div class="padding-top-90">
								<div class="scrollanim-activate" data-scroll>
									<div class="anim-fade-to-left d-block">
										<!-- js-services-slider start -->
										<div class="js-services-slider js-pointer-drag" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal">
											<!-- swiper-wrapper start -->
											<div class="swiper-wrapper">
												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<img src="{{ asset('assets/images/services/thom-bradley-EWUr1JkMZGE-unsplash.jpg')}}" alt="Services">
													<div class="margin-top-20 padding-left-50 pos-rel">
														<div class="subhead-xs pos-abs pos-left-top-0px">01</div>
														<h3 class="headline-xxxs">Digital Marketing</h3>
														<p class="body-text-s text-color-dadada margin-top-10 max-width-400">Pitchfork green juice meh ethical slow-carb poke authentic salvia skateboard helvetica tousled bicycle rights ennui. Hot chicken ugh drinking vinegar, edison bulb dreamcatcher.</p>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<img src="{{ asset('assets/images/services/web1.jpg')}}" alt="Services">
													<div class="margin-top-20 padding-left-50 pos-rel">
														<div class="subhead-xs pos-abs pos-left-top-0px">02</div>
														<h3 class="headline-xxxs">Web Development</h3>
														<p class="body-text-s text-color-dadada margin-top-10 max-width-400">Pinterest lumbersexual forage chillwave godard pitchfork vexillologist deep v chia truffaut four dollar toast food truck meditation. Hot chicken coloring book cliche YOLO.</p>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<img src="{{ asset('assets/images/services/annie-spratt-AkftcHujUmk-unsplash.jpg')}}" alt="Services">
													<div class="margin-top-20 padding-left-50 pos-rel">
														<div class="subhead-xs pos-abs pos-left-top-0px">03</div>
														<h3 class="headline-xxxs">Software Development</h3>
														<p class="body-text-s text-color-dadada margin-top-10 max-width-400">Lomo dreamcatcher bushwick gastropub swag. Hammock sriracha paleo, iPhone swag af flexitarian hella pickled neutra pug. Trust fund chicharrones iPhone stumptown.</p>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<img src="{{ asset('assets/images/services/vladimir-fedotov--w-V5GRG9-0-unsplash.jpg')}}" alt="Services">
													<div class="margin-top-20 padding-left-50 pos-rel">
														<div class="subhead-xs pos-abs pos-left-top-0px">04</div>
														<h3 class="headline-xxxs">App Development</h3>
														<p class="body-text-s text-color-dadada margin-top-10 max-width-400">Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed.</p>
													</div>
												</div><!-- swiper-slide end -->

												<!-- swiper-slide start -->
												<div class="swiper-slide">
													<img src="{{ asset('assets/images/services/gd11.jpg')}}" alt="Services">
													<div class="margin-top-20 padding-left-50 pos-rel">
														<div class="subhead-xs pos-abs pos-left-top-0px">05</div>
														<h3 class="headline-xxxs">Graphics Design</h3>
														<p class="body-text-s text-color-dadada margin-top-10 max-width-400">Shoreditch cliche marfa godard gochujang kinfolk hoodie you probably haven't heard of them echo park DIY tilde PBR&B. Lomo dreamcatcher bushwick gastropub swag.</p>
													</div>
												</div><!-- swiper-slide end -->
											</div><!-- swiper-wrapper end -->
										</div><!-- js-services-slider end -->
									</div>
								</div>
							</div><!-- padding-top-90 end -->
						</div><!-- container end -->
					</section><!-- services end -->

					<!-- section-bg-light start -->
					<div class="section-bg-light" data-scroll-section>
						<!-- padding-top-bottom-30 start -->
						<div class="padding-top-bottom-30">
							<!-- what we do start -->
							<section class="container small padding-top-bottom-120">
								<h2 class="headline-m text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">What We Do</h2>

								<!-- hidden-box start -->
								<div class="padding-top-90 hidden-box">
									<!-- line-scrollanim-activate start -->
									<div class="line-scrollanim-activate" data-scroll data-scroll-offset="30%">
										<!-- pos-rel start -->
										<div class="pos-rel">
											<div class="anim-line-top black"></div>
											<p class="headline-xl text-color-black headline-uppercase text-nowrap horizontal-scroll-text-offset padding-top-bottom-15" data-scroll data-scroll-speed="1.1" data-scroll-direction="horizontal">
												Design
												<span class="text-stroke-black">Design Design Design</span>
												Design
												<span class="text-stroke-black">Design Design Design Design</span>
											</p>
											<div class="anim-line-bottom black tr-delay-01"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<p class="headline-xl text-color-black headline-uppercase text-nowrap horizontal-scroll-text-offset padding-top-bottom-15" data-scroll data-scroll-speed="-1.1" data-scroll-direction="horizontal">
												<span class="text-stroke-black">Branding Branding</span>
												Branding
												<span class="text-stroke-black">Branding Branding</span>
												Branding
												<span class="text-stroke-black">Branding</span>
											</p>
											<div class="anim-line-bottom black tr-delay-02"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<p class="headline-xl text-color-black headline-uppercase text-nowrap horizontal-scroll-text-offset padding-top-bottom-15" data-scroll data-scroll-speed="1.1" data-scroll-direction="horizontal">
												<span class="text-stroke-black">Strategy Strategy Strategy Strategy</span>
												Strategy
												<span class="text-stroke-black">Strategy</span>
												Strategy
											</p>
											<div class="anim-line-bottom black tr-delay-03"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<p class="headline-xl text-color-black headline-uppercase text-nowrap horizontal-scroll-text-offset padding-top-bottom-15" data-scroll data-scroll-speed="-1.1" data-scroll-direction="horizontal">
												<span class="text-stroke-black">Marketing</span>
												Marketing
												<span class="text-stroke-black">Marketing</span>
												Marketing
												<span class="text-stroke-black">Marketing Marketing</span>
											</p>
											<div class="anim-line-bottom black tr-delay-04"></div>
										</div><!-- pos-rel end -->
										<!-- pos-rel start -->
										<div class="pos-rel">
											<p class="headline-xl text-color-black headline-uppercase text-nowrap horizontal-scroll-text-offset padding-top-bottom-15" data-scroll data-scroll-speed="1.1" data-scroll-direction="horizontal">
												Identity
												<span class="text-stroke-black">Identity Identity</span>
												Identity
												<span class="text-stroke-black">Identity Identity Identity</span>
											</p>
											<div class="anim-line-bottom black tr-delay-05"></div>
										</div><!-- pos-rel end -->
									</div><!-- line-scrollanim-activate end -->
								</div><!-- hidden-box end -->
							</section><!-- what we do end -->

							<!-- padding-top-bottom-30 start -->
							<section class="padding-top-bottom-30">
								<div class="padding-bottom-90 container small">
									<h2 class="headline-m text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Our Skills</h2>
								</div>

								<!-- js-infinite-slider start -->
								<div class="js-infinite-slider hidden-box pos-rel padding-top-bottom-60">
									<div class="line-top black"></div>
									<!-- swiper-wrapper start -->
									<div class="swiper-wrapper">
										<!-- swiper-slide start -->
										<div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/React.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/python.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/mailchimp.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/java.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/hootsuite.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/meta.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/django.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/laravel.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/googleanaly.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/googleads.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/php.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/flutter.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/growthbar.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
                                        <!-- swiper-slide start -->
                                        <div class="swiper-slide text-center">
                                            <img class="client-logo" src="{{ asset('assets/images/skills/wp.png')}}" alt="logo">
                                        </div><!-- swiper-slide end -->
                                        
									<div class="line-bottom black"></div>
								</div><!-- js-infinite-slider end -->
							</section><!-- padding-top-bottom-30 end -->

							<!-- work process start -->
							<section class="container small padding-top-bottom-120">
								<h2 class="headline-m text-color-black anim-split-lines" data-scroll data-scroll-offset="20%">Work Process</h2>

								<!-- flex-container start -->
								<div class="flex-container padding-top-30">
									<!-- column start -->
									<div class="six-columns padding-top-60">
										<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-left">
												<div class="subhead-xs text-color-black">01</div>
												<h3 class="headline-xxxs text-color-black margin-top-30">Brainstorming</h3>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar.</p>
											</div>
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="six-columns padding-top-60">
										<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-left tr-delay-01">
												<div class="subhead-xs text-color-black">02</div>
												<h3 class="headline-xxxs text-color-black margin-top-30">Approaching</h3>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar Pok pok authentic fashion axe.</p>
											</div>
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="six-columns padding-top-60">
										<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-left">
												<div class="subhead-xs text-color-black">03</div>
												<h3 class="headline-xxxs text-color-black margin-top-30">Adjusting</h3>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed.</p>
											</div>
										</div>
									</div><!-- column end -->
									<!-- column start -->
									<div class="six-columns padding-top-60">
										<div class="column-r-margin-40 scrollanim-activate" data-scroll data-scroll-offset="20%">
											<div class="anim-fade-to-left tr-delay-01">
												<div class="subhead-xs text-color-black">04</div>
												<h3 class="headline-xxxs text-color-black margin-top-30">Result</h3>
												<p class="body-text-xs text-color-6d6d6d margin-top-20">Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi.</p>
											</div>
										</div>
									</div><!-- column end -->
								</div><!-- flex-container end -->
							</section><!-- work process end -->

							<!-- marquee start -->
							<div class="padding-top-bottom-30">
								<div class="padding-top-bottom-90 pos-rel">
									<div class="line-top black"></div>
									<!-- marquee start -->
									<div class="marquee headline-xxxxl headline-uppercase text-color-black hidden-box" data-duration="20000" data-gap="20">
										<span class="text-stroke-black">Design</span> /
										Experience /
										<span class="text-stroke-black">Strategy</span> /
										Creative / Branding /
										<span class="text-stroke-black">Identity</span> /
										Digital /
										<span class="text-stroke-black">Ideas</span> /
										Development /
									</div><!-- marquee end -->
									<div class="line-bottom black"></div>
								</div>
							</div><!-- marquee end -->

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
									The Creative<br>
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
										&copy; Copyright 2024 TrafficRein Digital. <a href="#" class="copyright__author js-pointer-small"></a>
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