<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'WEC' }}</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <!-- favicon ==================================== -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts ==================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS =================================== -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">

    <!-- Color Swithcer CSS =============================== -->
    <link rel="stylesheet" href="{{ asset('front/css/color-switcher.css')}}">

    <!-- Fontawsome CSS ============================= -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://htmldemo.net/chalilac/chalilac/css/font-awesome.min.css">

    <!-- Owl Carousel CSS =============================== -->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css')}}">

    <!-- jquery-ui CSS ================================ -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css')}}">

    <!-- Meanmenu CSS ============================== -->
    <link rel="stylesheet" href="{{ asset('front/css/meanmenu.min.css')}}">

    <!-- Animate CSS =============================== -->
    <link rel="stylesheet" href="{{ asset('front/front/css/animate.min.css')}}">

    <!-- Animated Headlines CSS ===================== -->
    <link rel="stylesheet" href="{{ asset('front/front/css/animated-headlines.css')}}">

    <!-- Video CSS ================================ -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery.mb.YTPlayer.css')}}">

    <!-- Nivo slider CSS =========================== -->
    <link rel="stylesheet" href="{{ asset('front/lib/nivo-slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/lib/nivo-slider/css/preview.css')}}" type="text/css" media="screen" />

    <!-- Style CSS ================================= -->
    <link rel="stylesheet" href="{{ asset('front/style.css')}}">

    <!-- Color CSS ================================ -->
    <link rel="stylesheet" href="{{ asset('front/css/color.css')}}">

    <!-- Responsive CSS ============================ -->
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css')}}">

    <!-- Modernizr JS======================================== -->
    <script src="{{ asset('front/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    @livewireStyles

</head>


