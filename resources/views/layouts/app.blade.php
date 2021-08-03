<!DOCTYPE html>
<!--
Project:  Typhoon - Solar Energy HTML Template
Version:  1.0.0
Author:   Webstrot
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8">
    <title>Sunville Renewable Pure Energy Powered by Blockchain </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="smart pest">
    <meta name="keywords" content="solar system /sun & wind">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="css\animate.css">
    <link rel="stylesheet" type="text/css" href="css\materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\meanmenu.css">
    <link rel="stylesheet" type="text/css" href="css\slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css\magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox\css\venobox.css">
    <link rel="stylesheet" type="text/css" href="css\owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css\flaticon.css">
    <link rel="stylesheet" type="text/css" href="css\fonts.css">
    <link rel="stylesheet" type="text/css" href="css\camera.css">
    <link rel="stylesheet" type="text/css" href="js\plugin\rs_slider\layers.css">
    <link rel="stylesheet" type="text/css" href="js\plugin\rs_slider\navigation.css">
    <link rel="stylesheet" type="text/css" href="js\plugin\rs_slider\settings.css">
    <link rel="stylesheet" type="text/css" href="css\style_2.css">
    <link rel="stylesheet" type="text/css" href="css\responsive_2.css">
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images\favicon.png">
    <script src='/google_analytics_auto.js'></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireStyles
</head>

<body>
    {{-- <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images\preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div> --}}

    <!-- top header start -->
    <div class="topbar top2 float_left">
        <div class="container-fluid">
            <div class="row">
                <div class="topheader_bg">
                    <div class="top_header_add hidden-xs">
                        <ul>
                            <li><a href="mailto:sunwind@example.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    Mail Us: sunwind@example.com</a></li>
                        </ul>
                    </div>

                    <!-- Social Icon -->
                    <div class="social_links_wrapper">
                        <div class="social_links">
                            <span class="hidden-xs hidden-sm"><i class="fa fa-rss" aria-hidden="true"></i> Follow Us:
                            </span>
                            <ul>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                                <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                <li><a href="#"><i class="fab">&#xf392;</i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-medium"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- top header -->

    <!--sw header wrapper start-->
    <div class="transparent-menu header-area hidden-menu-bar stick">

        <div class="container">

            <div class="bt_main_menu_wrapper">
                <div class="main-menu-wrapper clear-fix">

                    <div class="logo float-left">
                        <a href="{{ route('home') }}"><img src="images\inner_logo.png" class="img-responsive"
                                alt="logo"></a>
                    </div>

                </div>
                <div class="sc_navigation hidden-sm hidden-xs">
                    <nav id="primary-nav" class="dropdown nav_left_margin">
                        <ul class="dropdown menu navigation cart_dropdown_wrapper">

                            @include('layouts.menu')

                        </ul>
                        <div class="header_right_inner_page">
                            <div class="search-wrapper">
                                <div class="et_navbar_search_wrapper hidden-xs">
                                    <div class="et_search_bar" id="search_button">
                                        <a href="#"><i class="fa fa-search waves-effect waves-light"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div id="search_open" class="et_search_box">
                                        <input type="text" placeholder="Search text...">
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sw_icon_bar">
                                <ul class="tc_login_btn_wrapper">
                                    <li class="dropdown tc_login_btn">
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-light"
                                            data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu tc_menu_fixed_border">
                                            <li class="dropdown_hover"><a href="#">FAQ's</a></li>
                                            <li class="dropdown_hover"><a href="#">Track Order</a></li>
                                            <li class="dropdown_hover"><a href="#">Register</a></li>
                                            <li class="dropdown_hover"><a href="#">Login</a></li>
                                            <li class="dropdown_hover hidden-lg"><a href="#">Free Quote</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </nav>
                </div>
                <!-- /.main-menu-wrapper -->
                <!-- mobile menu area start -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container header_container">
                        <div class="row">

                            <div class="col-xs-12 cc_menu_top_margin">
                                <!-- mobile menu start -->
                                <div class="mobile-menu">
                                    <nav>
                                        <ul class="nav">

                                            @include('layouts.menu')

                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu area end -->

                <!-- /.main-menu-wrapper -->
            </div>
        </div>

        <div class="header_btn">
            <ul>
                <li>
                    <a href="#!" class="waves-effect waves-light waves-ripple">free quote</a>
                </li>
            </ul>
        </div>
    </div>
    <!--sw header wrapper end-->

    {{ $slot }}

    <!-- sw partners section start-->
    <div class="sw_partners_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Partners</h1>
                        <img src="images\heading_line.png" alt="title">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="partners_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_1.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_2.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_3.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_4.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_5.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images\partner_2.png" alt="partner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw partners section end-->
    <!-- sw footer section start-->
    <div class="sw_footer_main_wrapper sw_footer_index_wrapper">

        <div class="circle_btm">
            <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
        </div>
        <div class="footer_wrapper">

            <div class="container">

                <div class="row">
                    <div class="foter_padder">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_about">
                                <div class="wrapper_first_image">
                                    <a href="index.html"><img src="images\hd_logo.png" class="img-responsive"
                                            alt="logo"></a>
                                </div>
                                <div class="abotus_content">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis aks nostrud exercitation
                                        ullamco.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful">
                                <h4>useful links </h4>
                                <img src="images\hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>About us</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>events </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>contact </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>history</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>news</a> </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful wrapper_second_links">

                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>sitemap</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>FAQ </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>awards </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>tstimonials</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>career</a> </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_useful wrapper_second_useful_2">
                                <h4>contact us</h4>
                                <img src="images\hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li>
                                        <h1>+800 568 322</h1>
                                    </li>
                                    <li><a href="#"><i class="flaticon-new-email-outline"></i>sunwind@example.com</a>
                                    </li>
                                    <li><a href="#"><i class="flaticon-internet"></i>www.example.com</a>
                                    </li>

                                    <li><i class="flaticon-placeholder"></i>Timposn, Suite 247 USA, 222
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="section3_copyright">
                        <p>Copyright 2021-22 <a href="index.html"> sun & wind energy</a>. all right reserved - design by
                            <a href="webstrot.com">webstrot. </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- sw footer section end-->
    <!--main js files-->

    <script src="js\jquery_min.js"></script>
    <script src="js\materialize.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jqu_menu.js"></script>
    <script src="js\jqu_slickmenu.js"></script>
    <script src="js\isotope.pkgd.min.js"></script>
    <script src="venobox\js\venobox.min.js"></script>
    <script src="js\jquery.inview.min.js"></script>
    <script src="js\jquery.mixitup.min.js"></script>
    <script src="js\jquery.countTo.js"></script>
    <script src="js\wow.min.js"></script>
    <script src="js\jquery.easing.1.3.js"></script>
    <script src="js\owl.carousel.js"></script>
    <script src="js\camera.min.js"></script>
    <script src="js\plugin\rs_slider\jquery.themepunch.revolution.min.js"></script>
    <script src="js\plugin\rs_slider\jquery.themepunch.tools.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.addon.snow.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.actions.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.carousel.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.kenburn.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.layeranimation.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.migration.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.navigation.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.parallax.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.slideanims.min.js"></script>
    <script src="js\plugin\rs_slider\revolution.extension.video.min.js"></script>
    <script src="js\custom_2.js"></script>
    <!--js code-->
    <script>
        var tpj = jQuery;

        var revapi1050;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1050_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1050_1");
            } else {
                revapi1050 = tpj("#rev_slider_1050_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: false,
                            hide_onmobile: true,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 10
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 10
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            hide_under: 1024,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 0,
                            space: 10,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1400, 1240, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>
</body>

</html>
