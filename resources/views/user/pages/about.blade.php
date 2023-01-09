@extends('user.layouts.app')
@section('title')
    About Us Simetris
@endsection
@section('carousel-title')
    About Us
@endsection
@section('carousel-desc')
    Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim estudiat veniam siad venumus dolore
@endsection
@section('content-user')
    @include('user.includes.parallax')

    <!--========== PAGE LAYOUT ==========-->
    <!-- Features -->
    {{-- <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Art Of Coding</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <h3>Clean Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h3>Amazing Support</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div> --}}
    <!-- End Features -->

    <!-- About -->
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                {{-- <h2>About</h2> --}}
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <p>{!! $about_us->about_us_desc !!}</p>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <img class="img-responsive" src="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}" alt="Our Office">
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End About -->

    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                @foreach ($feature as $item)
                    <div class="col-sm-4 sm-margin-b-2" style="margin-bottom: 20px">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                
                                <div class="service-info">
                                    <div>
                                        {!! $item->feature_icon !!}
                                    </div>
                                    <h3>{{ $item->feature_title }}</h3>
                                    <p class="margin-b-5">{!! $item->feature_desc !!}
                                    </p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--// end row -->

            <!--// end row -->
        </div>
    </div>
    <!-- End Service -->

    <!-- Testimonials -->
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Notes From CEO</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret
                                    dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad
                                    minim enum esqudiat dolore.
                                </div>
                                <div class="margin-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret
                                    tempor incididunt dolore magna consequat siad minim aliqua.
                                </div>
                                <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="margin-b-20">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.
                                </div>
                                <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->

    <!-- Team -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Meet the Team</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna
                        aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Team -->
                @foreach ($team as $item)
                    <div class="col-sm-4 sm-margin-b-50" style="margin-bottom: 20px">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="{{ asset('image/team/' . $item->team_image . '') }}" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">{{ $item->team_name }}</a> <span
                                class="text-uppercase margin-l-20">{{ $item->team_posisi }}</span></h4>
                        @if (strlen($item->team_desc) < 100)
                            <p>{!! $item->team_desc !!}</p>
                        @else
                            <p>{!! substr($item->team_desc, 0, 100) . '.....' !!}</p>
                        @endif
                        <a class="link" href="#">Read More</a>
                    </div>
                @endforeach

                <!-- End Team -->


            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Team -->
@endsection
