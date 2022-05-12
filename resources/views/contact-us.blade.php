@extends('layouts.front')

@section('content')

    <div style="height: auto;padding: 0;" class="slider-area testimonial-sec position-relative" id="testimonial-sec">
        <div style="padding: 0;max-width: 100%;" class="container">
            <div class="testimonial-area padding-bottom">
                <div style="padding-top: 220px;" class="container testimonial-area-child">

                    <div style="margin: 0;" class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="heading">CONTACT US <span class="text">Get In Touch With <b>Interble Solutions</b> Support Team</span></h4>
                        </div>
                    </div>

                    <div style="margin: 0;" class="row">
                        <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div style="background-color: white;border-radius: 10px;padding: 30px;" class="col-lg-11 col-md-11 col-sm-12 col-xs-12">

                                <h3 style="color: #0A433E;font-family: 'Poppins', sans-serif;font-weight: 600;">Hello Interble Solutions,</h3>

                                <div style="padding: 0;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <span style="color: #0A433E;font-size: 18px;font-family: 'Poppins', sans-serif;">My name is</span>

                                    <div style="padding: 0;display: flex;justify-content: space-between;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <input style="width: 48%;" class="text-fields" required placeholder="First Name*" type="text" name="first_name">
                                        <input style="width: 48%;" class="text-fields" required placeholder="Last Name*" type="text" name="last_name">

                                    </div>

                                    <span style="color: #0A433E;font-size: 18px;font-family: 'Poppins', sans-serif;">I’m interested in learning more about</span>

                                    <div style="display: flex;flex-direction: column;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Resume/CV Writing Services</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Customer Support</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Lead Generation Services</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Inbound/Outbound Call Center Services</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Email Support</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Chat Support</span>
                                        </label>

                                        <label style="display: flex;align-items: center;">
                                            <input name="interest" style="margin: 0;" type="checkbox">
                                            <span style="margin-left: 5px;color: #0A433E;font-family: 'Poppins', sans-serif;font-size: 14px;">Website Development Services</span>
                                        </label>

                                    </div>

                                    <span style="color: #0A433E;font-size: 18px;font-family: 'Poppins', sans-serif;margin-top: 10px;">To help my company,</span>

                                    <div style="padding: 0;display: flex;justify-content: space-between;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <input style="width: 48%;" class="text-fields" required placeholder="Company Name*" type="text" name="company_name">

                                    </div>

                                    <div style="padding: 0;display: flex;justify-content: space-between;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <textarea style="width: 100%;border: 1px solid #0A433E;resize: vertical;" rows="8" placeholder="Message*" name="message" required></textarea>

                                    </div>

                                    <span style="color: #0A433E;font-size: 18px;font-family: 'Poppins', sans-serif;margin-top: 10px;">Please contact me at</span>

                                    <div style="padding: 0;display: flex;justify-content: space-between;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <input style="width: 48%;" class="text-fields" required placeholder="Phone Number*" type="text" name="phone">
                                        <input style="width: 48%;" class="text-fields" required placeholder="Email Address*" type="email" name="email">

                                    </div>

                                    <div style="padding: 0;display: flex;justify-content: space-between;margin-top: 10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <button style="padding: 10px 15px;background: #0A433E;color: white;border-radius: 3px;border: 0;">Submit</button>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-4 movediv">

                            <div style="background-color: white;border-radius: 10px;padding: 30px;height: 48%;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <h3 style="color: #0A433E;font-family: 'Poppins', sans-serif;font-weight: 600;display: flex;flex-direction: column;align-items: center;">FAQs <span style="font-size: 15px;font-weight: 500;margin-top: 10px;">Any questions?</span></h3>

                            </div>

                            <div style="background-color: white;border-radius: 10px;padding: 30px;height: 48%;margin-top: 20px;display: flex;flex-flow: wrap;align-items: center;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex;align-items: center;">

                                    <img style="width: 100px;height: 100px;" src="{{url("creative-startup/img/Vector.png")}}">
                                    <span style="font-size: 20px;margin-left: 20px;color: #0A433E;font-family: 'Poppins', sans-serif;">(805) 354 5622 <br> (888) 223 4567</span>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex;align-items: center;">

                                    <img style="width: 80px;height: 60px;" src="{{url("creative-startup/img/Vector (1).png")}}">
                                    <span style="font-size: 15px;margin-left: 20px;color: #0A433E;font-family: 'Poppins', sans-serif;">info@interblesolutions.com <br> res <br> cs <br> web</span>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex;align-items: center;">

                                    <img style="width: 75px;height: 90px;" src="{{url("creative-startup/img/Group.png")}}">
                                    <span style="font-size: 20px;margin-left: 20px;color: #0A433E;font-family: 'Poppins', sans-serif;">1234 Marion Street <br> HOUSTON, TX 77200</span>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <style>

        .text-fields
        {
            border: 1px solid #0A433E;
            height: 45px;
        }

        .sidemenu_btn span
        {
            background: black !important;
        }

        .our-clients
        {
            width: 80%;
        }

        .sec-logo
        {
            display: none;
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
            background-image: url("creative-startup/img/Group 123.jpg");
            background-size: 100%;
            opacity: 1;
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
            font-size: 18px;
            margin-top: 10px;
        }

        .heading, .text
        {
            color: white !important;
            font-family: system-ui;
        }

    </style>

@endsection
