@extends('user.layouts.app')
@section('title')
    Detail Simetris
@endsection
@section('carousel-title')
    SimeNews
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
    <div class="content-lg container" style="margin-top: -75px">
        <div class="row">
            <div class="col-md-6">
                {{-- <h2>About</h2> --}}
                <ol class="breadcrumb" style="background-color: white">
                    <li class="breadcrumb-item"><a href="#">SimeNews</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->category->category_name }}</li>
                  </ol>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <div class="col-md-7 md-margin-b-50">
                <h2>{{ $article->article_title }}</h2>
                <p>{{ date('l, d M Y H:i', strtotime($article->created_at)) }} WIB</p>
                <div class="margin-b-30">
                    <img class="img-responsive" src="{{ asset('image/article/' . $article->article_image . '') }}" alt="SimeNews">
                </div>
                <div class="margin-b-30">
                    {!! $article->article_desc !!}
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <h3>Recent Post</h3>
                <hr>
                @foreach ($recent_article as $item)
                <div class="row">
                    <a href="/detail/{{ $item->id }}">
                    <div class="col-sm-4">
                        <img class="img-responsive" style="max-width: 120px;border-radius: 5px" src="{{ asset('image/article/' . $article->article_image . '') }}" alt="Our Office">
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
                                {{-- <div class="service">
                                    
                                </div> --}}
                                <div class="service-info">
                                    {!! $item->feature_icon !!}
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
@endsection
