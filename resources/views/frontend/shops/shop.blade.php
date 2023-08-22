
@extends('layouts.frontender')

@section('content')



        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>

                    </ol>
                    <li class="btn btn-default active float-right m-2" aria-current="page"><a href="{{ url('shoppost')}}">Add Shop</a></li>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-xl-4-5col">
                            <div class="category-banners-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false,
                                    "responsive": {
                                        "768": {
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="banner banner-poster">

                                    <a href="#">
                                        <img src="{{ asset('molla/assets/images/demos/demo-13/banners/banner-7.jpg') }}" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-right">
                                        <h3 class="banner-subtitle"><a href="#">Amazing Value</a></h3><!-- End .banner-subtitle -->
                                        <h2 class="banner-title"><a href="#">High Performance 4K TVs</a></h2><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->

                                <div class="banner banner-poster">
                                    <a href="#">
                                        <img src="{{ asset('molla/assets/images/demos/demo-13/banners/banner-8.jpg') }}" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h3 class="banner-subtitle"><a href="#">Weekend Deal</a></h3><!-- End .banner-subtitle -->
                                        <h2 class="banner-title"><a href="#">Apple & Accessories</a></h2><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .owl-carousel -->

                            <div class="mb-3"></div><!-- End .mb-3 -->

                            <div class="owl-carousel owl-simple owl-nav-align" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 30,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "420": {
                                            "items":3
                                        },
                                        "600": {
                                            "items":4
                                        },
                                        "900": {
                                            "items":5
                                        },
                                        "1024": {
                                            "items":6,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/2.png')}}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/3.png')}}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/4.png') }}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/5.png') }}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/6.png') }}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/1.png') }}" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="{{ asset('molla/assets/images/brands/2.png') }}" alt="Brand Name">
                                </a>
                            </div><!-- End .owl-carousel -->

                            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

                            <div class="cat-blocks-container">
                                <div class="row">
                                    @foreach ($shops as $shop)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <a href="{{ url('list/'.$shop->id)}}" class="cat-block">
                                            <figure>
                                                <span style="height: 100px">
                                                    <img class="img-thumbnail" src="{{asset('assets/uploads/shops/'.$shop->image)}}" alt="Shop image">
                                                </span>
                                            </figure>

                                            <h4 class="cat-block-title">{{$shop->shop_name}}</h4><!-- End .cat-block-title -->
                                            @if(Auth::user()->authorized == 0 && $shop->id == Auth::user()->id )
                                                        <span class="m-5">  <a href="{{ url('editshop/'.$shop->id) }}"> <button  class="btn-sm btn-warning">update</button></a></span>
                                                        <span class="m-5">  <a href="{{ url('deleteshop'.$shop->id) }}"> <button  class="btn-sm btn-danger">remove</button></a></span>
                                            @endif
                                        </a>
                                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                                    @endforeach

                                    {{$shops->onEachSide(1)->links()}}

                                </div><!-- End .row -->
                            </div><!-- End .cat-blocks-container -->

                            <div class="mb-2"></div><!-- End .mb-2 -->




                        </div><!-- End .col-lg-9 -->

                        <aside class="col-lg-3 col-xl-5col order-lg-first">
                            <div class="sidebar sidebar-shop">


                                <div class="widget">
                                    <h3 class="widget-title">Brands</h3><!-- End .widget-title -->

                                    <div class="widget-body">

                                        @foreach($shops as $shop)
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brand-1">
                                                    <label class="custom-control-label" for="brand-1">{{ $shop->shop_name}}</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                            @endforeach

                                            {{$shops->onEachSide(1)->links()}}
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Price</h3><!-- End .widget-title -->

                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="price-1" name="filter-price">
                                                    <label class="custom-control-label" for="price-1">Under $25</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="price-2" name="filter-price">
                                                    <label class="custom-control-label" for="price-2">$25 to $50</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="price-3" name="filter-price">
                                                    <label class="custom-control-label" for="price-3">$50 to $100</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="price-4" name="filter-price">
                                                    <label class="custom-control-label" for="price-4">$100 to $200</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="price-5" name="filter-price">
                                                    <label class="custom-control-label" for="price-5">$200 & Above</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Customer Rating</h3><!-- End .widget-title -->

                                    <div class="widget-body">
                                        <div class="filter-items">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cus-rating-1">
                                                    <label class="custom-control-label" for="cus-rating-1">
                                                        <span class="ratings-container">
                                                            <span class="ratings">
                                                                <span class="ratings-val" style="width: 100%;"></span><!-- End .ratings-val -->
                                                            </span><!-- End .ratings -->
                                                            <span class="ratings-text">( 24 )</span>
                                                        </span><!-- End .rating-container -->
                                                    </label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cus-rating-2">
                                                    <label class="custom-control-label" for="cus-rating-2">
                                                        <span class="ratings-container">
                                                            <span class="ratings">
                                                                <span class="ratings-val" style="width: 80%;"></span><!-- End .ratings-val -->
                                                            </span><!-- End .ratings -->
                                                            <span class="ratings-text">( 8 )</span>
                                                        </span><!-- End .rating-container -->
                                                    </label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cus-rating-3">
                                                    <label class="custom-control-label" for="cus-rating-3">
                                                        <span class="ratings-container">
                                                            <span class="ratings">
                                                                <span class="ratings-val" style="width: 60%;"></span><!-- End .ratings-val -->
                                                            </span><!-- End .ratings -->
                                                            <span class="ratings-text">( 5 )</span>
                                                        </span><!-- End .rating-container -->
                                                    </label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cus-rating-4">
                                                    <label class="custom-control-label" for="cus-rating-4">
                                                        <span class="ratings-container">
                                                            <span class="ratings">
                                                                <span class="ratings-val" style="width: 40%;"></span><!-- End .ratings-val -->
                                                            </span><!-- End .ratings -->
                                                            <span class="ratings-text">( 1 )</span>
                                                        </span><!-- End .rating-container -->
                                                    </label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cus-rating-5">
                                                    <label class="custom-control-label" for="cus-rating-5">
                                                        <span class="ratings-container">
                                                            <span class="ratings">
                                                                <span class="ratings-val" style="width: 20%;"></span><!-- End .ratings-val -->
                                                            </span><!-- End .ratings -->
                                                            <span class="ratings-text">( 3 )</span>
                                                        </span><!-- End .rating-container -->
                                                    </label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->

                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Colour</h3><!-- End .widget-title -->

                                    <div class="widget-body">
                                        <div class="filter-colors">
                                            <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                        </div><!-- End .filter-colors -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->

                                <div class="widget widget-banner-sidebar">
                                    <div class="banner-sidebar-title">ad banner 218 x 430px</div><!-- End .ad-title -->

                                    <div class="banner-sidebar banner-overlay">
                                        <a href="{{ url('categorylist')}}">
                                            <img src="{{ asset('molla/assets/images/demos/demo-13/banners/banner-6.jpg')}}" alt="banner">
                                        </a>
                                    </div><!-- End .banner-ad -->
                                </div><!-- End .widget -->
                            </div><!-- End .sidebar sidebar-shop -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->

            <div class="cta cta-horizontal cta-horizontal-box bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                            <p class="cta-desc text-white">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-7">
                           <form action="{{ url('newsletter')}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->

       @endsection('content')
