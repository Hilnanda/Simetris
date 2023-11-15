@extends('user.layouts.app')
@section('title')
    Article Simetris
@endsection
@section('carousel-title')
    Article
@endsection
@section('carousel-desc')
Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore
@endsection
@section('content-user')
@include('user.includes.parallax')

    <!--========== PAGE LAYOUT ==========-->
    <!-- Our Exceptional Solutions -->
    <div class="container-fluid" style="margin-top: -40px;padding:80px">
        <div class="row">
            <div class="col-md-6">
                {{-- <h2>About</h2> --}}
                <ol class="breadcrumb" style="background-color: white">
                    <li class="breadcrumb-item"><a href="#">SimeNews</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                  </ol>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <div class="col-md-8">
                <!-- Our Exceptional Solutions -->
            @foreach ($article as $item)    
            <div class="col-sm-4 sm-margin-b-50" style="margin-bottom: 20px">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" style="max-width: 350px;border-radius: 5px" src="{{ asset('image/article/' . $item->article_image . '') }}" alt="Latest Products Image">
                    </div>
                </div>
                <h4><a href="/detail/{{ $item->id }}">{{ $item->article_title }}</a> <span
                        class="text-uppercase margin-l-20">{{ $item->category->category_name }}</span></h4>
                @if (strlen($item->article_desc) < 100)
                    <p>{!! $item->article_desc !!}</p>
                @else
                    <p>{!! substr($item->article_desc, 0, 100) . '.....' !!}</p>
                @endif
                <a class="link" href="/detail/{{ $item->id }}">Read More</a>
            </div>
            @endforeach
            <!-- End Our Exceptional Solutions -->
            </div>
            <div class="col-md-4">
                    <h3>Recent Post</h3>
                    <hr>
                    @foreach ($recent_article as $item)
                    <div class="row">
                        <a href="/detail/{{ $item->id }}">
                        <div class="col-sm-4">
                            <img class="img-responsive" style="max-width: 170px;border-radius: 5px" src="{{ asset('image/article/' . $item->article_image . '') }}" alt="Our Office">
                        </div>
                        <div class="col-sm-8">
                            <h5>{{ $item->article_title }}</h5>
                            <p style="margin-top: -5px">{{ date('l, d M Y H:i', strtotime($item->created_at)) }} WIB</p>
                        </div>
                    </a>
                    </div>
                    <hr>
                    @endforeach
            </div>

    
        </div>
        
    </div>
    <!-- End Our Exceptional Solutions -->

    <!-- Clients -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <!-- Swiper Clients -->
            <div class="swiper-slider swiper-clients">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                    </div>
                </div>
                <!-- End Swiper Wrapper -->
            </div>
            <!-- End Swiper Clients -->
        </div>
    </div>
    <!-- End Clients -->

    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>Our Clients</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret
                                dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur
                                adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam
                                exercitation</p>
                            <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore
                                magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
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
