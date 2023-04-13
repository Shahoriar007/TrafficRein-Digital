<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="../assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="../assets/img/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="../assets/img/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="../assets/img/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Mrittik  - Modern Architecture Theme</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>


    <body class="bg-dark">        

        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="M" class="characters">M</span>
					
					<span data-preloader-text="R" class="characters">R</span>
					
					<span data-preloader-text="I" class="characters">I</span>
					
					<span data-preloader-text="T" class="characters">T</span>
					
					<span data-preloader-text="T" class="characters">T</span>

					<span data-preloader-text="I" class="characters">I</span>

					<span data-preloader-text="K" class="characters">K</span>
				</div>
			</div>
		</div>

        <!-- Color Mode Switcher -->
		<div id="mode_switcher">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <!-- Header -->
		<header class="header">				
            <div class="container">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html" class="light_logo"><img src="../assets/img/logo-light.svg" alt="logo"></a>
                        <a href="index.html" class="dark_logo"><img src="../assets/img/logo-dark.svg" alt="logo"></a>
                    </div>

                    
                    <div class="mainnav d-none d-lg-block">
                        <ul class="main_menu">
                            <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>

                            <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                            
                            <li class="menu-item menu-item-has-children"><a href="{{ route('services') }}">Services</a>
                                <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('digital_marketing') }}">Digital Marketing</a></li>
                                    <li class="menu-item"><a href="{{ route('web_development') }}">Web Development</a></li>
                                    <li class="menu-item"><a href="project-3.html">Highly Engaging Content & Copy writing</a></li>
                                    <li class="menu-item"><a href="project-details.html">Enterprise Software Development</a></li>
                                    <li class="menu-item"><a href="project-details-2.html">Search Engine Optimisation (SEO)</a></li>
                                    <li class="menu-item"><a href="project-details-2.html">Social Media Marketing & Management</a></li>
                                </ul>
                            </li>
                            <!-- <li class="menu-item menu-item-has-children active"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item active"><a href="about.html">About Us</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Team</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="team.html">Our Team</a></li>
                                            <li class="menu-item"><a href="team-details.html">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="service-1.html">Service One</a></li>
                                            <li class="menu-item"><a href="service-2.html">Service Two</a></li>
                                            <li class="menu-item"><a href="service-details-DigitalMarketing.html">Service Details Digital Marketing</a></li>
                                        </ul>
                                    </li>                              
                                    <li class="menu-item menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="shop-1.html">Shop One</a></li>
                                            <li class="menu-item"><a href="shop-2.html">Shop Two</a></li>
                                            <li class="menu-item"><a href="shop-3.html">Shop Three</a></li>
                                            <li class="menu-item"><a href="shop-product.html">Product Details</a></li>
                                            <li class="menu-item"><a href="shop-cart.html">Shop Cart</a></li>
                                            <li class="menu-item"><a href="shop-checkout.html">Checkout</a></li>
                                            <li class="menu-item"><a href="login.html">Login</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li> -->
            
                            <li class="menu-item"><a href="{{ route('contact') }}">Contacts</a></li>
                            <!-- <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                        <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <div class="header_search">								
                            <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="open_search">
                            <form class="search_form" action="search.php">
                                <input type="text" name="search" class="keyword form-control" placeholder="Search...">
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>							
                        <button class="ma5menu__toggle d-lg-none d-block" type="button">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
			</div>
		</header>

        <div class="aside_info_wrapper">
			<button class="aside_close"><i class="bi bi-x-lg"></i></button>
			<div class="aside_logo">
                <a href="index.html" class="light_logo"><img src="../assets/img/logo-light-lg.svg" alt="logo"></a>
                <a href="index.html" class="dark_logo"><img src="../assets/img/logo-dark-lg.svg" alt="logo"></a>
            </div>
			<div class="aside_info_inner">
                <p>Mrittik Architects is a full-service design firm providing architecture architecture.</p>
                
                <div class="aside_info_inner_box">
                    <h5>Contact Info</h5>
                    <p>+123 456 789 33</p>
                    <p>3 Madison Street, NY <br> United States of America</p>
                    <p>mrittikarch@gmail.com</p>

                    <h5>Office Address</h5>
                    <p>+Time Square, New York <br> USA, 3454</p>
                </div>
                <div class="social_sites">
                    <ul class="d-flex align-items-center justify-content-center">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
			</div>
		</div>

        <!-- Page Header -->
        <div class="page_header in-service">
            <div class="page_header_inner">
                <div class="container">
                    <div class="page_header_content d-flex align-items-center justify-content-between">
                        <h2 class="heading">Our Services</h2>
                    </div>
                </div>
            </div>        
        </div>
        <div class="header-layer-bg"></div>
        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <!-- Service Section -->
            <section class="services inner pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_box">
                                <h6>01</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="{{ route('digital_marketing') }}">Digital Marketing</a></h4>
                                <p class="text-gray-600">Digital marketing encompasses a wide range of services, all aimed at promoting businesses, products, or services online</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_box">
                                <h6>02</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="{{ route('web_development') }}">Web Development</a></h4>
                                <p class="text-gray-600">As a web development agency that specializes in creating, designing, and maintaining websites for clients</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="icon_box">
                                <h6>03</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="">Highly Engaging Content & Copy writing</a></h4>
                                <p class="text-gray-600">Content and copywriting services involve creating written content for various purposes, including marketing, branding, website copy, social media posts, blogs, articles, email marketing, and more.</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100">
                            <div class="icon_box">
                                <h6>04</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="service-1.html">Enterprise Software Development</a></h4>
                                <p class="text-gray-600">Software development services involve the design, development, testing, and maintenance of software applications</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1300">
                            <div class="icon_box">
                                <h6>05</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="service-1.html">Search Engine Optimisation (SEO)</a></h4>
                                <p class="text-gray-600">SEO (Search Engine Optimization) services are designed to help businesses increase their visibility and rankings on search engines like Google</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon_box">
                                <h6>06</h6>
                                <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                                <h4 class="text-white"><a href="service-1.html">Social Media Marketing & Management</a></h4>
                                <p class="text-gray-600">Social media marketing and management services involve creating and executing social media strategies to help businesses increase their brand awareness, engagement, and sales</p>
                                <div class="arrow_effect">
                                    <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial -->
            <section class="testimonial in-service box_padding pt-0">
                <div class="has_line_lg"></div>
                <div class="testimonial_inner bg-black" data-aos="zoom-in" data-aos-duration="500">
                    <!-- Swiper Testimonial -->
                    <div class="swiper swiper_testimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                    <h6 class="text-olive">MAX construction agency, LA</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section class="partners in-service bg-dark-200">
                <div class="container">
                    <!-- Clients Logo -->
                    <div class="partner_flex">
                        <div class="partner_content" data-aos="fade-up" data-aos-duration="500">
                            <img src="../assets/img/partner/5.svg" alt="img">
                            <img src="../assets/img/partner/55.svg" alt="img">
                        </div>
                        <div class="partner_content" data-aos="fade-up" data-aos-duration="700">
                            <img src="../assets/img/partner/2.svg" alt="img">
                            <img src="../assets/img/partner/22.svg" alt="img">
                        </div>
                        <div class="partner_content" data-aos="fade-up" data-aos-duration="900">
                            <img src="../assets/img/partner/4.svg" alt="img">
                            <img src="../assets/img/partner/44.svg" alt="img">
                        </div>
                        <div class="partner_content" data-aos="fade-up" data-aos-duration="1100">
                            <img src="../assets/img/partner/1.svg" alt="img">
                            <img src="../assets/img/partner/11.svg" alt="img">
                        </div>
                        <div class="partner_content" data-aos="fade-up" data-aos-duration="1300">
                            <img src="../assets/img/partner/3.svg" alt="img">
                            <img src="../assets/img/partner/33.svg" alt="img">
                        </div>
                    </div>
                </div>
                
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
            </section>

        </main>


        <!-- Footer-->
        <footer class="footer bg-dark-200 box_padding">
            <div class="footer_inner bg-black" data-aos="zoom-in" data-aos-duration="1000">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-2 col-sm-2">
                            <div class="section-header" data-aos="fade-right" data-aos-duration="1000">
                                <h2>Contact</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5">
                            <div class="communication">
                                <div class="info_body" data-aos="fade-up" data-aos-duration="500">
                                    <h6>Studio Website</h6>
                                    <h5>www.mrittikarchitects.com</h5>
                                </div>
                                <div class="info_body" data-aos="fade-up" data-aos-duration="700">
                                    <h6>Email Address</h6>
                                    <h5>mrittikarchitects@gmail.com</h5>
                                </div>
                                <div class="info_body" data-aos="fade-up" data-aos-duration="900">
                                    <h6>Phone No</h6>
                                    <h5>+123 (456789)</h5>
                                </div>
                                <div class="info_body" data-aos="fade-up" data-aos-duration="1100">
                                    <h6>Office Address</h6>
                                    <h5>3 Madison Street NY, USA</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5">
                            <div class="footer_elements d-flex align-items-center justify-content-end">
                                <div class="footer_elements_inner">
                                    <div class="footer_logo" data-aos="fade-up" data-aos-duration="500">
                                        <a href="index.html" class="light_logo"><img src="../assets/img/logo-light.svg" alt="logo"></a>
                                    </div>
                                    <div class="footer_social">
                                        <ul class="social_list">
                                            <li class="facebook" data-aos="fade-up" data-aos-duration="500"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                            <li class="twitter" data-aos="fade-up" data-aos-duration="700"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                            <li class="instagram" data-aos="fade-up" data-aos-duration="900"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                            <li class="youbetube" data-aos="fade-up" data-aos-duration="1100"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="terms_condition">
                                        <ul>
                                            <li data-aos="fade-up" data-aos-duration="1300"><a href="#">Terms</a></li>
                                            <li data-aos="fade-up" data-aos-duration="1500"><a href="#">Condition</a></li>
                                            <li data-aos="fade-up" data-aos-duration="1700"><a href="#">Policy</a></li>
                                        </ul>
                                    </div>
                                    <div class="copyright" data-aos="fade-up" data-aos-duration="2000">
                                        <p>Mrittik 2023. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
            </div>
        </footer>

        <div class="totop">
            <a href="#">UP</a>
        </div>

        <!-- Page Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>

        <!-- Core JS -->
        <script src="../assets/js/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <!-- Side Menu -->
        <script src="../plugins/menu/ma5-menu.min.js"></script>
        
        <!-- Swiper for Slider Type -->
        <script src="../plugins/swiper/swiper-bundle.min.js"></script>
        
        <!-- Portfolio -->
        <script src="../plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="../plugins/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../plugins/isotope/packery-mode.pkgd.js"></script>
        <script src="../plugins/isotope/tilt.jquery.js"></script>
        <!-- <script src="../plugins/isotope/isotope-init.js"></script> -->
        
        

        <!-- Cursor Effect -->
        <script src="../plugins/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="../plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="../assets/js/theme.js"></script>
    </body>
</html>