@extends('layouts.pastel')
@section('content')
    <div class="site-main">
    @includeIf('pastel.partials.left-area')
    @includeIf('pastel.partials.header')
            <!--================Home Banner Area =================-->
            <section class="banner_area">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div
                        class="banner_content d-md-flex justify-content-between align-items-center"
                        >
                        <div class="mb-3 mb-md-0">
                            <h2>Projects</h2>
                            <p>If you are looking at blank cassettes on the web lorem ipsum<br> dolor sit amet, consectetur.</p>
                        </div>
                        <div class="page_link">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('contact')}}">Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->




        <!--================ Start Portfolio Area =================-->
        <section class="portfolio_area area-padding-top" id="portfolio">
            <div class="container-fluid">
                <div class="area-heading">
                    <p>About Our Company</p>
                    <h3>Some statistics that we want <br>
                    to show our viewers</h3>      
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6 col-xl-3">
                        <div class="single-portfolio">
                            <img src="img/project/1.jpg" alt="">
                            <div class="short_info">
                                <h4>Interior Structure</h4>
                                <div class="video-icon">
                                    <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                    data-duration="1.5s" data-delay="0.1s"><img src="img/elements/arrow.png" alt="">
                                </a>
                                <p>Some statistics that we want<br>
                                to show our viewers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="single-portfolio">
                        <img src="img/project/2.jpg" alt="">
                        <div class="short_info">
                            <h4>Interior Structure</h4>
                            <div class="video-icon">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                                data-duration="1.5s" data-delay="0.1s"><img src="img/elements/arrow.png" alt="">
                            </a>
                            <p>Some statistics that we want<br>
                            to show our viewers</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="single-portfolio">
                    <img src="img/project/3.jpg" alt="">
                    <div class="short_info">
                        <h4>Interior Structure</h4>
                        <div class="video-icon">
                            <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                            data-duration="1.5s" data-delay="0.1s"><img src="img/elements/arrow.png" alt="">
                        </a>
                        <p>Some statistics that we want<br>
                        to show our viewers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="single-portfolio">
                <img src="img/project/4.jpg" alt="">
                <div class="short_info">
                    <h4>Interior Structure</h4>
                    <div class="video-icon">
                        <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=MrRvX5I8PyY" data-animate="zoomIn"
                        data-duration="1.5s" data-delay="0.1s"><img src="img/elements/arrow.png" alt="">
                    </a>
                    <p>Some statistics that we want<br>
                    to show our viewers</p>
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
                <a href="#" class="main_btn_2">get a quote now <span><img src="img/elements/arrow.png" alt=""></span></a>
            </div>
        </div>
    </div>
</section>
<!--================ Call to action Area end=================-->








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
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="media">

                    <div class="media-body">
                        <p>“If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt amet.”</p>
                        <img class="testimonial-img" src="img/elements/tes1.jpg" alt="">
                        <h4>Manel Djuice</h4>
                        <p class="testi-intro">CEO & Founder</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================ Testimonial section end =================-->
@includeIf('pastel.partials.footer')
</div>
@endsection