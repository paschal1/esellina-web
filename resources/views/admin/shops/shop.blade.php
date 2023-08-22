
@extends('layouts.admin')

@section('content')




            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>

                    </ol>
                    <li class="btn btn-default active float-right m-2" aria-current="page"><a href="{{ url('adminshoppost')}}">Add Shop</a></li>
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
                                        <img src="assets/images/demos/demo-13/banners/banner-7.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-right">
                                        <h3 class="banner-subtitle"><a href="#">Amazing Value</a></h3><!-- End .banner-subtitle -->
                                        <h2 class="banner-title"><a href="#">High Performance 4K TVs</a></h2><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->

                                <div class="banner banner-poster">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-13/banners/banner-8.jpg" alt="Banner">
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
                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                </a>

                                <a href="#" class="brand">
                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                </a>
                            </div><!-- End .owl-carousel -->

                            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

                            <div class="cat-blocks-container">
                                <div class="row">
                                    @foreach ($shops as $shop)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <a href="#" class="cat-block">
                                            <figure>
                                                <span style="height: 100px">
                                                    <img class="img-thumbnail" src="{{asset('assets/uploads/shops/'.$shop->image)}}" alt="Shop image">
                                                </span>
                                            </figure>

                                            <h4 class="cat-block-title">{{$shop->shop_name}}</h4><!-- End .cat-block-title -->
                                            @if(Auth::user()->authorized == 0)
                                                        <span class="m-5">  <a href="{{ url('admineditshop/'.$shop->id) }}"> <button  class="btn-sm btn-warning">update</button></a></span>
                                                        <span class="m-5">  <a href="{{ url('admindeleteshop'.$shop->id) }}"> <button  class="btn-sm btn-danger">remove</button></a></span>
                                            @endif
                                        </a>
                                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                                    @endforeach

                                    {{$shops->onEachSide(1)->links()}}

                                </div><!-- End .row -->
                            </div><!-- End .cat-blocks-container -->

                            <div class="mb-2"></div><!-- End .mb-2 -->




                        </div><!-- End .col-lg-9 -->

                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->


        </main><!-- End .main -->

       @endsection('content')
