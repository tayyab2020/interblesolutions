@extends('layouts.front')

@section('content')

    <div style="height: auto;padding: 0;" class="slider-area testimonial-sec position-relative" id="testimonial-sec">
        <div style="padding: 0;max-width: 100%;" class="container">
            <div class="testimonial-area padding-bottom">
                <div style="padding-top: 250px;" class="container testimonial-area-child">
                    <div style="margin: 0;" class="row">
                        <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div class="testimonial-details wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <h4 class="heading">ABOUT</h4>
                                <p style="text-align: justify;" class="text">
                                    At <span style="color: #00CFBE;">Interble Solutions</span>, we provide businesses with the opportunity to stay one step ahead of the competition through operational focus and time flexibility. We drive business growth through client retention and diversification, providing opportunities of global expansion. Our aim is to provide excellence through technology, analytics and research oriented methods that drives a business to focus on their core competencies and management.
                                    <br>
                                    We are primarily a BPO solutions provider, helping businesses achieve their goals through versatility and cost structure effectiveness. We enable businesses to achieve better product orientation and service provision through cutting edge solutions, meeting the company's data and infrastructure needs, transforming their applications and helping achieve excellence in all aspects. We at Interble Solutions have an unwavering commitment to meet the needs of a business, making them shape their character, culture and redefining them in terms of a modern enterprise. Our plethora of services include customer support, lead generation, email and chat support as well as web development and resume writing. We envision excellence by aiming to improve your business through dedication and an unwavering commitment to achieve sustained business growth over the long term. We drive your business forward through performance sustainability, and ingenuity. Work with us to create a positive and long lasting change.
                                </p>
                            </div>
                        </div>
                        <div style="display: flex;align-items: flex-start;justify-content: flex-end;" class="col-12 col-lg-4 movediv">
                            <div id="movediv-container" style="display: flex;flex-direction: column;align-items: flex-end;text-align: center;">
                                <div id="movediv" class="image-cropper wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                                    <img src="https://via.placeholder.com/150" />
                                </div>
                                <span class="text text1" style="width: 100%;font-size: 25px;font-weight: 600;padding-top: 40px;">M. Haseeb</span>
                                <span class="text text2" style="width: 100%;font-size: 13px;padding-top: 10px;">CEO &amp; Founder</span>
{{--                                <blockquote style="margin: 25px 0 0 0;">Never have I seen such bald and shameless attempts at garnering an audiences' approval through frosted deliciousness.</blockquote>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin: 0;" class="row">
                    <div class="col-12 stats-heading-area text-center">
                        <div class="res-font" style="display: flex;justify-content: center;align-items: center;margin-top: 60px;font-size: 40px;font-weight: 700;font-family: 'Poppins';">
                            <span style="color: #0A433E;font-family: 'Poppins', sans-serif;">OUR</span> <span style="color: #00CFBE;margin-left: 10px;font-family: 'Poppins', sans-serif;">CLIENTS</span>
                        </div>
                    </div>
                </div>

                <div style="margin: auto;margin-top: 80px;" class="our-clients">
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                    <div>
                        <img src="creative-startup/img/I (3).png">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>

        $(document).ready(function() {
            $('.our-clients').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            arrows: false,
                            
                        }
                    },
                ],
            });
        });

    </script>


    <style>

        .sidemenu_btn span
        {
            background: black !important;
        }

        .our-clients
        {
            width: 80%;
        }

        .main-logo
        {
            display: none;
        }

        .sec-logo
        {
            display: inline-block !important;
        }

        .top-personal-info li
        {
            background: #0A433E !important;
            color: #ffff !important;
        }

        header .main-navigation nav .navbar-nav .nav-item .nav-link, .dropbtn
        {
            color: #0A433E !important;
        }

        .slick-initialized .slick-slide
        {
            margin: 0 60px;
        }

        @media (max-width: 1100px){

            .image-cropper
            {
                width: 280px !important;
                height: 280px !important;
            }

        }

        @media (max-width: 768px){

            .slider-area .container
            {
                padding-bottom: 60px;
            }

            .padding-bottom
            {
                padding-bottom: 70px;
            }

            .stats-heading-area span
            {
                font-size: 30px;
            }

            .res-font
            {
                margin-top: 0 !important;
            }

            .our-clients
            {
                width: 100%;
                margin-top: 50px !important;
            }

            .slick-initialized .slick-slide
            {
                margin: 0 20px !important;
            }

        }

        .slick-prev
        {
            left: 25px;
        }

        .slick-next
        {
            right: 30px;
        }

        .slick-prev:before, .slick-next:before
        {
            font-size: 30px;
            color: black;
        }

        .testimonial-area-child
        {
            max-width: 90% !important;
        }

        @media (max-width: 992px){

            .movediv
            {
                justify-content: center !important;
            }

            .text1, .text2
            {
                padding-right: inherit !important;
            }

            .testimonial-area-child
            {
                max-width: 100% !important;
            }

            #movediv-container
            {
                align-items: center !important;
                text-align: center !important;
            }

            #movediv
            {
                width: 200px !important;
                height: 200px !important;
            }
        }

        blockquote::before,
        blockquote::after {
            animation: dancing 1s linear infinite;
            display: inline-block;
            transform: rotate(13deg);
        }

        @keyframes dancing {
            0% {
                transform: rotate(13deg) scale(2);
            }

            25% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(-13deg) scale(2);
            }

            75% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(13deg) scale(2);
            }
        }
        blockquote::before {
            content: open-quote;
        }
        blockquote::after {
            content: close-quote;
        }
        blockquote {
            quotes: "“" "”" "‘" "’";
            font-family: Georgia, serif;
            font-size: 20px;
            color: black;
        }
        .slider-area
        {
            margin-top: 0 !important;
        }
        .image-cropper {
            width: 300px;
            height: 300px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        .testimonial-area:before
        {
            content: "";
            position: fixed;
            background-image: url("creative-startup/img/Group 12.jpg");
            background-size: 100%;
            opacity: 0.3;
            width: 100%;
            height: 100%;
        }

        .testimonial-sec .testimonial-area
        {
            background-color: transparent;
        }

        .testimonial-sec .right-overlay, .testimonial-sec .testimonial-area
        {
            width: 100%;
        }

        .heading
        {
            font-size: 38px;
            text-align: center;
        }

        .text
        {
            font-size: 14px;
        }

        .heading, .text
        {
            color: #0A433E !important;
            font-family: "Poppins", sans-serif;
        }

    </style>

@endsection
