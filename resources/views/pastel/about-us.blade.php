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
                      <h2>About Us</h2>
                      <p>If you are looking at blank cassettes on the web lorem ipsum<br> dolor sit amet, consectetur.</p>
                  </div>
                  <div class="page_link">
                      <a href="{{route('home')}}">Home</a>
                      <a href="{{route('contact')}}">About Us</a>
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
                    <div class="styleBox-border">
                        <img class="styleBox-img1" src="img/background/about1.jpg" alt="">
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
                        <img src="img/icon/i1.png" alt="">
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
                        <img src="img/icon/i1.png" alt="">
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
                        <img src="img/icon/i1.png" alt="">
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
                        <img src="img/icon/i1.png" alt="">
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