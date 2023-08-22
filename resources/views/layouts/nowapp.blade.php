<!DOCTYPE html>
<html lang="en">


<!-- molla/{{ url('home')}}  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Esellina-Main</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Esellina - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('molla/assets/images/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('molla/assets/images/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('molla/assets/images/icons/favicon.png') }}">
    <link rel="manifest" href="{{ asset('molla/assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('molla/assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('molla/assets/images/icons/favicon.png') }}">
    <meta name="apple-mobile-web-app-title" content="Esellina">
    <meta name="application-name" content="Esellina">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('molla/assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('molla/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('molla/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('molla/assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('molla/assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('molla/assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('molla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('molla/assets/css/skins/skin-demo-2.css') }}">
    <link rel="stylesheet" href="{{ asset('molla/assets/css/demos/demo-2.css') }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                                            @php
                                            Helper::currency_load();
                                            $currency_code = session('currency_code');
                                            $currency_symbol = session('currency_symbol');
                                            if($currency_symbol==""){
                                                $system_default_currency_info=session('system_default_currency_info');
                                                $currency_symbol = $system_default_currency_info->currency_symbol;
                                                $currency_code = $system_default_currency_info->currency_code;
                                            }

                                            @endphp
                                            <a href="#">{{$currency_symbol}} {{$currency_code}}</a>
                                            <div class="header-menu">
                                                <ul>
                                                    @foreach(\App\Models\Currency::where('status', 1)->get() as $item)
                                                        <li><a href="javascript:;" onclick="currency_change('{{$item['currency_code']}}');"> {{$item->currency_symbol}} {{$item->currency_code}}</a></li>

                                                        @endforeach


                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>

                        <div class="header-dropdown">
                            <a href="#">Eng</a>

                            <div class="header-menu">
                                <ul>
                                    <div class='google_element' id="google_translate_element" style="margin-left:1%"></div>
                                    {{-- <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li> --}}
                                </ul>

                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +234 90217 63656</a></li>
                                    <li><a href="{{ url('wishlist')}}"><i class="icon-heart-o"></i>Wishlist <span class="wishlist-count bage">()</span></a></li>
                                    <li><a href="{{ url('about_us')}}">About Us</a></li>
                                    <li><a href="{{ url('contact_us')}}">Contact Us</a></li>
                                    @guest
                                     @if (Route::has('login'))
                                          <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                        @endif
                                   @else
                                  <li> <a href="{{ url('home')}}">{{ Auth::user()->name }}</a></li>

                                   @endguest

                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ url('home')}}" class="logo">
                            <img src="{{ asset('molla/assets/images/logo.png')}}" alt="Esellina Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ url('home')}}" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/1.jpg);"></span>
                                                        <span class="demo-title">01 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/2.jpg);"></span>
                                                        <span class="demo-title">02 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/3.jpg);"></span>
                                                        <span class="demo-title">03 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/4.jpg);"></span>
                                                        <span class="demo-title">04 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/5.jpg);"></span>
                                                        <span class="demo-title">05 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/6.jpg);"></span>
                                                        <span class="demo-title">06 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/7.jpg);"></span>
                                                        <span class="demo-title">07 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/8.jpg);"></span>
                                                        <span class="demo-title">08 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/9.jpg);"></span>
                                                        <span class="demo-title">09 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/10.jpg);"></span>
                                                        <span class="demo-title">10 - shoes store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/11.jpg);"></span>
                                                        <span class="demo-title">11 - furniture simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/12.jpg);"></span>
                                                        <span class="demo-title">12 - fashion simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/13.jpg);"></span>
                                                        <span class="demo-title">13 - market</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/14.jpg);"></span>
                                                        <span class="demo-title">14 - market fullwidth</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/15.jpg);"></span>
                                                        <span class="demo-title">15 - lookbook 1</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/16.jpg);"></span>
                                                        <span class="demo-title">16 - lookbook 2</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/17.jpg);"></span>
                                                        <span class="demo-title">17 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/18.jpg);"></span>
                                                        <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/19.jpg);"></span>
                                                        <span class="demo-title">19 - games store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/20.jpg);"></span>
                                                        <span class="demo-title">20 - book store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/21.jpg);"></span>
                                                        <span class="demo-title">21 - sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/22.jpg);"></span>
                                                        <span class="demo-title">22 - tools store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/23.jpg);"></span>
                                                        <span class="demo-title">23 - fashion left navigation store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{ url('home')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/24.jpg);"></span>
                                                        <span class="demo-title">24 - extreme sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="{{ url('categorylist')}}" class="sf-with-ul">Products</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">



                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Product Category Boxed</a></li>
                                                                <li><a href="#"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{ url('cart')}}">Cart</a></li>
                                                                <li><a href="{{ url('checkout')}}">Checkout</a></li>
                                                                <li><a href="{{ url('wishlist')}}">Wishlist</a></li>
                                                                <li><a href="{{ url('user-dashboard')}}">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="{{ url('categorylist')}}" class="banner banner-menu">
                                                        <img src="{{ asset('molla/assets/images/menu/banner-1.jpg')}}" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="{{ url('home')}}" class="sf-with-ul">Shops</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Shop Details</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="{{ url('myorder')}}">My Orders</a></li>

                                                                  <li><a href="{{ url('post')}}">Post Product</a></li>
                                                                 <li><a href="{{ url('shoppost')}}">Add a Shop</a></li>
                                                                    <li><a href="{{ url('viewshop')}}">Shop List </a></li>
                                                                    <li><a href="{{url('singleshop')}}"><span>Shop Categories<span class="tip tip-hot">Hot</span></span></a></li>


                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="{{ url('categorylist')}}">
                                                        <img src="{{ asset('molla/assets/images/menu/banner-2.jpg')}}" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="{{ url('about_us')}}" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="{{ url('about_us')}}">About 01</a></li>
                                                <li><a href="{{ url('about_us')}}">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('contact_us')}}" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="{{ url('contact_us')}}">Contact 01</a></li>
                                                <li><a href="{{ url('contact_us')}}">Contact 02</a></li>
                                            </ul>
                                        </li>
                                         @guest
                                     @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @endif
                                   @else
                                   {{-- <a href="#">{{ Auth::user()->name }}</a> --}}

                                   @endguest
                                        <li><a href="{{('contact_us')}}">FAQs</a></li>

                                    </ul>
                                </li>
                                <li>


                                    <ul>




                                    </ul>
                                </li>
                                <li>

                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="{{ url('/search')}}" method="get" type="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="query" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <i class="icon-random"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="{{ url('home')}}">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="{{ url('home')}}">White Long Skirt</a></h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="{{ url('home')}}">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="{{ url('home')}}" class="product-image">
                                                <img src="{{ asset('molla/assets/images/products/cart/product-1.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="{{ url('home')}}">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="{{ url('home')}}" class="product-image">
                                                <img src="{{ asset('molla/assets/images/products/cart/product-2.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{ url('cart')}}" class="btn btn-primary">View Cart</a>
                                    <a href="{{ url('checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        @yield('content')


        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="{{ asset('molla/assets/images/logo.png')}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

	            				<div class="social-icons">
	            					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
	            				</div><!-- End .soial-icons -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="{{ url('about_us')}}">About Esellina</a></li>
	            					<li><a href="#">How to shop on Esellina</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="{{ url('contact_us')}}">Contact us</a></li>
	            					<li><a href="{{ route('login')}}">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
                                     @guest
                                     @if (Route::has('login'))
                                         <li><a href="{{ route('login')}}">Sign In</a></li>
                                        @endif
                                   @else
                                  <li> <a href="#">{{ Auth::user()->name }}</a></li>

                                   @endguest

	            					<li><a href="{{ url('cart')}}">View Cart</a></li>
	            					<li><a href="{{ url('wishlist')}}">My Wishlist</a></li>
	            					<li><a href="{{ url('user-dashboard')}}">Track My Order</a></li>
	            					<li><a href="{{ url('contact_us')}}">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2019 Esellina Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="{{ asset('molla/assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="{{ url('/search')}}" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="query" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="{{ url('home')}}">Home</a>

                        <ul>
                            <li><a href="{{ url('home')}}">01 - furniture store</a></li>
                            <li><a href="{{ url('home')}}">02 - furniture store</a></li>
                            <li><a href="{{ url('home')}}">03 - electronic store</a></li>
                            <li><a href="{{ url('home')}}">04 - electronic store</a></li>
                            <li><a href="{{ url('home')}}">05 - fashion store</a></li>
                            <li><a href="{{ url('home')}}">06 - fashion store</a></li>
                            <li><a href="{{ url('home')}}">07 - fashion store</a></li>
                            <li><a href="{{ url('home')}}">08 - fashion store</a></li>
                            <li><a href="{{ url('home')}}">09 - fashion store</a></li>
                            <li><a href="{{ url('home')}}">10 - shoes store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('categorylist')}}">Shop</a>
                        <ul>
                            <li><a href="{{ url('categorylist')}}">Shop List</a></li>

                            <li><a href="{{ url('cart')}}">Cart</a></li>
                            <li><a href="{{ url('checkout')}}">Checkout</a></li>
                            <li><a href="{{ url('wishlist')}}">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('home')}}" class="sf-with-ul">Product</a>

                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="{{ url('about_us')}}">About</a>

                                <ul>
                                    <li><a href="{{ url('about_us')}}">About 01</a></li>
                                    <li><a href="{{ url('about_us')}}">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('contact_us')}}">Contact</a>

                                <ul>
                                    <li><a href="{{ url('contact_us')}}">Contact 01</a></li>
                                    <li><a href="{{ url('contact_us')}}">Contact 02</a></li>
                                </ul>
                            </li>
                            @guest
                                     @if (Route::has('login'))
                                         <li><a href="{{ route('login')}}">LogIn</a></li>
                                        @endif
                                   @else
                                  <li> <a href="#">{{ Auth::user()->name }}</a></li>

                                   @endguest

                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>

                        <ul>





                        </ul>
                    </li>

                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

     <!-- Scripts -->


<script>
    function currency_change(currency_code){

        $.ajaxSetup({
            beforeSend: function (xhr, type) {
                if (!type.crossDomain) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                }
            },
        });

        $.ajax({
            type: 'POST',
            url: 'currency-load',
            data: {
                currency_code:currency_code,
                // _token: '{{csrf_token()}}',

            },

            success:function (response){

                if(response['status']){

                    location.reload();
                }else{
                    alert('server error');
                }


            },


        })

    }
</script>
    <!-- Plugins JS File -->
    <script src="{{ asset('molla/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('molla/assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('molla/assets/js/main.js') }}"></script>
       <script src="{{ asset('molla/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>swal( "{{session('status')}}");</script>
@endif

 <script type="text/javascript">

	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}

	(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
	function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
	if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

	</script>

    @yield('scripts')
</body>


<!-- molla/{{ url('home')}}  22 Nov 2019 09:55:32 GMT -->
</html>