<body>

    <!--Main Wrapper Start-->
    <div class="as-mainwrapper">
        <!--Bg White Start-->
        <div class="bg-white">
            <!--Header Area Start-->
            <header>
                <div class="header-logo-menu sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="logo" style="width: 70px;">
                                    <a href="{{ route('home') }}" wire:navigate ><img src="{{ asset('front/img/logo/logo.png')}}" alt="WEC"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-6">
                                <div class="menu-button-wrapper">
                                    <div class="mainmenu-area d-none d-lg-inline-block">
                                        <div class="mainmenu">
                                            <nav>
                                                <ul id="nav">
                                                    <li class="current"><a href="{{ route('home') }}#about_section">About</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ route('home') }}#mission">Mission Statement</a></li>
                                                            <li><a href="{{ route('home') }}#pillars_wec">Pillars Of WEC</a></li>
                                                            <li><a href="https://www.wecinternational.org/" target="_blank">WEC International</a></li>
                                                            <li><a href="{{ route('home') }}#what_makes_us_special" >What Makes Us Special</a></li>
                                                            <li><a href="{{ route('home') }}#history">History</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="#">Go</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#short_term">Short Term</a></li>
                                                            <li><a href="#long_term">Long Term</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Partner With WEC</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#">Engaging With WEC</a></li>
                                                            <li><a href="#">Church Partnership</a></li>
                                                            <li><a href="#">Workshop</a></li>
                                                            <li><a href="#">Prayer</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="resources.html">Resources</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="header-login-register">
                                        <ul class="login">
                                            <li>
                                                <a href="#">Donate Now!</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.html">HOME</a>
                                                <ul>
                                                    <li><a href="index.html">Slider Style 1</a></li>
                                                    <li><a href="index-2.html">Slider Style 2</a></li>
                                                    <li><a href="index-3.html">Slider Style 3</a></li>
                                                    <li><a href="index-4.html">Slider Style 4</a></li>
                                                    <li><a href="index-5.html">Background Image</a></li>
                                                    <li><a href="index-6.html">Menu With Image</a></li>
                                                    <li><a href="index-7.html">Fixed Background</a></li>
                                                    <li><a href="index-8.html">Video Background</a></li>
                                                    <li><a href="index-9.html">Slider 1 BoxLayout</a></li>
                                                    <li><a href="index-10.html">Slider 2 BoxLayout</a></li>
                                                    <li><a href="index-11.html">Slider 3 BoxLayout</a></li>
                                                    <li><a href="index-12.html">Slider 4 BoxLayout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="campaign-grid.html">Campaigns</a>
                                                <ul class="sub-menu">
                                                    <li><a href="campaign-list.html">Campaings List Page</a></li>
                                                    <li><a href="campaign-details.html">Campaigns Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.html">Features</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Sliders</a>
                                                        <ul>
                                                            <li><a href="slider-style-1.html">Slider Style 1</a></li>
                                                            <li><a href="slider-style-2.html">Slider Style 2</a></li>
                                                            <li><a href="slider-style-3.html">Slider Style 3</a></li>
                                                            <li><a href="slider-style-4.html">Slider Style 4</a></li>
                                                            <li><a href="background-image.html">Image Background </a></li>
                                                            <li><a href="video-background.html">Video Background </a></li>
                                                            <li><a href="fixed-image.html">Fixed Image</a></li>
                                                            <li><a href="text-animation-1.html">Text Animation 1 </a></li>
                                                            <li><a href="text-animation-2.html">Text Animation 2 </a></li>
                                                            <li><a href="text-animation-3.html">Text Animation 3 </a></li>
                                                            <li><a href="text-animation-4.html">Text Animation 4 </a></li>
                                                            <li><a href="text-animation-5.html">Text Animation 5 </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Style</a>
                                                        <ul>
                                                            <li><a href="theme-menu-1.html">Theme Menu 1</a></li>
                                                            <li><a href="theme-menu-2.html">Theme Menu 2</a></li>
                                                            <li><a href="theme-menu-3.html">Theme Menu 3</a></li>
                                                            <li><a href="theme-menu-4.html">Theme Menu 4</a></li>
                                                            <li><a href="menu-dark.html">Menu Dark</a></li>
                                                            <li><a href="menu-border.html">Menu Border</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Page Title</a>
                                                        <ul>
                                                            <li><a href="page-title-center.html">Title Center</a></li>
                                                            <li><a href="page-title-left.html">Title Left</a></li>
                                                            <li><a href="page-title-right.html">Title Right</a></li>
                                                            <li><a href="page-title-dark.html">Title Dark</a></li>
                                                            <li><a href="page-title-fixed.html">Title Fixed</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Campaigns Style</a>
                                                        <ul>
                                                            <li><a href="campaigns-style-1.html">Campaigns 1</a></li>
                                                            <li><a href="campaigns-style-2.html">Campaigns 2</a></li>
                                                            <li><a href="campaigns-style-3.html">Campaigns 3</a></li>
                                                            <li><a href="campaigns-style-4.html">Campaigns 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Featured Style</a>
                                                        <ul>
                                                            <li><a href="featured-style-1.html">Featured 1</a></li>
                                                            <li><a href="featured-style-2.html">Featured 2</a></li>
                                                            <li><a href="featured-style-3.html">Featured 3</a></li>
                                                            <li><a href="featured-style-4.html">Featured 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Volunteer Style</a>
                                                        <ul>
                                                            <li><a href="volunteer-style-1.html">Volunteer 1</a></li>
                                                            <li><a href="volunteer-style-2.html">Volunteer 2</a></li>
                                                            <li><a href="volunteer-style-3.html">Volunteer 3</a></li>
                                                            <li><a href="volunteer-style-4.html">Volunteer 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog Style</a>
                                                        <ul>
                                                            <li><a href="blog-style-1.html">Blog 1</a></li>
                                                            <li><a href="blog-style-2.html">Blog 2</a></li>
                                                            <li><a href="blog-style-3.html">Blog 3</a></li>
                                                            <li><a href="blog-style-4.html">Blog 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Testimonial Style</a>
                                                        <ul>
                                                            <li><a href="testimonial-style-1.html"> Testimonial 1</a></li>
                                                            <li><a href="testimonial-style-2.html"> Testimonial 2</a></li>
                                                            <li><a href="testimonial-style-3.html"> Testimonial 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Client Style</a>
                                                        <ul>
                                                            <li><a href="client-style-1.html">Client 1</a></li>
                                                            <li><a href="client-style-2.html">Client 2</a></li>
                                                            <li><a href="client-style-3.html">Client 3</a></li>
                                                            <li><a href="client-style-4.html">Client 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Footer Style</a>
                                                        <ul>
                                                            <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                            <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                            <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                            <li><a href="footer-style-4.html">Footer Style 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="index.html">Shortcode</a>
                                                <ul class="sub-menu">
                                                    <li><a href="image-gallery.html">Image Gallery</a></li>
                                                    <li><a href="video-gallery.html">Video Gallery</a></li>
                                                    <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                    <li><a href="shortcode-donate-form.html">Donate Form</a></li>
                                                    <li><a href="shortcode-map.html">Map</a></li>
                                                    <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                    <li><a href="shortcode-breadcrumbs.html">Breadcrumb</a></li>
                                                    <li><a href="shortcode-button.html">Button</a></li>
                                                    <li><a href="shortcode-dropdown.html">Dropdown</a></li>
                                                    <li><a href="shortcode-pagination.html">Pagination</a></li>
                                                    <li><a href="shortcode-progressbar.html">Progressbar</a></li>
                                                    <li><a href="text-animation-1.html">Text Animation 1</a></li>
                                                    <li><a href="text-animation-2.html">Text Animation 2</a></li>
                                                    <li><a href="text-animation-3.html">Text Animation 3</a></li>
                                                    <li><a href="text-animation-4.html">Text Animation 4</a></li>
                                                    <li><a href="text-animation-5.html">Text Animation 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="volunteer.html">Volunteer Page</a></li>
                                            <li><a href="donate.html">Donate Page</a></li>
                                            <li><a href="blog-with-no-sidebar.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area end -->
            </header>

                {{ $slot }}

            <!--Footer Widget Area Start-->
            <div class="footer-widget-area section-dark section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-footer-widget">
                                <h3>Send newsletter</h3>
                                <form action="#" id="mc-form" class="mc-form fix">
                                    <div class="subscribe-form">
                                        <input id="mc-email" type="email" name="email" placeholder="Email Address...">
                                        <button id="mc-submit" type="submit"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre fix">
                                    <div class="mailchimp-submitting"></div>
                                    <!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div>
                                    <!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div>
                                    <!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                                <a href="#">See Google Maps</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-footer-widget">
                                <div class="contact-info dividers">
                                    <div class="contact-title">Address:</div>
                                    <div class="contact-text">792 South Park Avenu,<br> Door 6 Wonderland, Austrila</div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-title">Phone:</div>
                                    <div class="contact-text"> (+1)866-540-3229 - Office<br> 0123. 456. 789 - Fax</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-footer-widget">
                                <div class="contact-info dividers">
                                    <div class="contact-title">Email:</div>
                                    <div class="contact-text color-blue">admin@power-boosts.com<br> support@power-boosts.com
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-title">Follow:</div>
                                    <div class="contact-text">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Footer Widget Area-->
            <!--Footer Area Start-->
            <footer class="footer-area section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>COPYRIGHT &copy; 2021 ALL RIGHT RESERVED BY <a href="https://themeforest.net/user/power-boosts/portfolio">Power-boosts</a></span>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home') }}" wire:navigate >Home</a></li>
                                        <li><a href="#" wire:navigate >Page</a></li>
                                        <li><a href="#" wire:navigate >Donate</a></li>
                                        <li><a href="#" wire:navigate >Blog</a></li>
                                        <li><a href="#" wire:navigate >Campaigns</a></li>
                                        <li><a href="#" wire:navigate >Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End of Footer Area-->
        </div>
        <!--End of Bg White-->
    </div>
    <!--End of Main Wrapper Area-->

    @livewireScripts

    <!-- jquery =========================================== -->
    <script src="{{ asset('front/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('front/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>

    <!-- bootstrap JS ========================================== -->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js')}}"></script>

    <!-- nivo slider js ========================================= -->
    <script src="{{ asset('front/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('front/lib/nivo-slider/home.js')}}" type="text/javascript"></script>

    <!-- wow JS ========================================== -->
    <script src="{{ asset('front/js/wow.min.js')}}"></script>

    <!-- meanmenu JS ======================================= -->
    <script src="{{ asset('front/js/jquery.meanmenu.js')}}"></script>

    <!-- owl.carousel JS =========================================== -->
    <script src="{{ asset('front/js/owl.carousel.min.js')}}"></script>

    <!-- scrollUp JS =========================================== -->
    <script src="{{ asset('front/js/jquery.scrollUp.min.js')}}"></script>

    <!-- Animated Headlines JS ========================================== -->
    <script src="{{ asset('front/js/animated-headlines.js')}}"></script>

    <!-- Textilate JS =========================================== -->
    <script src="{{ asset('front/js/textilate.js')}}"></script>

    <!-- Lettering JS ========================================= -->
    <script src="{{ asset('front/js/lettering.js')}}"></script>

    <!-- Video Player JS ========================================== -->
    <script src="{{ asset('front/js/jquery.mb.YTPlayer.js')}}"></script>

    <!-- Mail Chimp JS =========================================== -->
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- AJax Mail JS ============================================ -->
    <script src="{{ asset('front/js/ajax-mail.js')}}"></script>

    <!-- plugins JS ============================================ -->
    <script src="{{ asset('front/js/plugins.js')}}"></script>

    <!-- StyleSwitch JS ============================================ -->
    <script src="{{ asset('front/js/styleswitch.js')}}"></script>

    <!-- main JS ============================================ -->
    <script src="{{ asset('front/js/main.js')}}"></script>

</body>

</html>
