@extends('layouts.pastel')
@section('content')
<div class="site-main">
@includeIf('pastel.partials.left-area')
@includeIf('pastel.partials.header')
    <!--================Home Banner Area =================-->
    <section class="banner-area owl-carousel" id="home">
        <div class="single_slide_banner slide_bg1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="banner-content col-lg-12 text-center">
                        <h1>Here’s the Preview of<br>
                            Interior Design Conference of 2019</h1>
                        <a href="#" class="main_btn">Learn more about this</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide_banner slide_bg2  d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="banner-content col-lg-12 text-center">
                        <h1>Here’s the Preview of<br>
                            Interior Design Conference of 2019</h1>
                        <a href="#" class="main_btn">Learn more about this</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide_banner slide_bg3  d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="banner-content col-lg-12 text-center">
                        <h1>Here’s the Preview of<br>
                            Interior Design Conference of 2019</h1>
                        <a href="#" class="main_btn">Learn more about this</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!--================About  Area =================-->
    <section class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-styleBox">
                        <div class="styleBox-border wow bounceInUp">
                            <img class="styleBox-img1" src="{{asset('img/background/about1.jpg')}}" alt="">
                        </div>
                        <div class="styleBox-2">
                            <span>26</span>
                            <p>Years of
                                Awesomeness</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-12 offset-lg-0 col-lg-5 offset-xl-1">
                    <div class="about-content">
                        <span>About Our Company</span>
                        <h4>We’ve been Creating <br>Awesomeness Since 1992 </h4>
                        <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h6>If you are looking at blank cassettes on the web lorem ipsum dolor sit consectetur adipisicing elit, eiusmod tempor incididunt.</h6>

                        <a class="main_btn" href="#">learn more about this</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->



    <!--================ Start Portfolio Area =================-->
    <section class="portfolio_area">
        <div class="container-fluid">
            <div class="area-heading">
                <p>About Our Company</p>
                <h3>Some statistics that we want <br>
                    to show our viewers</h3>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 col-xl-3">
                    <div class="single-portfolio">
                        <img src="{{asset('img/project/1.jpg')}}" alt="">
                        <div class="short_info">
                            <h4><a href="#">Interior Structure</a></h4>
                            <div class="video-icon">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                   data-duration="1.5s" data-delay="0.1s"><img src="{{asset('img/elements/arrow.png')}}" alt="">
                                </a>
                                <p><a href="#">Some statistics that we want<br>
                                        to show our viewers</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-portfolio">
                        <img src="{{asset('img/project/2.jpg')}}" alt="">
                        <div class="short_info">
                            <h4><a href="#">Interior Structure</a></h4>
                            <div class="video-icon">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                   data-duration="1.5s" data-delay="0.1s"><img src="{{asset('img/elements/arrow.png')}}" alt="">
                                </a>
                                <p><a href="#">Some statistics that we want<br>
                                        to show our viewers</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-3">
                    <div class="single-portfolio">
                        <img src="{{asset('img/project/3.jpg')}}" alt="">
                        <div class="short_info">
                            <h4><a href="#">Interior Structure</a></h4>
                            <div class="video-icon">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                   data-duration="1.5s" data-delay="0.1s"><img src="{{asset('img/elements/arrow.png')}}" alt="">
                                </a>
                                <p><a href="#">Some statistics that we want<br>
                                        to show our viewers</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-portfolio">
                        <img src="{{asset('img/project/4.jpg')}}" alt="">
                        <div class="short_info">
                            <h4><a href="#">Interior Structure</a></h4>
                            <div class="video-icon">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                   data-duration="1.5s" data-delay="0.1s"><img src="{{asset('img/elements/arrow.png')}}" alt="">
                                </a>
                                <p><a href="#">Some statistics that we want<br>
                                        to show our viewers</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--================ End Portfolio Area =================-->

    <!--================ Call to action Area =================-->
    <section class="call_to_action">
        <div class="container">
            <div class="row call_to_action_inner">
                <div class="col-md-7">
                    <div class="area-heading">
                        <p>Get a quick response from our team</p>
                        <h3>Get to Know Project Estimate?</h3>
                    </div>
                </div>

                <div class="col-md-5">
                    <a href="#" class="main_btn_2">get a quote now <span><img src="{{asset('img/elements/arrow.png')}}" alt=""></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--================ Call to action Area end=================-->


    <!--================ Start Number Area =================-->
    <section class="number_area ">
        <div class="container">
            <div class="area-heading">
                <p>About Our Company</p>
                <h3>Some statistics that we want <br>
                    to show our viewers</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="single-number d-flex">
                        <div class="icon">
                            <img src="{{asset('img/icon/i1.png')}}" alt="">
                        </div>
                        <div class="inner-box">
                            <h6><span class="counter">258</span>+</h6>
                            <p>projects done</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-number d-flex">
                        <div class="icon">
                            <img src="{{asset('img/icon/i1.png')}}" alt="">
                        </div>
                        <div class="inner-box">
                            <h6><span class="counter">942</span>+</h6>
                            <p>happy clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-number d-flex">
                        <div class="icon">
                            <img src="{{asset('img/icon/i1.png')}}" alt="">
                        </div>
                        <div class="inner-box">
                            <h6><span class="counter">958</span>+</h6>
                            <p>real professionals</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-number d-flex">
                        <div class="icon">
                            <img src="{{asset('img/icon/i1.png')}}" alt="">
                        </div>
                        <div class="inner-box">
                            <h6><span class="counter">2000</span>+</h6>
                            <p>cups of coffe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End number Area =================-->


    <!--================ Start video Area =================-->
    <section class="video_area">
        <div class="video_area_inner">
            <div class="play-icon">
                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><i class="fas fa-play"></i>
                </a>
                <h5>Here’s the Preview of <br >
                    Interior Design Conference of 2019</h5>
            </div>
        </div>
    </section>
    <!--================ End video Area =================-->



    <!--================Service  Area =================-->
    <section class="service-area area-padding">
        <div class="container">
            <div class="row no-gutters">

                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s1.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Flexible working hours</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s2.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Building Construction</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s3.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Building Renovation</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s4.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Building Maintenance</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s5.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Building Maintenance</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/s6.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h5>Building Maintenance</h5>
                            <p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Service Area end =================-->



    <!--================ Testimonial section start =================-->
    <section class="testimonial-area area-padding">
        <div class="container">
            <div class="area-heading">
                <p>About Our Company</p>
                <h3>Some statistics that we want <br>
                    to show our viewers</h3>
            </div>

            <div class="owl-carousel owl-theme testimonial">

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">

                        <div class="media-body">
                            <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                            <img class="testimonial-img" src="{{asset('img/elements/tes1.jpg')}}" alt="">
                            <h4>Manel Djuice</h4>
                            <p class="testi-intro">CEO & Founder</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================ Testimonial section end =================-->



    <!--================ Start Blog Area =================-->
    <section class="blog-area area-padding-bottom">
        <div class="container">
            <div class="area-heading">
                <p>About Our Company</p>
                <h3>Some statistics that we want <br>
                    to show our viewers</h3>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('img/blog/1.jpg')}}" alt="">
                            <div class="meta-top d-flex">
                                <a href="#">Feb 14, 2019</a>
                                <a href="#"> 02 comments</a>
                            </div>
                        </div>
                        <div class="short_details">

                            <a class="d-block" href="single-blog.blade.php">
                                <h4>Some statistics that we want
                                    to show our viewers</h4>
                            </a>
                            <p>If you are looking at blank cassettes
                                on the web lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('img/blog/2.jpg')}}" alt="">
                            <div class="meta-top d-flex">
                                <a href="#">Feb 14, 2019</a>
                                <a href="#"> 02 comments</a>
                            </div>
                        </div>
                        <div class="short_details">

                            <a class="d-block" href="single-blog.blade.php">
                                <h4>Some statistics that we want
                                    to show our viewers</h4>
                            </a>
                            <p>If you are looking at blank cassettes
                                on the web lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('img/blog/3.jpg')}}" alt="">
                            <div class="meta-top d-flex">
                                <a href="#">Feb 14, 2019</a>
                                <a href="#"> 02 comments</a>
                            </div>
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.blade.php">
                                <h4>Some statistics that we want
                                    to show our viewers</h4>
                            </a>
                            <p>If you are looking at blank cassettes
                                on the web lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inci didunt labore dolore magna aliqua.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->
@includeIf('pastel.partials.footer')
</div>
@endsection