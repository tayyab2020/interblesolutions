@extends('layouts.front')

@section('content')

    <div class="slider-area testimonial-sec position-relative" id="testimonial-sec">
        <div style="padding: 0;max-width: 100%;" class="container">
            <div class="testimonial-area padding-bottom">
                <div style="max-width: 80%;" class="container">
                    <div style="margin: 0;" class="row">
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div class="testimonial-details wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <h4 class="heading">About</h4>
                                <p class="text">
                                    At Interble solutions, we provide businesses with the opportunity to stay one step ahead of the competition through operational focus and time flexibility. We drive business growth through client retention and diversification, providing opportunities of global expansion. Our aim is to provide excellence through technology, analytics and research oriented methods that drives a business to focus on their core competencies and management.
                                    <br>
                                    We are primarily a BPO solutions provider, helping businesses achieve their goals through versatility and cost structure effectiveness. We enable businesses to achieve better product orientation and service provision through cutting edge solutions, meeting the company's data and infrastructure needs, transforming their applications and helping achieve excellence in all aspects. We at Interble Solutions have an unwavering commitment to meet the needs of a business, making them shape their character, culture and redefining them in terms of a modern enterprise. Our plethora of services include customer support, lead generation, email and chat support as well as web development and resume writing. We envision excellence by aiming to improve your business through dedication and an unwavering commitment to achieve sustained business growth over the long term. We drive your business forward through performance sustainability, and ingenuity. Work with us to create a positive and long lasting change.
                                </p>
                            </div>
                        </div>
                        <div style="display: flex;align-items: center;" class="col-12 col-lg-6">
                            <div style="display: flex;flex-direction: column;align-items: flex-end;text-align: right;">
                                <div id="movediv" class="image-cropper wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                                    <img src="https://via.placeholder.com/150" />
                                </div>
                                <blockquote style="margin: 25px 0 0 0;">Never have I seen such bald and shameless attempts at garnering an audiences' approval through frosted deliciousness.</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
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
            color: white;
        }
        .slider-area
        {
            margin-top: 0 !important;
        }
        .image-cropper {
            width: 400px;
            height: 400px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        img {
            display: inline;
            margin: 0 auto;
            height: 100%;
            width: auto;
        }

        .testimonial-sec .right-overlay, .testimonial-sec .testimonial-area
        {
            background-image: url("creative-startup/img/Untitled design.png");
            background-size: 100%;
            width: 100%;
        }
    </style>

@endsection
