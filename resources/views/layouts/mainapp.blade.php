<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
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
</head>

<body >
    @include('layouts.inc.navbars')

        <main class="main">
            <div class="intro-slider-container">
                <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                    <div class="intro-slide" style="background-image: url('molla/assets/images/demos/demo-2/slider/slide-1.jpg');">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Bedroom Furniture</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Find Comfort <br>That Suits You.</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(molla/assets/images/demos/demo-2/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(molla/assets/images/demos/demo-2/slider/slide-3.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Living Room</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">
                                Make Your Living Room <br>Work For You.<br>
                                <span class="text-primary">
                                    <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                                </span>
                            </h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="brands-border owl-carousel owl-simple" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": false,
                    "margin": 0,
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
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/1.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/2.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/3.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/4.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/5.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/6.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('molla/assets/images/brands/7.png')}}" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            @yield('content')
     <!-- Scripts -->


  @yield('scripts')

           <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>When you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

        	<div class="footer-newsletter bg-image" style="background-image: url(assets/images/backgrounds/bg-2.jpg)">
        		<div class="container">
        			<div class="heading text-center">
                        <h3 class="title">Get The Latest Deals</h3><!-- End .title -->
                        <p class="title-desc">and receive <span>$20 coupon</span> for first shopping</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="row">
                    	<div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form action="#">
    							<div class="input-group">
    								<input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" aria-describedby="newsletter-btn" required>
    								<div class="input-group-append">
    									<button class="btn btn-primary" type="submit" id="newsletter-btn"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
    								</div><!-- .End .input-group-append -->
    							</div><!-- .End .input-group -->
                            </form>
                    	</div><!-- End .col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 -->
                    </div><!-- End .row -->
        		</div><!-- End .container -->
        	</div><!-- End .footer-newsletter bg-image -->

        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-12 col-lg-6">
	            			<div class="widget widget-about">
	            				<img src="{{ asset('molla/assets/images/demos/demo-2/logo.png')}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>

	            				<div class="widget-about-info">
	            					<div class="row">
	            						<div class="col-sm-6 col-md-4">
	            							<span class="widget-about-title">Got Question? Call us 24/7</span>
	            							<a href="tel:123456789">+234 90217 63656</a>
	            						</div><!-- End .col-sm-6 -->
	            						<div class="col-sm-6 col-md-8">
	            							<span class="widget-about-title">Payment Method</span>
	            							<figure class="footer-payments">
							        			<img src="{{ asset('molla/assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
							        		</figure><!-- End .footer-payments -->
	            						</div><!-- End .col-sm-6 -->
	            					</div><!-- End .row -->
	            				</div><!-- End .widget-about-info -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-12 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Information</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="{{ url('about_us')}}">About Esellina</a></li>
	            					<li><a href="#">How to shop on Esellina</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="{{ url('contact_us')}}">Contact us</a></li>
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
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
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="{{ url('cart')}}">View Cart</a></li>
	            					<li><a href="{{ url('wishlist')}}">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-64 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2019 Esellina Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<ul class="footer-menu">
	        			<li><a href="#">Terms Of Use</a></li>
	        			<li><a href="#">Privacy Policy</a></li>
	        		</ul><!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="{{ url('/search')}}" method="get" type="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="query" id="mobile-search" placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{ url('home')}}">Home </a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>

                                    <li><a href="{{ url('post')}}">Post Product</a></li>
                                    <li><a href="{{ url('shoppost')}}">Add a Shop</a></li>
                                    <li><a href="{{ url('viewshop')}}">Shop List </a></li>
                                    <li><a href="{{url('singleshop')}}"><span>Shop Categories<span class="tip tip-hot">Hot</span></span></a></li>

                                    <li><a href="{{ url('cart')}}">Cart</a></li>
                                    <li><a href="{{ url('checkout')}}">Checkout</a></li>
                                    <li><a href="{{ url('wishlist')}}">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('index') }}" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="{{ url('myorder')}}">My Orders</a></li>

                                    <li><a href="{{ url('post') }}">Post Product</a></li>
                                    <li><a href="{{ url('view_posts') }}l">Posts</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('about_us')}}">About</a>

                                        <ul>
                                            <li><a href="{{ url('about_us')}}">About 01</a></li>
                                            <li><a href="{{ url('contact_us')}}">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact_us')}}">Contact</a>

                                        <ul>
                                            <li><a href="{{ url('contact_us')}}">Contact 01</a></li>
                                            <li><a href="{{ url('contact_us')}}">Contact 02</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog</a>


                            </li>

                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->

            </div><!-- End .tab-content -->

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

                                    @include('auth.signin')

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


                                    <div class="form-choice">

                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{ asset('molla/assets/images/popup/newsletter/logo.png')}}" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Esellina eCommerce newsletter to receive timely updates from your favorite products.</p>
                           <form action="{{ url('newsletter')}}" method="POST">
                                @csrf
                                <div class="input-group input-group-round">
                                    <input type="email" name="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{ asset('molla/assets/images/popup/newsletter/img-1.jpg')}}" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins JS File -->
    <script type="text/javascript">

	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}

	(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
	function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
	if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

	</script>

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
    <script src="{{ asset('frontend/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('molla/assets/js/main.js') }}"></script>
    <script src="{{ asset('molla/assets/js/demos/demo-2.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>swal( "{{session('status')}}");</script>
@endif
</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>
