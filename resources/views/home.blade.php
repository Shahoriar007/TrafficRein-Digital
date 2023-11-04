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
        <title>TrafficRein Home</title>

        <!-- Styles Include -->
        <link rel="stylesheet" href="../assets/css/style.css">

    </head>


    <body class="bg-dark">

        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="T" class="characters">T</span>

					<span data-preloader-text="R" class="characters">R</span>

					<span data-preloader-text="A" class="characters">A</span>

					<span data-preloader-text="F" class="characters">F</span>

                    <span data-preloader-text="F" class="characters">F</span>

					<span data-preloader-text="I" class="characters">I</span>

					<span data-preloader-text="C" class="characters">C</span>

                    <span data-preloader-text="R" class="characters">R</span>

                    <span data-preloader-text="E" class="characters">E</span>

                    <span data-preloader-text="I" class="characters">I</span>

                    <span data-preloader-text="N" class="characters">N</span>
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
            <div class="container-fluid">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html" class="light_logo"><img src="../assets/img/logo-light.svg" alt="logo"></a>
                        <a href="index.html" class="dark_logo"><img src="../assets/img/logo-gray.svg" alt="logo"></a>
                    </div>


                    <div class="mainnav d-none">
                        <ul class="main_menu">
                            <li class="menu-item menu-item-has-children active"><a href="{{ route('home') }}">Home</a></li>

                            <li class="menu-item menu-item-has-children"><a href="{{ route('about') }}">About Us</a></li>


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


                            <!-- <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="about.html">About Us</a></li>
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
                                            <li class="menu-item"><a href="service-details.html">Service Details</a></li>
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
                                </ul> -->
                            </li>
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                        <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>

                        <div class="open_search">
                            <form class="search_form" action="search.php">
                                <input type="text" name="search" class="keyword form-control" placeholder="Search...">
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <button class="ma5menu__toggle d-block" type="button">
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

        <!-- Main Wrapper-->
        <main class="wrapper">

            <div class="theme_slider_2 p-0">
                <div class="swiper swiper_theme_slider_2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/9.jpg')">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <div class="meta m-0">
                                                <div class="text-olive">TrafficReing Digital</div>
                                            </div>
                                            <h4 class="text-white">TrafficReing Digital</h4>
                                            <h5 class="text-olive">eeeeeeee your digital journey - from strategy to execution. Innovating your digital landscape - 360 degree solution at a time.</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/10.jpg')">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <div class="meta m-0">
                                                <div class="text-olive">Digital Marketing</div>
                                            </div>
                                            <h4><a href="project-details.html" class="text-white">Accelerate your online success with our digital expertise. Let’s deep dive and make your business shine!</a></h4>
                                            <div class="details_link">
                                                <a href="blog-details.html">
                                                    <span class="link_text">View Details</span>
                                                    <span class="link_icon">
                                                        <span class="line"></span>
                                                        <span class="circle"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/11.jpg')">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <div class="meta m-0">
                                                <div class="text-olive"> Web Design and Development </div>
                                            </div>
                                            <h4><a href="project-details.html" class="text-white">Building websites that build your business. Where every pixel counts, We turn your vision into a digital reality</a></h4>
                                            <div class="details_link">
                                                <a href="blog-details.html">
                                                    <span class="link_text">View Details</span>
                                                    <span class="link_icon">
                                                        <span class="line"></span>
                                                        <span class="circle"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/12.jpg')">
                                <div class="slide_content">
                                    <div class="slide_content_wrapper mb-0 h-100 bg-dark-100">
                                        <div class="slide_content_inner">
                                            <div class="meta m-0">
                                                <div class="text-olive">Software Development</div>
                                            </div>
                                            <h4><a href="project-details.html" class="text-white">Transforming ideas into digital reality. Innovating the future, one line of code at a time. Our code, your success - let's create something great</a></h4>
                                            <div class="details_link">
                                                <a href="blog-details.html">
                                                    <span class="link_text">View Details</span>
                                                    <span class="link_icon">
                                                        <span class="line"></span>
                                                        <span class="circle"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Buttons -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>

        </main>


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
