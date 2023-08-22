<div class="page-wrapper">
        <header class="header header-2 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p>Special collection already available.</p><a href="#">&nbsp;Read more ...</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
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
                                    </li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <div class='google_element' id="google_translate_element" style="margin-left:1%"></div>
                                                    {{-- <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li> --}}
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                     @guest
                                     @if (Route::has('login'))
                                  <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                    @endif
                                   @else



                        <li>
                                        <div class="header-dropdown">
                                           <a href="{{ url('home')}}">{{ Auth::user()->name }}</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a  href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                                    <li><a href="{{ url('user-dashboard')}}">Account</a></li>
                                                    <li><a href="{{ url('chatify')}}">Chat</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                      @csrf
                                                      </form>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>

                                    @endguest
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ url('home')}}" class="logo">
                            <img src="{{ asset('molla/assets/images/demos/demo-2/logo.png')}}" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="{{ url('/search')}}" method="get" type="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="query" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="account">
                            <a href="{{ url('user-dashboard')}}" title="My account">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <p>Account</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="{{ url('wishlist')}}" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge"></span>
                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count"></span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="#">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
                                                <img src="{{ asset('molla/assets/images/products/cart/product-1.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="#">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
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

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li class="item-lead"><a href="{{ url('categorylist')}}">Daily offers</a></li>
                                        <li class="item-lead"><a href="{{ url('category')}}">Gift Ideas</a></li>
                                        <li><a href="{{ url('category')}}">Beds</a></li>
                                        <li><a href="{{ url('category')}}">Lighting</a></li>
                                        <li><a href="{{ url('category')}}">Sofas & Sleeper sofas</a></li>
                                        <li><a href="{{ url('category')}}">Storage</a></li>
                                        <li><a href="{{ url('category')}}">Armchairs & Chaises</a></li>
                                        <li><a href="{{ url('category')}}">Decoration </a></li>
                                        <li><a href="{{ url('category')}}">Kitchen Cabinets</a></li>
                                        <li><a href="{{ url('category')}}">Coffee & Tables</a></li>
                                        <li><a href="{{ url('category')}}">Outdoor Furniture </a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ url('home')}}" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Check Out Products Categories</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url('molla/assets/images/menu/demos/1.jpg');"></span>
                                                        <span class="demo-title">01 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image:  url('molla/assets/images/menu/demos/2.jpg');"></span>
                                                        <span class="demo-title">02 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image:  url('molla/assets/images/menu/demos/3.jpg');"></span>
                                                        <span class="demo-title">03 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image:  url('molla/assets/images/menu/demos/4.jpg');"></span>
                                                        <span class="demo-title">04 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/5.jpg);"></span>
                                                        <span class="demo-title">05 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/6.jpg);"></span>
                                                        <span class="demo-title">06 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/7.jpg);"></span>
                                                        <span class="demo-title">07 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/8.jpg);"></span>
                                                        <span class="demo-title">08 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/9.jpg);"></span>
                                                        <span class="demo-title">09 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/10.jpg);"></span>
                                                        <span class="demo-title">10 - shoes store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/11.jpg);"></span>
                                                        <span class="demo-title">11 - furniture simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/12.jpg);"></span>
                                                        <span class="demo-title">12 - fashion simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/13.jpg);"></span>
                                                        <span class="demo-title">13 - market</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/14.jpg);"></span>
                                                        <span class="demo-title">14 - market fullwidth</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/15.jpg);"></span>
                                                        <span class="demo-title">15 - lookbook 1</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/16.jpg);"></span>
                                                        <span class="demo-title">16 - lookbook 2</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/17.jpg);"></span>
                                                        <span class="demo-title">17 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/18.jpg);"></span>
                                                        <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/19.jpg);"></span>
                                                        <span class="demo-title">19 - games store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/20.jpg);"></span>
                                                        <span class="demo-title">20 - book store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/21.jpg);"></span>
                                                        <span class="demo-title">21 - sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/22.jpg);"></span>
                                                        <span class="demo-title">22 - tools store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
                                                        <span class="demo-bg" style="background-image: url(molla/assets/images/menu/demos/23.jpg);"></span>
                                                        <span class="demo-title">23 - fashion left navigation store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{url('category')}}">
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
                                    <a href="{{ url('chatify')}}" class="sf-with-ul">Chat</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Chat with Customer Care</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{url('contact')}}">Phone Contact</a></li>
                                                                <li><a href="{{url('contact')}}">Email</a></li>
                                                                <li><a href="{{url('chatify')}}">Chat</a></li>
                                                                <li><a href="{{url('contact')}}">Social Media</a></li>
                                                                <li><a href="{{url('category')}}"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Users Chat Settings</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{url('chatify')}}"><span>Chat Members<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="{{url('chatify')}}">Settings</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{url('category')}}">Product Category Boxed</a></li>
                                                                <li><a href="{{url('category')}}"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
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
                                                        <img src="{{ asset("molla/assets/images/menu/banner-1.jpg")}}" alt="Banner">

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
                                    <a href="{{ url('home')}}" class="sf-with-ul">Shop/Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                    <ul>
                                                       <li><a href="{{ url('myorder')}}">My Orders</a></li>
                                                        <li><a href="{{ url('view_posts')}}">Posts Info</a></li>
                                                        <li><a href="{{ url('post')}}">Post Now</a></li>
                                                        <li><a href="{{ url('myposts') }}">My Posts</a></li>
                                                         <li><a href="{{ url('viewshop') }}">Shops</a></li>
                                                         {{-- @if(Auth::user()->authorized == 1)
                                                          <li><a href="{{ url('shoppost') }}">Add Shop</a></li>
                                                         @endif --}}


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
                                            <a href="{{url('about')}}" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="{{url('about')}}">About 01</a></li>
                                                <li><a href="{{url('about')}}">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('contact_us')}}" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="{{url('contact_us')}}">Contact 01</a></li>
                                                <li><a href="{{url('contact_us')}}">Contact 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{url('contact_us')}}">FAQs</a></li>
                                        <li><a href="#">Error 404</a></li>
                                        <li><a href="#">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Blog</a>

                                    <ul>
                                        <li><a href="#">Classic</a></li>
                                        <li><a href="#">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                >
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
