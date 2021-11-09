<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative Startup, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Interblesolutions</title>
    <!-- Favicon -->
    <link href="" rel="icon">
    <!-- Bundle -->
    <link href="vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="creative-startup/css/line-awesome.min.css" rel="stylesheet">
    <link href="vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="creative-startup/css/slick.css" rel="stylesheet">
    <link href="creative-startup/css/slick-theme.css" rel="stylesheet">
    <link href="vendor/css/wow.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="creative-startup/css/blog.css" rel="stylesheet">
    <link href="creative-startup/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Preloader -->
<div class="preloader">
    <div class="center">
        <div class="loader loader-32">
            <div class='loader-container'>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
<header id="home">

    <div class="inner-header">

        <!--upper-nav-->
        {{--<div class="upper-nav">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <ul class="top-personal-info">
                            <li style="border: 1px solid #929292;padding: 15px;border-radius: 5px;">
                                <a style="font-weight: 500;font-size: 20px;" href="tel:+18053545622"><i style="font-size: 25px;" class="las la-phone"></i> +1 805-354-5622</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <ul class="top-social-links">
                            <li><a href="#" class="link-holder fb"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#" class="link-holder twit"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#" class="link-holder link-in"><i class="lab la-linkedin-in"></i></a></li>
                            <li><a href="#" class="link-holder insta"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>--}}
        <!--main nav-->
        <div style="padding: 0;" class="main-navigation">
            <div style="max-width: 95%;" class="container">
                <div class="row">

                    <div style="margin-top: 0;display: flex;align-items: center;" class="col-7 col-lg-3">
                        <a style="background-color: transparent;padding: 0;text-align: left;" class="navbar-brand simple-nav-logo" href="{{'/'}}">
                            <img src="creative-startup/img/White and Orange Circle Icon Internet Logo.png" alt="logo">
                        </a>
                        <a class="navbar-brand fixed-nav-logo" href="{{'/'}}">
                            <img src="creative-startup/img/White and Orange Circle Icon Internet Logo.png" alt="logo">
                        </a>
                    </div>

                    <div style="margin-top: 20px;display: block;" class="col-8 col-lg-9 simple-navbar">

                        <nav style="padding-bottom: 10px;" class="navbar navbar-expand-lg">
                            <li class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item {{Route::currentRouteName() == 'home' ? 'active' : null}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                                    <li class="nav-item dropdown">
                                        <button class="dropbtn">Services</button>
                                        <div class="dropdown-content">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div>
                                    </li>
                                    <li class="nav-item {{Route::currentRouteName() == 'home' ? 'about' : null}}"><a class="nav-link" href="{{url('about')}}">About</a></li>
                                    <li class="nav-item {{Route::currentRouteName() == 'home' ? 'contact-us' : null}}"><a class="nav-link" href="{{url('/')}}">Contact Us</a></li>
                                </ul>

                                <ul class="top-personal-info" style="list-style: none;width: auto;margin-left: 50px;">
                                    <li style="background: #2AD77B;color: white;padding: 10px 15px;border-radius: 25px;line-height: 1;">
                                        <a style="font-weight: 700;" href="tel:+18053545622"><i style="display: none;" class="las la-phone"></i> +1 805-354-5622</a>
                                    </li>
                                </ul>

                            </li>
                        </nav>
                        {{--<ul class="top-social-links fixed-nav-links">
                            <li><a href="#" class="link-holder fb"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#" class="link-holder link-in"><i class="lab la-linkedin-in"></i></a></li>
                            <li><a href="#" class="link-holder insta"><i class="lab la-instagram"></i></a></li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
        <!--toggle btn-->
        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{'/'}}" class="navbar-brand"><img src="creative-startup/img/White and Orange Circle Icon Internet Logo (11).png" alt="logo"></a>
                    </div>
                    <div class="col-12 col-lg-8">
                        <nav class="side-nav w-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link scroll" href="{{url('/')}}">HOME</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <button class="nav-link scroll dropbtn">Services</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scroll" href="{{url('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scroll" href="{{url('/')}}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-lg-4 d-flex align-items-center">
                        <div class="side-footer text-white w-100">
                            <div class="menu-company-details">
                                <span><a href="tel:+18053545622"> +1 805-354-5622</a></span>
                                <span>email@website.com</span>
                            </div>
                            <ul class="social-icons-simple">
                                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                            <p class="text-white">&copy; 2020 MegaOne. Made With Love by Themesindustry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
<!--Header End-->

@yield('content')

<!--Footer Start-->
<footer style="padding-bottom: 20px;background-color: #30333F;" class="footer-style-1">

    <div style="max-width: 80%;" class="container">
        <div style="align-items: flex-start !important;" class="row align-items-center">
            <!--Social-->
            <div class="col-lg-3">
                <h2 style="font-family: 'poppins';font-weight: 600;font-size: 28px;color: white;margin-bottom: 20px;">FOLLOW US ON</h2>
                <div class="footer-social text-center text-lg-left ">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 style="font-family: 'poppins';font-weight: 600;font-size: 28px;color: white;margin-bottom: 20px;">NAVIGATION</h2>
                <div style="display: flex;" class="text-center text-lg-left">
                    <ul style="line-height: 2;" class="list-unstyled">
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">Home</a></li>
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">Resume Writing</a></li>
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">Customer Support</a></li>
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">Website Development</a></li>
                    </ul>
                    <ul style="line-height: 2;padding-left: 50px;" class="list-unstyled">
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">About</a></li>
                        <li><a style="font-weight: 300;font-size: 18px;color: white;" class="wow fadeInUp" href="javascript:void(0);">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div style="display: flex;align-items: flex-start;">
                    <img style="width: 25px;" src="creative-startup/img/Asset 7@4x.png" />
                    <span style="font-family: 'Poppins';font-weight: 400;font-size: 18px;color: white;margin-left: 10px;">+1 805-354-5622</span>
                </div>
                <div style="display: flex;align-items: flex-start;margin-top: 20px;">
                    <img style="width: 25px;" src="creative-startup/img/Asset 9@4x.png" />
                    <span style="font-family: 'Poppins';font-weight: 400;font-size: 18px;color: white;margin-left: 10px;">info@interblesolutions.com</span>
                </div>
                <div style="display: flex;align-items: flex-start;margin-top: 20px;">
                    <img style="width: 25px;" src="creative-startup/img/Asset 8@4x.png" />
                    <span style="font-family: 'Poppins';font-weight: 400;font-size: 18px;color: white;margin-left: 10px;">123 Marion Street HOUSTON, TX 77200</span>
                </div>
            </div>

            <div style="text-align: right;" class="col-lg-12">
                <img style="width: 25%;" src="creative-startup/img/White and Orange Circle Icon Internet Logo.png" alt="logo">
            </div>

            <div style="text-align: center;font-family: 'Poppins';font-size: 18px;font-weight: 300;color: white;margin-top: 20px;" class="col-lg-12">
            
            &copy; Copyright 2021 - all rights reserved | Interble Solutions

            </div>

        </div>
    </div>
</footer>
<!--Footer End-->

<style>

.footer-social a
{
    background-color: white;
}

.slider-area .slider-detail .slider-slide .slider-inner-content .slide-heading
{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    color: #30333F;
    font-size: 38px;
}

.slider-area .slider-detail .slider-slide .slider-inner-content .slide-text
{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 300;
    color: #30333F;
    font-size: 24px;
    line-height: 1.3;

}

.slider-area img
{
    border-radius: 15px;
}

.anim-btn
{
    background-color: rgba(1, 212, 100, 0.56);
    color: #30333F;
    font-weight: 700;
    font-size: 18px;
    font-family: 'Poppins';
    font-style: normal;
    border: none !important;
    padding: 15px 30px 15px 30px;

}

    .inner-header
    {
        height: 105px;
        display: flex;
        align-items: center;
    }

    header
    {
        position: absolute;
        z-index: 101;
        height: 105px;
        display: flex;
        align-items: center;
        font-family: "Poppins", sans-serif;
    }

    header .navbar-brand img
    {
        max-width: 85%;
    }

    header .main-navigation nav .navbar-nav .nav-item.active .nav-link
    {
        color: #01D464 !important;
    }

    header .main-navigation nav .navbar-nav .nav-item .nav-link
    {
        font-size: 20px;
    }

    body, header, footer, .header-appear, .side-menu .bg-overlay
    {
        background-color: rgb(0 0 0 / 35%);
    }

    header .main-navigation nav .navbar-nav .nav-item .nav-link
    {
        color: #fff;
    }

    .slider-area
    {
        height: 100vh;
        padding-top: 50px;
    }

    .side-menu .side-nav .navbar-nav .nav-link
    {
        color: black;
        font-weight: 500;
    }

    .side-menu .menu-company-details span, .side-menu .social-icons-simple li a, .side-menu p
    {
        color: black !important;
    }

    .side-menu .btn-close::before, .side-menu .btn-close::after
    {
        background-color: black;
    }

    .side-menu-inner-content
    {
        border-bottom: solid 1px rgb(0 0 0 / 50%);
    }

    .about-sec .services-area .purple-overlay
    {
        background-color: #4EA699;
    }

    .about-sec .about-area
    {
        background-color: #FF928B;
    }

    .slider-area .bg-overlay
    {
        /*background-color: #315659;*/
        background-image: url("creative-startup/img/main background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 100%;
    }

    .slider-area .container .inner-bg-overlay
    {
        background: transparent;
    }

    .top-personal-info
    {
        display: none;
    }

    .top-personal-info a
    {
        font-size: 20px;
    }

    .top-personal-info a:hover
    {
        color: inherit;
    }

    .top-personal-info a i
    {
        font-size: 15px;
        position: relative;
        top: 1px;
    }

    .sidemenu_btn
    {
        top: 40px !important;
        margin-top: 0;
    }

    .header-appear .fixed-nav-logo img
    {
        width: 85%;
    }

    .team-sec .left-overlay, .team-sec .inner-team-sec
    {
        background-color: #315659;
    }

    .blog-sec .left-overlay, .blog-sec .blog-inner-overlay
    {
        background-color: #FF928B;
    }

    .header-appear .sidemenu_btn
    {
        right: 30px;
    }

    @media (max-width: 992px){

        .about-sec .services-area .purple-overlay
        {
            right: 0;
        }

    }

    @media (max-width: 586px)
    {
        header
        {
            height: 75px;
        }

        .inner-header
        {
            height: 75px;
        }

        .sidemenu_btn
        {
            top: 25px !important;
            margin-right: 0;
        }

    }

    @media (max-width: 1200px)
    {
        .navbar-expand-lg .navbar-collapse
        {
            display: none !important;
        }

        .simple-navbar
        {
            display: none !important;
        }
    }

    @media (min-width: 1200px)
    {
        .sidemenu_btn
        {
            display: none;
        }

        .top-personal-info
        {
            display: block;
        }
    }

    .side-menu .btn-close
    {
        z-index: 1000;
    }

    .dropbtn {
        background-color: transparent;
        color: white;
        /*padding: 16px;*/
        font-size: 20px;
        border: none;
        padding-top: 0;
        padding-bottom: 0;
        display: flex;
    }

    header .main-navigation nav .navbar-nav .nav-item
    {
        margin-left: 50px !important;
    }

    header .main-navigation nav .navbar-nav .nav-item .nav-link:hover
    {
        color: #01D464 !important;
    }

    .bg-red
    {
        background-color: #315659;
    }

    .bg-purple
    {
        background-color: #4EA699;
    }

    .bg-green
    {
        background-color: #FF928B;
    }

    .loader-32 .ball
    {
        border: 1px solid #315659;
        background-color: #315659;
    }

    .loader-32 .ball-wrapper:nth-child(2) .ball
    {
        border: 1px solid #4EA699;
        background-color: #4EA699;
    }

    .loader-32 .ball-wrapper:nth-child(3) .ball
    {
        border: 1px solid #FF928B;
        background-color: #FF928B;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 145px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1000;
        border-radius: 5px;
        padding: 0;
        animation: growOut 300ms ease-in-out forwards;
        transform-origin: top center;
        background-color: rgb(255, 255, 255,0.8);
        top: 35px;
    }

    .dropdown-content:before
    {
        content: '';
        display: block;
        height: 10px;
        width: 100%;
        position: absolute;
        top: -10px;
    }

    .dropdown-content:after
    {
        content: '';
        display: block;
        height: 0;
        width: 0;
        position: absolute;
        top: -10px;
        left: 25%;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 10px solid #989898;
    }

    @keyframes growOut {

        0%
        {
            transform: scale(0);
        }

        80%
        {
            transform: scale(1.1);
        }

        100%
        {
            transform: scale(1);
        }

    }

    .side-menu .navbar-nav .dropdown-content
    {
        top: 0;
    }

    .side-menu .navbar-nav .dropdown-content:after
    {
        display: none;
    }

    .side-menu .navbar-nav .dropdown-content a:after
    {
        display: none;
    }

    .dropdown-content a {
        color: #30333F;
        padding: 0.6rem 0.5rem;
        text-decoration: none;
        display: block;
        font-weight: 400;
        white-space: nowrap;
        clear: both;
        font-size: 16px;
        font-family: "Poppins", sans-serif;
    }

    .dropdown-content a:hover:after
    {
        content: '';
        background: -webkit-linear-gradient(right, #EBEBEB 0%, transparent 100%);
        background: linear-gradient(to right, #EBEBEB 0%, transparent 100%);
        background: #afb0b1;
        display: block;
        height: 1px;
        width: 100%;
    }

    .dropdown-content a:hover {background-color: transparent;margin-left: 5px;color: #01D464;/*text-shadow: 1px 2px 3px #000000b0;*/}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {color: #01D464 !important;}

    .dropbtn:after, .side-nav .navbar-nav .dropbtn::after
    {
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transition: -webkit-transform 0.1s ease;
        transition: -webkit-transform 0.1s ease;
        transition: transform 0.1s ease;
        transition: transform 0.1s ease, -webkit-transform 0.1s ease;
        display: inline-block;
        font-weight: 900;
        margin-left: 5px;
        position: relative;
        width: auto;
        height: auto;
        background-color: transparent;
        vertical-align: middle;
    }

    .side-nav .navbar-nav .dropbtn:hover::after, .side-nav .navbar-nav .dropbtn:focus::after, .side-nav .navbar-nav .dropbtn.active::after
    {
        width: auto;
    }

    .dropdown:hover .dropbtn::after
    {
        -webkit-transform: rotateZ(180deg);
        transform: rotateZ(180deg);
    }

    header .main-navigation nav .navbar-nav .nav-item .nav-link
    {
        font-family: inherit;
        padding: 0;
    }

    .side-menu .navbar-nav .dropdown-content
    {
        position: relative;
    }

    .side-menu .btn-close
    {
        top: 20px;
        right: 20px;
    }

    header .side-menu .navbar-brand img
    {
        max-width: 100%;
    }

</style>

<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/jquery.fancybox.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="vendor/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="vendor/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.migration.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.video.min.js"></script>
<!-- google map-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>-->
<!--<script src="creative-startup/js/map.js"></script>-->
<!--Tilt Js-->
<script src="creative-startup/js/slick.js"></script>
<script src="creative-startup/js/slick.min.js"></script>
<!-- custom script-->
<script src="creative-startup/js/circle-progress.min.js"></script>

<script src="vendor/js/contact_us.js"></script>
<script src="creative-startup/js/script.js?v=4"></script>

</body>
</html>
