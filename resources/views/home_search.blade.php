@extends('layouts.mainapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="banner-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="{{ asset('molla/assets/images/demos/demo-2/banners/banner-1.jpg')}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Coffee Tables</h3><!-- End .banner-title -->
                                    <div class="banner-text">from $19.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('molla/assets/images/demos/demo-2/banners/banner-2.jpg')}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-bottom">
                                    <h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Amazing <br>Armchairs</h3><!-- End .banner-title -->
                                    <div class="banner-text text-white">from $39.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-md-6 col-lg-4">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('molla/assets/images/demos/demo-2/banners/banner-3.jpg')}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Storage <br>Boxes & Baskets</h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="{{ asset('molla/assets/images/demos/demo-2/banners/banner-4.jpg')}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Lamps Offer</h3><!-- End .banner-title -->
                                    <div class="banner-text">up to 30% off</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Top Rated</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>





                         @foreach($products as $fproducts )


                            <div class="product product-11 text-center">
                                <figure class="product-media">


                                                @if($fproducts->user->authorize > 0)
                                                <span class="product-label label-light"><img src="{{ asset('admin/img/icons/circle-check-solid.svg')}}" alt="user authorized"></span>
                                                @endif
                                    <a href="{{ url('single/'.$fproducts->category->slug.'/'.$fproducts->slug)}}">
                                        <img src="{{asset('assets/uploads/products/'.$fproducts->image)}}" alt="Product image" style="height: 200px;"  class="product-image">
                                        <img src="{{asset('assets/uploads/products/'.$fproducts->image)}}" alt="Product image" style="height: 200px;"  class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->



                                <div class="product-body">
                                    <h3 class="product-title"><a href="{{ url('single/'.$fproducts->category->slug.'/'.$fproducts->slug)}}">{{ $fproducts->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">{{Helper::currency_converter($fproducts->selling_price)}}</span>
                                        <span class="old-price">Was {{Helper::currency_converter($fproducts->original_price)}}</span>
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            @endforeach




                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($products as $tcategory )

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/uploads/category/'.$tcategory->image)}}" alt="Product image" style="height: 200px;"  class="product-image">
                                        <img src="{{asset('assets/uploads/category/'.$tcategory->image)}}" alt="Product image" style="height: 200px;"  class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="{{ url('/')}}">{{ $tcategory->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        {{ $tcategory->description}}
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #74543e;"><span class="sr-only"></span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only"></span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                           @endforeach

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                              @foreach($posts as $tproducts )

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    @if($tproducts->user->authorize > 0)
                                                <span class="product-label label-light"><img src="{{ asset('admin/img/icons/circle-check-solid.svg')}}" alt="user authorized"></span>
                                                @endif
                                    <a href="{{ url('single/'.$tproducts->category->slug.'/'.$tproducts->slug)}}">
                                       <img src="{{asset('assets/uploads/products/'.$tproducts->image)}}" alt="Product image" style="height: 200px;"  class="product-image">
                                        <img src="{{asset('assets/uploads/products/'.$tproducts->image)}}" alt="Product image" style="height: 200px;"  class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="{{ url('single/'.$tproducts->category->slug.'/'.$tproducts->slug)}}">{{ $tproducts->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                         <span class="new-price">{{Helper::currency_converter($tproducts->selling_price)}}</span>
                                        <span class="old-price">Was {{Helper::currency_converter($tproducts->original_price)}}</span>
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container-fluid -->
@endforeach
            <div class="mb-5"></div><!-- End .mb-5 -->

<div class="py-5">
    <div class="container">
        <div class="row">






        </div>
    </div>
</div>

                        <div class="products mb-3" style="margin: 20px;">

                                <div class="row justify-content-center">
                                    @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                    <div class="col-6 col-md-4 col-lg-4" id="postlist">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                 @if($post->user->authorize > 0)
                                                 {{-- <input type="text" value="{{authorize}} id="> --}}
                                                <span class="product-label label-light"><img src="{{ asset('admin/img/icons/circle-check-solid.svg')}}" alt="user authorized"></span>
                                                @endif
                                                <a href="{{ url('single/'.$post->category->slug.'/'.$post->slug)}}">
                                                    <img src="{{ asset('assets/uploads/posts/'.$post->image)}}" alt="Product image" style="width: 100%; height:350px;" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{$post->name}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="{{ url('single/'.$post->category->slug.'/'.$post->slug)}}">{{$post->description}}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{Helper::currency_converter($post->selling_price)}}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="{{ asset('assets/uploads/posts/'.$post->image)}}" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/uploads/posts/'.$post->image)}}" alt="product desc">
                                                    </a>

                                                    <a href="#">
                                                        <img src="{{ asset('assets/uploads/posts/'.$post->image)}}" alt="product desc">
                                                    </a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 -->



                                    @endforeach


                                    @endif


                                    {{-- {{$posts->onEachSide(1)->links()}} --}}
                                </div><!-- End .row -->
                            </div><!-- End .products -->

@endsection
