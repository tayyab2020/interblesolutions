@extends('layouts.front')

@section('content')

    <!--SLider sec start-->
    <section class="slider-area">
        
        <div style="display: flex;justify-content: flex-start;align-items: center;" class="bg-overlay">

            <h1 class="container res-con" style="color: #0A433E;font-family: 'Poppins';text-align: left;max-width: 95%;padding: 95px 0 0 15px;">
            
                <span class="res-text" style="font-size: 55px;">Grow more by outsourcing your</span>
                <br>
                <span class="res-text" style="font-size: 55px;">Resume Writing work to us!</span>
                <br>
                <a style="padding: 13px 18px;line-height: 1.4;border-radius: 5px;font-weight: 400;font-size: 20px;display: inline-block;margin-top: 30px;" class="btn anim-btn2 anim-btn3 rounded-pill scroll res-btn" tabindex="0">Read More <span></span><span></span><span></span><span></span></a>

            </h1>

        </div>
        
    </section>
    <!--SLider sec End-->

    <section style="display: flex;flex-direction: column;justify-content: flex-start;align-items: center;height: 500px;">

        <div class="row">
            <div class="col-12 stats-heading-area text-center">
                <div class="res-font" style="display: flex;justify-content: center;flex-direction: column;align-items: center;margin-top: 60px;font-size: 32px;font-weight: 700;line-height: 1.3;">
                    <!--<span style="height: 45px;border-left: 7px solid #01D464;margin-right: 10px;"></span>-->
                    <span style="color: #0A433E;">BENEFITS OF OUTSOURCING</span>
                    <span style="color: #00CFBE;">CUSTOMER SUPPORT</span>
                </div>
            </div>
        </div>

    </section>

    <style>

        .anim-btn3
        {
            background: #0A433E !important;
            color: white !important;
            text-transform: none !important;
        }

        .anim-btn3:hover
        {
            color: black !important;
        }

        .anim-btn2
        {
            background-color: #00CFBE;
            color: #FFFFFF;
            font-weight: 700;
            font-size: 13px;
            font-family: 'Poppins';
            font-style: normal;
            border: none !important;
            padding: 10px 25px;
            border-radius: 4px !important;
        }

        .anim-btn2 span
        {
            position: absolute;
            width: 25%;
            height: 100%;
            background: #FFFFFF;
            transform: translateY(150%);
            border-radius: 50%;
            transition: 0.5s;
            z-index: -1;
        }

        .anim-btn2 span:nth-child(1)
        {
            left: calc((1 - 1) * 25%);
            transition-delay: calc((1 - 1) * 0.1s);
        }

        .anim-btn2 span:nth-child(2)
        {
            left: calc((2 - 1) * 25%);
            transition-delay: calc((2 - 1) * 0.1s);
        }

        .anim-btn2 span:nth-child(3)
        {
            left: calc((3 - 1) * 25%);
            transition-delay: calc((3 - 1) * 0.1s);
        }

        .anim-btn2 span:nth-child(4)
        {
            left: calc((4 - 1) * 25%);
            transition-delay: calc((4 - 1) * 0.1s);
        }

        .anim-btn2:hover span
        {
            transform: translateY(0) scale(3.15);
        }

        .res-guage-sec
        {
            display: none;
        }

        @media (max-width: 992px){

            .res-guage-row
            {
                display: none;
            }

            .res-guage-con
            {
                max-width: 100% !important;
                padding: 0;
            }

            .res-guage-sec
            {
                display: flex;
            }

            .res-text
            {
                font-size: 40px !important;
            }

            .res-text1
            {
                font-size: 22px !important;
            }

            .res-con
            {
                padding: 50px 0 0 15px !important;
            }

            .res-btn
            {
                font-size: 17px !important;
            }

            .res-sec
            {
                justify-content: center !important;
            }

            .res-font
            {
                font-size: 30px !important;
            }

            .res-font1
            {
                font-size: 17px !important;
            }

            .res-sec1
            {
                margin-top: 70px !important;
            }

            .res-font2
            {
                font-size: 22px !important;
            }

            .res-sec2
            {
                padding-top: 70px !important;
                padding-bottom: 50px !important;
            }

            .res-box
            {
                margin-bottom: 50px !important;
            }

            .res-box1
            {
                margin-bottom: 0 !important;
            }

            .res-box div, .res-box1 div
            {
                margin-bottom: 10px !important;
            }

        }

        .slider-area .bg-overlay
        {
            width: 100%;
        }

        .slider-area
        {
            margin-top: 0 !important;
        }

        .slider-area .bg-overlay
        {
            background-image: url("creative-startup/img/Group 1245.png") !important;
        }

        .main-logo
        {
            display: none;
        }

        .sec-logo
        {
            display: inline-block !important;
        }

        header .main-navigation nav .navbar-nav .nav-item .nav-link, .dropbtn
        {
            color: #0A433E !important;
        }

        .top-personal-info li
        {
            background: #0A433E !important;
            color: #ffff !important;
        }

    </style>

@endsection
