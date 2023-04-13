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
        <title>TrafficRein</title>    
        
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
                            
                            <!-- <li class="menu-item menu-item-has-children"><a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="project-1.html">Projects One</a></li>
                                    <li class="menu-item"><a href="project-2.html">Projects Two</a></li>
                                    <li class="menu-item"><a href="project-3.html">Peojects Three</a></li>
                                    <li class="menu-item"><a href="project-details.html">Peoject Details</a></li>
                                    <li class="menu-item"><a href="project-details-2.html">Peoject Details Two</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children active"><a href="#">Pages</a>
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
                            <li class="menu-item"><a href="{{ route('services') }}">Services</a></li>
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
        <div class="page_header">
            <div class="page_header_inner">
                <div class="container">
                    <div class="page_header_content d-flex align-items-center justify-content-between">
                        <h2 class="heading">Service Details</h2>
                        <ul class="breadcrumb d-flex align-items-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li class="active">California Mansion Residence</li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>

      
        <!-- Main Wrapper-->
        <main class="wrapper">
            <!-- Scroll Progress -->
            
            <section class="project-details bg-dark-200">
                <div class="container">
                    <div class="gallery_slider">
                        <div class="swiper swiper_gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gallery-image">
                                        <img src="../assets/img/portfolio/details/sl-1.jpg" alt="img">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="gallery-image">
                                        <img src="../assets/img/portfolio/details/sl-2.jpg" alt="img">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="gallery-image">
                                        <img src="../assets/img/portfolio/details/sl-3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- Add Buttons -->
                            <div class="swiper-navigation">
                                <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                                <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="sidebar">
                                <div class="service-information">
                                    <ul>
                                        <li><a href="service-details.html">Digital Marketing</a></li>
                                        <li class="active"><a href="service-details.html">Web Development</a></li>
                                        <li><a href="service-details.html">Highly Engaging Content & Copy writing</a></li>
                                        <li><a href="service-details.html">Enterprise Software Development</a></li>
                                        <li><a href="service-details.html">Search Engine Optimisation (SEO)</a></li>
                                        <li><a href="service-details.html">Social Media Marketing & Management</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-8">
                            <div class="project-details_inner">
                                <div class="post_content">
									<div class="post-header">
										<h3 class="post-title">Digital Marketing</h3>
									</div>
									<div class="fulltext">
										<p>
											Digital marketing encompasses a wide range of services, all aimed at promoting businesses, products, or services online. Here are some key service details for digital marketing:
										</p>

										<!-- <h6 class="widget-title">
											Project Features
											<span class="title-line"></span>
										</h6> -->
										<!-- <p>We design with people in mind and use every expertise at our disposal.Our practice connects communities and is committed to the stewardship of place, people, and the environment.</p> -->
										<ul class="point_order">
											<li>Search engine optimization (SEO): This involves optimizing a website's content and structure to improve its ranking on search engines like Google, Bing, and Yahoo. SEO involves both on-page and off-page tactics, such as keyword research, content creation, link building, and website optimization.</li>
											<li>Pay-per-click advertising (PPC): This involves placing ads on search engines, social media platforms, or other websites and paying each time someone clicks on them. PPC campaigns can be highly targeted and effective for generating traffic and conversions.</li>
											<li>Social media marketing: This involves using social media platforms like Facebook, Instagram, Twitter, and LinkedIn to build brand awareness, engage with customers, and promote products or services. Social media marketing can include organic content creation, paid advertising, influencer marketing, and community management.</li>
                                            <li>Content marketing: This involves creating and sharing valuable content that informs, educates, or entertains your target audience. Content marketing can include blog posts, videos, infographics, podcasts, and other forms of content that can be distributed through email, social media, or other channels.</li>
                                            <li>Email marketing: This involves using email to communicate with prospects and customers, build relationships, and promote products or services. Email marketing can include newsletters, promotional emails, automated campaigns, and other types of email communication.</li>
                                            <li>Analytics and reporting: This involves tracking and analyzing the performance of digital marketing campaigns and using data to optimize future campaigns. Analytics and reporting can include tools like Google Analytics, social media analytics, and other tracking software.
                                            </li>
										</ul>

                                        <p>
                                            Digital marketing services can be customized to meet the specific needs and goals of each business or organization, and a good digital marketing agency will work closely with clients to develop a tailored strategy that delivers results.

                                        </p>

										<!-- <p>
											You don’t create unforgettable spaces all over the world with a single design tool. Our expertise in drawing people together is as broad as it is deep. It draws from a variety of disciplines, each one contributing to the bigger picture and sustainable growth. More than 3,000 projects fill our portfolio, but it’s the millions of people who experience them who matter most. We’ve grouped our work into five categories: places, venues, spaces, experiences and events. Click on the images below to learn more below about the impact our projects have on communities.
										</p> -->

                                        <div class="post-footer">
                                            <nav class="d-flex align-items-center justify-content-between">
                                                <div class="details_link l-dir pagination-previous"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                                <div class="page-all"><a href="#"><i class="bi bi-grid"></i></a></div>
                                                <div class="details_link r-dir pagination-next"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                            </nav>
                                        </div>
									</div>

                                    <div class="related-posts">
                                        <h6 class="widget-title mb-2">
											More Projects
											<span class="title-line"></span>
										</h6>
                                        <div class="grid grid-3 gutter-15 clearfix"> 
                                            <div class="grid-sizer"></div>                          
                                            <div class="grid-item residences">
                                                <div class="thumb">
                                                    <img class="item_image" src="../assets/img/portfolio/4.jpg" alt="">
                                                    <div class="works-info">
                                                        <div class="label-text">
                                                            <h5><a href="project-details.html">California young menz club</a></h5>
                                                            <h6><a href="#">Club House</a></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                          
                                            <div class="grid-item interiors"> 
                                                <div class="thumb">
                                                    <img class="item_image" src="../assets/img/portfolio/2.jpg" alt="">
                                                    <div class="works-info">
                                                        <div class="label-text">
                                                            <h5><a href="project-details.html">California young menz club</a></h5>
                                                            <h6><a href="#">Club House</a>, <a href="#">Interior</a></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                      
                                            <div class="grid-item residences"> 
                                                <div class="thumb">
                                                    <img class="item_image" src="../assets/img/portfolio/3.jpg" alt="">
                                                    <div class="works-info">
                                                        <div class="label-text">
                                                            <h5><a href="project-details.html">California young menz club</a></h5>
                                                            <h6><a href="#">Club House</a>, <a href="#">Interior</a></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
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
        
        <!-- Funfacts -->
        <!-- <script src="../assets/js/funfacts.js"></script> -->
        
        <!-- Portfolio -->
        <script src="../plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="../plugins/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../plugins/isotope/packery-mode.pkgd.js"></script>
        <script src="../plugins/isotope/tilt.jquery.js"></script>
        <script src="../plugins/isotope/isotope-init.js"></script>
        
        

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