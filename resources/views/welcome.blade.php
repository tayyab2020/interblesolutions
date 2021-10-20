@extends('layouts.front')

@section('content')

    <!--SLider sec start-->
    <section class="slider-area">
        <div style="width: 100%;box-shadow: rgb(0 0 0 / 35%) 0px 0px 14px 3px;display: flex;z-index: 100;position: relative;"></div>
        <div class="bg-overlay"></div>
        <div class="container position-relative">
            <div class="inner-bg-overlay"></div>
            <div class="row">
                <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                            <h4 class="slide-heading">Providing <span>Business Solutions</span></h4>
                            <p class="slide-text">We at Interble Solutions aim to provide the finest Business Process Outsourcing (BPO) services to businesses; specializing in Lead Generation, Email/Chat Support and Customer Care!</p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                            <h4 class="slide-heading">Professional <span>Resume/CV Writing</span></h4>
                            <p class="slide-text">Providing top-notch Resume Writing Services! <br> Struggling to write the perfect resume? Look no further. Contact us and get your resume written by a professional!</p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                            <h4 class="slide-heading">Building <span>Creative Websites</span></h4>
                            <p class="slide-text">"The internet has gone from a technical wonder to business must" Don't stay behind and get a website for your business today! Interble Solutions is here to provide you with top-notch Web Designing services.</p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                    <div class="img-slide">
                        <img src="creative-startup/img/businesswoman-call-center-office.jpg">
                    </div>
                    <div class="img-slide">
                        <img src="creative-startup/img/businessman-resume.jpg">
                    </div>
                    <div class="img-slide">
                        <img src="creative-startup/img/web-design-internet-website-responsive-software-concept.jpg">
                    </div>
                </div>
            </div>
            <div class="slider-arrows">
                <a href="javascript:void(0);" class="slider-arr slider-arr-up" id="slider-arr-up"><i class="fas fa-angle-up"></i></a>
                <a href="javascript:void(0);" class="slider-arr slider-arr-down" id="slider-arr-down"><i class="fas fa-angle-down"></i></a>
            </div>
        </div>
    </section>
    <!--SLider sec End-->

    <!--About sec start-->
    <section class="about-sec" id="about-sec">

        <div style="max-width: 100%;" class="container">
            <div class="row">
                <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                    <div class="purple-overlay"></div>
                    <div class="row no-gutters wow fadeInLeft">
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-briefcase"></i>
                                </div>
                                <h4 class="card-heading">Make Business</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-bulb"></i>
                                </div>
                                <h4 class="card-heading">Agency Ideas</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-heart"></i>
                                </div>
                                <h4 class="card-heading">Our Hardwork</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="las la-wallet"></i>
                                </div>
                                <h4 class="card-heading">Make Money</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                    <div class="about-content wow fadeInRight">
                        <div class="about-inner-content">
                            <h4 class="heading">WE ARE <span>DIGITAL AGENCY</span></h4>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill">LEARN MORE
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About sec End-->

    <!--Stats sec start-->
    <section class="stats-sec padding-top padding-bottom" id="stats-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 stats-heading-area text-center">
                    <span class="sub-heading">Lorem ipsum is simply dummy text </span>
                    <h4 class="heading">AGENCY STATS & FACTS</h4>
                    <p class="text">
                        Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting.
                    </p>
                </div>
            </div>
            <div class="row circular-wrap text-center">
                <div class="col-12 col-lg-4 wow bounceIn">
                    <div id="circle" class="circle" data-value="0.77">
                        <h6 class="counter-num">257%</h6>
                    </div>
                    <h4 class="darkcolor">Increase in Sales year on year</h4>
                </div>
                <div class="col-12 col-lg-4 wow bounceIn">
                    <div id="circletwo" class="circle" data-value="0.96">
                        <h6 class="counter-num">96%</h6>
                    </div>
                    <h4 class="darkcolor">Recommendation rate over the year</h4>
                </div>
                <div class="col-12 col-lg-4 wow bounceIn">
                    <div id="circlethree" class="circle" data-value="0.75">
                        <h6 class="counter-num">317%</h6>
                    </div>
                    <h4 class="darkcolor">New ventures we became part of</h4>
                </div>
            </div>
        </div>
    </section>
    <!--Stats sec End-->

    <!--Team sec start-->
    <section class="team-sec position-relative" id="team-sec">
        <div class="left-overlay"></div>
        <div class="container">
            <div class="row inner-team-sec padding-top padding-bottom">
                <div class="col-12 col-lg-4 text-center text-lg-left">
                    <div class="team-detail wow fadeInLeft">
                        <h4 class="heading">WE HAVE <span>AMAZING TEAM</span></h4>
                        <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="team-area wow fadeInRight">
                        <div class="row no-gutters team-carousel owl-carousel owl-theme">
                            <div class="item text-center">
                                <div class="team-box">
                                    <div class="img-holder position-relative">
                                        <img src="creative-startup/img/team1.jpg">
                                        <div class="overlay d-flex justify-content-center align-items-center">
                                            <!--Team Social-->
                                            <ul class="team-social">
                                                <li><a class="facebook-text-hvr" href="javascript:void(0);"><i class="lab la-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a class="twitter-text-hvr" href="javascript:void(0);"><i class="lab la-twitter" aria-hidden="true"></i></a></li>
                                                <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="lab la-instagram" aria-hidden="true"></i></a></li>
                                                <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="lab la-pinterest-p" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">Eden Wooderburg</h4>
                                        <p class="team-designation">Creative Head</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="team-box">
                                    <div class="img-holder position-relative">
                                        <img src="creative-startup/img/team2.jpg">
                                        <div class="overlay d-flex justify-content-center align-items-center">
                                            <!--Team Social-->
                                            <ul class="team-social">
                                                <li><a class="facebook-text-hvr" href="javascript:void(0);"><i class="lab la-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a class="twitter-text-hvr" href="javascript:void(0);"><i class="lab la-twitter" aria-hidden="true"></i></a></li>
                                                <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="lab la-instagram" aria-hidden="true"></i></a></li>
                                                <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="lab la-pinterest-p" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">Angelo Walking</h4>
                                        <p class="team-designation">Design Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="javascript:void(0);" class="team-nav team-prev" id="team-prev">
                            <i class="fas fa-angle-left"></i>
                        </a>
                        <a href="javascript:void(0);" class="team-nav team-next" id="team-next">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team sec End-->

    <!--portfolio section start-->
    <section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                        <h4 class="heading">OUR <span>AMAZING PORTFOLIO</span></h4>
                    </div>
                    <div class="col-md-12 pt-5">
                        <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> ALL</div>
                            <div data-filter=".web" class="cbp-filter-item">WEB DESIGN</div>
                            <div data-filter=".logo" class="cbp-filter-item">LOGO DESIGN</div>
                            <div data-filter=".mobile" class="cbp-filter-item">MOBILE APP</div>
                            <div data-filter=".development" class="cbp-filter-item">DEVELOPMENT</div>
                        </div>

                        <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                            <div class="cbp-item web logo">
                                <a href="creative-startup/img/p1.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="creative-startup/img/p1.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Creative</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="cbp-item mobile web">
                                <a href="creative-startup/img/p2.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="creative-startup/img/p2.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Web Design</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="cbp-item print logo development web mobile">
                                <a href="creative-startup/img/p3.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="creative-startup/img/p3.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Logo Design</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="cbp-item logo development">
                                <a href="creative-startup/img/p4.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="creative-startup/img/p4.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Development</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                        <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button text-data wow fadeInUp" data-wow-delay="650ms">
                            <div class="row portfolio-foot-detail text-data-inner">
                                <div class="col-7 col-lg-4 offset-lg-6 text-left pl-4">
                                    <span class="p-text">We've Completed More Then</span>
                                    <h4 class="p-num">530</h4>
                                    <span class="p-text">Projects for Our amazing Clients</span>
                                </div>
                                <div class="col-5 col-lg-2 d-flex justify-content-end align-items-center"><button class="btn green-btn rounded-pill">VIEW ALL<span></span><span></span><span></span><span></span></button> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--portfolio section end-->

    <!--testimonial section start-->
    <div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
        <div class="right-overlay"></div>
        <div class="container">
            <div class="testimonial-area padding-top padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div class="testimonial-details wow fadeInLeft">
                                <h4 class="heading">SATISFIED <span>CUSTOMERS</span></h4>
                                <p class="text">
                                    Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <div class="testimonial-carousel wow fadeInRight">
                                <div class="testimonial-box owl-carousel owl-theme">
                                    <div class="item text-center">
                                        <div class="icon-holder">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                        </p>
                                        <div class="img-holder">
                                            <img src="creative-startup/img/test1.jpg">
                                        </div>
                                        <h4 class="user-name">Sara Williams</h4>
                                    </div>
                                    <div class="item text-center">
                                        <div class="icon-holder">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                        </p>
                                        <div class="img-holder">
                                            <img src="creative-startup/img/test2.jpg">
                                        </div>
                                        <h4 class="user-name">Julia Miltese</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial section end-->

    <!--sponsers section start-->
    <div class="sponser-sec padding-top" id="sponser-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponser-tags owl-carousel owl-theme">
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                        <div class="item">
                            <img src="creative-startup/img/brand4.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sponsers section end-->

    <!--Blogs section start-->
    <section class="blog-sec" id="blog-sec">
        <div class="left-overlay"></div>
        <div class="container position-relative">
            <div class="blog-inner-overlay"></div>
            <div class="row blog-area">
                <div class="col-12 col-lg-5 d-flex align-items-center text-center text-lg-left">
                    <div class="blog-detail wow fadeInLeft">
                        <h4 class="heading">LATEST <span>DESIGN BLOGS</span></h4>
                        <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                        </p>
                        <a class="btn anim-btn rounded-pill" href="creative-startup/standard-blog.html">LEARN MORE
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="blog-img wow fadeInRight">
                        <img src="creative-startup/img/blog1.png" alt="blog-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs section end-->

    <!--Contact section start-->
    <section class="contact-sec padding-top padding-bottom" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h4 class="heading text-center text-lg-left">GET IN TOUCH</h4>
                    <form class="row contact-form wow fadeInLeft" id="contact-form-data">
                        <div class="col-sm-12" id="result"></div>
                        <div class="col-12 col-md-5">
                            <input type="text" name="userName" placeholder="Your Name" class="form-control">
                            <input type="email" name="userEmail" placeholder="Email Address *" class="form-control">
                            <input type="text" name="userSubject" placeholder="Subject" class="form-control">
                        </div>
                        <div class="col-12 col-md-7">
                            <textarea class="form-control" name="userMessage" placeholder="Your Message" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <a href="javascript:void(0);" class="btn purple-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i>Send Message
                                <span></span><span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                    <div class="contact-details wow fadeInRight">
                        <h4 class="heading">OUR LOCATION</h4>
                        <p class="text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered .
                        </p>
                        <ul>
                            <li><i class="las la-map-marker addr"></i>123 Park Avenue, New York, United States </li>
                            <li><i class="las la-phone-volume phone"></i>
                                <span>+1 631 1234 5678</span>
                                <span>+1 631 1234 5678</span>
                            </li>
                            <li><i class="las la-paper-plane email"></i>email@website.com</li>
                        </ul>
                    </div>
                    <img src="creative-startup/img/contact-background.png" class="contact-background" alt="contact">
                </div>
            </div>
        </div>
    </section>
    <!--Contact section end-->

    <!--colored-lines-->
    <div class="color-lines row no-gutters">
        <div class="col-4 bg-red"></div>
        <div class="col-4 bg-purple"></div>
        <div class="col-4 bg-green"></div>
    </div>

    <!--Scroll Top Start-->
    <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
    <!--Scroll Top End-->

    <style>

        .slider-area .bg-overlay
        {
            width: 100%;
        }

        .slider-area
        {
            margin-top: 0 !important;
        }

    </style>

@endsection
