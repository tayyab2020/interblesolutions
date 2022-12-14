@extends('layouts.front')

@section('content')

    <!--SLider sec start-->
    <section class="slider-area">
        
        <div style="display: flex;justify-content: flex-start;align-items: center;" class="bg-overlay">

            <h1 class="container res-con" style="color: white;font-family: 'Poppins';text-align: left;max-width: 95%;padding: 95px 0 0 15px;">
            
                <span class="res-text" style="font-size: 55px;">EXCEPTIONAL</span> <span class="res-text" style="font-weight: 600;font-size: 55px;">BUSINESS </span>
                <br>
                <span class="res-text" style="font-weight: 600;font-size: 55px;">PROCESS OUTSOURCING</span>
                <br>
                <span class="res-text1" style="font-size: 28px;font-weight: 400;margin-top: 20px;">for your company's growth</span>
                <br>
                <a style="padding: 13px 18px;line-height: 1.4;border-radius: 5px;font-weight: 400;font-size: 20px;display: inline-block;margin-top: 30px;" class="btn anim-btn anim-btn1 rounded-pill scroll res-btn" tabindex="0">Get in touch <span></span><span></span><span></span><span></span></a>

            </h1>

        </div>
        
    </section>
    <!--SLider sec End-->

    <section style="display: flex;flex-direction: column;justify-content: flex-start;align-items: center;height: auto;" class="slider-area">

        <div style="background: #ebfffd9e;/*background-image: url('creative-startup/img/network background.png');*/" class="bg-overlay"></div>

        <!--<div style="position: absolute;display: block;margin: 0;top: 60px;" class="row">
            <div style="display: flex;justify-content: center;align-items: center;font-size: 45px;font-family: 'Poppins';font-weight: 700;">
                <span style="height: 45px;border-left: 7px solid #01D464;margin-right: 10px;"></span><span style="color: #30333F;">OUR</span> <span style="color: #01D464;margin-left: 10px;">SERVICES</span>
            </div>
        </div>-->

        <div class="container position-relative second-slider">

            <div class="row">
                <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                            <span style="font-family: 'Poppins';font-weight: 600;font-size: 13px;border: 1px solid black;border-radius: 100px;padding: 3px 18px;color: #0A433E;margin-bottom: 20px;">OUR SERVICES</span>
                            <h4 class="slide-heading">Providing <span>Customer Support</span></h4>
                            <p class="slide-text">We at <b>Interble Solutions</b> We at Interble Solutions aim to provide the finest Business Process Outsourcing (BPO) services to businesses; specializing in Lead Generation, Email/Chat Support and Inbound/Outbound calls!</p>
                            <div class="res-sec" style="display: flex;justify-content: flex-start;width: 100%;"><a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE <span></span><span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                        <span style="font-family: 'Poppins';font-weight: 600;font-size: 13px;border: 1px solid black;border-radius: 100px;padding: 3px 18px;color: #0A433E;margin-bottom: 20px;">OUR SERVICES</span>
                            <h4 class="slide-heading">Professional <span>Resume/CV Writing</span></h4>
                            <p class="slide-text">Providing top-notch Resume Writing Services! <br>
                            Struggling to write the perfect resume? Look no further. Contact us and get your resume written by a professional in affordable rates!</p>
                            <div class="res-sec" style="display: flex;justify-content: flex-start;width: 100%;"><a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE <span></span><span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                    <div class="slider-slide">
                        <div class="slider-inner-content">
                        <span style="font-family: 'Poppins';font-weight: 600;font-size: 13px;border: 1px solid black;border-radius: 100px;padding: 3px 18px;color: #0A433E;margin-bottom: 20px;">OUR SERVICES</span>
                            <h4 class="slide-heading">Building <span>Creative Websites</span></h4>
                            <p class="slide-text">"The internet has gone from a technical wonder to a business must" <br>
                            Don't stay behind and get a website for your business today! <b>Interble Solutions</b> is here to provide you with top-notch Web Designing services.</p>
                            <div class="res-sec" style="display: flex;justify-content: flex-start;width: 100%;"><a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE <span></span><span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                    <div class="img-slide">
                        <img src="creative-startup/img/young-woman-coming-with-energy-innovations.jpg">
                    </div>
                    <div class="img-slide">
                        <img src="creative-startup/img/resume-table-office-business.jpg">
                    </div>
                    <div class="img-slide">
                        <img src="creative-startup/img/professional-developer-programmer-working-software-website-design-coding-technology-writing-codes-database-company-office-global-cyber-connection-technology.jpg">
                    </div>
                </div>
            </div>

            <div class="slider-arrows">
                <a href="javascript:void(0);" class="slider-arr slider-arr-up" id="slider-arr-up"><i class="fas fa-angle-up"></i></a>
                <a href="javascript:void(0);" class="slider-arr slider-arr-down" id="slider-arr-down"><i class="fas fa-angle-down"></i></a>
            </div>

        </div>

    </section>

    <!--About sec start-->
    <!--<section class="about-sec" id="about-sec">

        <div style="max-width: 100%;" class="container">
            <div class="row">
                <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                    <div class="purple-overlay"></div>
                    <div class="row no-gutters wow fadeInLeft">
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <img style="width: 85px;height: 90px;" src="creative-startup/img/Asset 3@4x.png">
                                </div>
                                <h4 class="card-heading">Customer Support</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <img style="width: 85px;height: 90px;" src="creative-startup/img/curriculum.png">
                                </div>
                                <h4 class="card-heading">Resume Writing</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <img style="width: 85px;height: 90px;" src="creative-startup/img/web.png">
                                </div>
                                <h4 class="card-heading">Web Development</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <img style="width: 85px;height: 90px;" src="creative-startup/img/conversation.png">
                                </div>
                                <h4 class="card-heading">Chat Support</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                    <div class="about-content wow fadeInRight">
                        <div class="about-inner-content">
                            <h4 class="heading">WE ARE <span>DIGITAL AGENCY</span></h4>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.  Lorem Ipsum has been the industry???s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.  Lorem Ipsum has been the industry???s standard dummy.
                            </p>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.  Lorem Ipsum has been the industry???s standard dummy.
                            </p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill">LEARN MORE
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--About sec End-->

    <!--Stats sec start-->
    <section style="background-color: #30333F;background-image: url('creative-startup/img/Group 3417.png');background-size: 100% 100%;background-repeat: no-repeat;" class="stats-sec" id="stats-sec">

        <div style="max-width: 95%;" class="container res-guage-con">
            <div class="row">
                <div class="col-12 stats-heading-area text-center">
                    <div class="res-font" style="display: flex;justify-content: center;align-items: center;margin-top: 60px;font-size: 40px;font-weight: 700;font-family: 'Poppins';">
                        <!--<span style="height: 45px;border-left: 7px solid #01D464;margin-right: 10px;"></span>-->
                        <span style="color: #FFFFFF;">OUR</span> <span style="color: #00CFBE;margin-left: 10px;">BPO</span> <span style="color: #FFFFFF;margin-left: 10px;">STATISTICS</span>
                    </div>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 20px;">
                        <span class="res-font1" style="font-weight: 300;color: #FFFFFF;font-family: 'Poppins';font-size: 20px;line-height: 1.2;">Changing the game with our <br> unmatchable productivity rate</span>
                    </div>
                </div>
            </div>
            <div style="padding-top: 50px;" class="row circular-wrap text-center">

                <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    
                    <img style="width: 30%;margin: 50px 0;" src="creative-startup/img/Message.png">
                    <img style="width: 85%;position: relative;top: 1px;" src="creative-startup/img/Asset 1@4x1.png">
                    
                    <div style="background-color: #EBFFFD;height: 50px;position: relative;z-index: 1;width: 100%;" class="row res-guage-sec">
            
                        <div style="max-width: 100%;display: flex;" class="container">
                            <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;visibility: visible;animation-name: undefined;padding: 0;" class="col-12 col-lg-4 wow bounceIn animated">
                                <span style="width: 16%;text-align: right;">0%</span>
                                <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">emails per day</span>
                                <span style="width: 16%;text-align: left;">100%</span>
                            </div>
                        </div>

                    </div>

                </div>

                <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    
                    <img style="width: 30%;margin: 50px 0;" src="creative-startup/img/Calling1.png">
                    <img style="width: 85%;position: relative;top: 1px;" src="creative-startup/img/calls@4x1.png">

                    <div style="background-color: #EBFFFD;height: 50px;position: relative;z-index: 1;width: 100%;" class="row res-guage-sec">
            
                        <div style="max-width: 100%;display: flex;" class="container">
                            <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;visibility: visible;animation-name: undefined;padding: 0;" class="col-12 col-lg-4 wow bounceIn animated">
                                <span style="width: 16%;text-align: right;">0%</span>
                                <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">calls per day</span>
                                <span style="width: 16%;text-align: left;">100%</span>
                            </div>
                        </div>

                    </div>

                </div>

                <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    
                    <img style="width: 30%;margin: 50px 0;" src="creative-startup/img/Chat.png">
                    <img style="width: 85%;position: relative;top: 1px;" src="creative-startup/img/chats@4x1.png">

                    <div style="background-color: #EBFFFD;height: 50px;position: relative;z-index: 1;width: 100%;" class="row res-guage-sec">
            
                        <div style="max-width: 100%;display: flex;" class="container">
                            <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;visibility: visible;animation-name: undefined;padding: 0;" class="col-12 col-lg-4 wow bounceIn animated">
                                <span style="width: 16%;text-align: right;">0%</span>
                                <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">chats per day</span>
                                <span style="width: 16%;text-align: left;">100%</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div style="background-color: #EBFFFD;height: 50px;position: relative;z-index: 1;" class="row res-guage-row">
            
            <div style="max-width: 95%;display: flex;" class="container">
            
                <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    <span style="width: 19%;text-align: right;">0%</span>
                    <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">emails per day</span>
                    <span style="width: 19%;text-align: left;">100%</span>
                </div>
            
                <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    <span style="width: 19%;text-align: right;">0%</span>
                    <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">calls per day</span>
                    <span style="width: 19%;text-align: left;">100%</span>
            
                </div>
                
                <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;" class="col-12 col-lg-4 wow bounceIn">
                    <span style="width: 19%;text-align: right;">0%</span>
                    <span style="font-weight: 600;font-family: 'Poppins';color: #252424;width: 62%;text-align: center;">chats per day</span>
                    <span style="width: 19%;text-align: left;">100%</span>
                </div>

            </div>
            
        </div>

    </section>

    <section class="slider-area" style="padding: 0;height: auto;">

    <div style="/*background-image: url('creative-startup/img/Untitled design (3).png');*/background: white;" class="bg-overlay"></div>

    <div class="res-sec1" style="display: flex;justify-content: center;align-items: center;position: relative;margin-top: 100px;">
        <div class="res-font2" style="font-weight: 700;color: #30333F;font-family: 'Poppins';font-size: 45px;line-height: 1.2;text-align: center;"> 
            <!--<div style="float: left;margin-top: 5px;">
                <span style="height: 45px;border-left: 7px solid #01D464;margin-right: 20px;"></span>
            </div>-->
            CHOOSE THE <span style="color: #00CFBE;">OUTSOURCING</span> <br> SERVICES YOUR NEED!
        </div>
    </div>

        <div style="padding-top: 100px;max-width: 95%;" class="container res-sec2">
            <div style="margin: 0;" class="row circular-wrap text-center">
                
                <div style="display: flex;flex-direction: column;align-items: center;padding: 0 30px;margin-bottom: 30px;" class="col-12 col-lg-4 wow bounceIn res-box">
                    <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 20px;min-width: 65%;width: 100%;">
                        <img style="width: 40px;height: 35px;border-radius: 0;" src="creative-startup/img/headphones1.png">
                        <span style="font-size: 19px;font-family: 'Poppins';color: #30333F;margin-left: 15px;text-align: left;">Customer Support</span>
                    </div>
                    <div style="text-align: left;min-width: 65%;font-family: 'Poppins';color: #30333F;">It is a long established fact that outstanding Customer Support results in better conversion.</div>
                </div>
                
                <div style="display: flex;flex-direction: column;align-items: center;padding: 0 30px;margin-bottom: 30px;" class="col-12 col-lg-4 wow bounceIn res-box">
                    <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 20px;min-width: 65%;width: 100%;">
                        <img style="width: 40px;height: 35px;border-radius: 0;" src="creative-startup/img/curriculum1.png">
                        <span style="font-size: 19px;font-family: 'Poppins';color: #30333F;margin-left: 15px;text-align: left;">Resume/CV Writing</span>
                    </div>
                    <div style="text-align: left;min-width: 65%;font-family: 'Poppins';color: #30333F;">Outsource your Resume Writing to us and we???ll get it done by professionals in affordable rates.</div>
                </div>
                
                <div style="display: flex;flex-direction: column;align-items: center;padding: 0 30px;margin-bottom: 30px;" class="col-12 col-lg-4 wow bounceIn res-box1">
                    <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 20px;min-width: 65%;width: 100%;">
                        <img style="width: 40px;height: 35px;border-radius: 0;" src="creative-startup/img/code1.png">
                        <span style="font-size: 19px;font-family: 'Poppins';color: #30333F;margin-left: 15px;text-align: left;">Website Development</span>
                    </div>
                    <div style="text-align: left;min-width: 65%;font-family: 'Poppins';color: #30333F;">A digital footprint has become a necessity for businesses. Get your Website made today!</div>
                </div>
                
            </div>
            
            <div style="margin: 0;width: 100%;display: flex;justify-content: center;margin-top: 40px;" class="row">
                <a href="#about-sec" class="btn anim-btn rounded-pill scroll" tabindex="0">Get in touch <span></span><span></span><span></span><span></span></a>
            </div>

        </div>
    </section>
    <!--Stats sec End-->

    <!--Team sec start-->
    <!--<section class="team-sec position-relative" id="team-sec">
        <div class="left-overlay"></div>
        <div class="container">
            <div class="row inner-team-sec padding-top padding-bottom">
                <div class="col-12 col-lg-4 text-center text-lg-left">
                    <div class="team-detail wow fadeInLeft">
                        <h4 class="heading">WE HAVE <span>AMAZING TEAM</span></h4>
                        <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.
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
    </section>-->
    <!--Team sec End-->

    <!--portfolio section start-->
    <!--<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
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
    </section>-->
    <!--portfolio section end-->

    <!--testimonial section start-->
    <!--<div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
        <div class="right-overlay"></div>
        <div class="container">
            <div class="testimonial-area padding-top padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div class="testimonial-details wow fadeInLeft">
                                <h4 class="heading">SATISFIED <span>CUSTOMERS</span></h4>
                                <p class="text">
                                    Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.
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
    </div>-->
    <!--testimonial section end-->

    <!--sponsers section start-->
    <!--<div class="sponser-sec padding-top" id="sponser-sec">
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
    </div>-->
    <!--sponsers section end-->

    <!--Blogs section start-->
    <!--<section class="blog-sec" id="blog-sec">
        <div class="left-overlay"></div>
        <div class="container position-relative">
            <div class="blog-inner-overlay"></div>
            <div class="row blog-area">
                <div class="col-12 col-lg-5 d-flex align-items-center text-center text-lg-left">
                    <div class="blog-detail wow fadeInLeft">
                        <h4 class="heading">LATEST <span>DESIGN BLOGS</span></h4>
                        <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry???s standard dummy.
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
    </section>-->
    <!--Blogs section end-->

    <!--Contact section start-->
    <!--<section class="contact-sec padding-top padding-bottom" id="contact-sec">
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
    </section>-->
    <!--Contact section end-->

    <!--colored-lines-->
    <!--<div class="color-lines row no-gutters">
        <div class="col-4 bg-red"></div>
        <div class="col-4 bg-purple"></div>
        <div class="col-4 bg-green"></div>
    </div>-->

    <!--Scroll Top Start-->
    <!--<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>-->
    <!--Scroll Top End-->

    <style>

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

    </style>

@endsection
