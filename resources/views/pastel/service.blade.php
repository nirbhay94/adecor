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
                      <h2>Service</h2>
                      <p>If you are looking at blank cassettes on the web lorem ipsum<br> dolor sit amet, consectetur.</p>
                  </div>
                  <div class="page_link">
                      <a href="{{route('home')}}">Home</a>
                      <a href="{{route('contact')}}">Service</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Service  Area =================-->
  <section class="service-area area-padding light-version">
    <div class="container">
        <div class="area-heading">
            <p>About Our Company</p>
            <h3>Some statistics that we want <br>
            to show our viewers</h3>      
        </div>
        <div class="row no-gutters">

            <!-- Single service -->
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="img/icon/s1.png" alt="">
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
                        <img src="img/icon/s2.png" alt="">
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
                        <img src="img/icon/s3.png" alt="">
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
                        <img src="img/icon/s4.png" alt="">
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
                        <img src="img/icon/s5.png" alt="">
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
                        <img src="img/icon/s6.png" alt="">
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




<!--================ Testimonial section start =================-->
<section class="testimonial-area area-padding-bottom">
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