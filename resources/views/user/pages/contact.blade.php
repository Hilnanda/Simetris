@extends('user.layouts.app')
@section('title')
    Contact Simetris
@endsection
@section('carousel-title')
Contact
@endsection
@section('carousel-desc')
Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore
@endsection
@section('content-user')
@include('user.includes.parallax')

    <!--========== PAGE LAYOUT ==========-->
    <!-- Contact List -->
    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <!-- Contact List -->
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">{{ $contact_us->contact_us_title }}</a> <span class="text-uppercase margin-l-20"></span></h3>
                        <p>{{ $contact_us->contact_us_address }}</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> {{ $contact_us->contact_us_telp }}</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> {{ $contact_us->contact_us_email }}</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}" alt="Our Office">
                </div>
                
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Contact List -->

    <!-- Google Map -->
    <div class="col-12 mt-5">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe style="width: 100%; height: 400px;" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=simetris%20digital%20agency&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>Our Clients</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                            <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
        </div>
    </div>
    <!-- End Promo Section -->
@endsection