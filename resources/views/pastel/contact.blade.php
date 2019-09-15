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
              <h2>Contact us</h2>
              <p>End-to-end solutions for new homes & renovation projects.</p>
            </div>
            <div class="page_link">
              <a href="{{route('home')}}">Home</a>
              <a href="{{route('contact')}}">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = {lat: -25.363, lng: 131.044};
                        var grayStyles = [
                        {
                            featureType: "all",
                            stylers: [
                            { saturation: -90 },
                            { lightness: 50 }
                            ]
                        },
                        {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: 19.182755, lng: 72.840157},
                            zoom: 15,
                            // styles: grayStyles,
                            scrollwheel:  false
                        });
                    }

                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API_KEY','AIzaSyCn-Th6NLN4zlwPIIjipYvG5keX3XdBQ9s')}}&callback=initMap"></script>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea required class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input required class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Send Message</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>B-29/30, Malad Yojna</h3>
                            <h3>Opp. New Era Talkies, S.V. Road</h3>
                            <p>Malad West, Mumbai - 64</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:9833397737">9833397737</a></h3>
                            <h3><a href="tel:9833397742">9833397742</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:adecordesigner@gmail.com">adecordesigner@gmail.com</a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    @include('pastel.partials.footer')

</div>
    @include('pastel.partials.success-error-modals')
@endsection