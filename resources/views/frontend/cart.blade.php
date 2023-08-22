      @extends('layouts.nowapp')
@section('content')
<main class="main">
        	<div class="page-header text-center" style="background-image: url('molla/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row product_data">
	                		<div class="col-lg-9">
								@if($cartlist->count() > 0)
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Quantity</th>
											
											<th></th>
										</tr>
									</thead>

									<tbody>
										
                                        @php $total = 0; @endphp
										
                                        @foreach($cartlist as $cart)
										<tr class="product_data">
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="{{ asset('assets/uploads/posts/'.$cart->posts->image)}}" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#">{{$cart->posts->name}}</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col">${{$cart->posts->selling_price}}</td>
											<td class="quantity-col">
                                                <input type="hidden" class="pro_id" value="{{ $cart->pro_id }}">
												@if($cart->posts->qty >= $cart->pro_qty)
                                                <div class="cart-product-quantity">
                                                  <div class="product-details-quantity">
                                          <div class="input-group text-center mb-3" style="width: 130px">
                                            <button class="input-group-text changeQauntity decrementBtn" @readonly(true)>-</button>
                                            <input type="text"   class="form-control text-center qty" @readonly(true)  value="{{ $cart->pro_qty }}"  required>
                                            <button class="input-group-text changeQauntity incrementBtn" @readonly(true)>+</button>
                                        </div>
                                                </div><!-- End .cart-product-quantity -->
												@php $total += $cart->posts->selling_price * $cart->pro_qty; @endphp
												@else
												<h6>Out of Stock</h6>
												@endif
                                            </td>


											
											<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
										</tr>

                                        {{-- @php $total += $cart->posts->selling_price * $cart->pro_qty; @endphp --}}
                                        @endforeach
										
											
									</tbody>
								</table><!-- End .table table-wishlist -->

	                			<div class="cart-bottom">
			            			<div class="cart-discount">
			            				<form action="#">
			            					<div class="input-group">
				        						<input type="text" class="form-control" required placeholder="coupon code">
				        						<div class="input-group-append">
													<button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
												</div><!-- .End .input-group-append -->
			        						</div><!-- End .input-group -->
			            				</form>
			            			</div><!-- End .cart-discount -->

			            			<a href="#" class="btn btn-outline-dark-2 refresh"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
		            			</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td>${{ $total }}</td>
	                						</tr><!-- End .summary-subtotal -->
	                						<tr class="summary-shipping">
	                							<td>Shipping:</td>
	                							<td>&nbsp;</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Free Shipping</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$0.00</td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="standart-shipping">Standart:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$10.00</td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$20.00</td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-estimate">
	                							<td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
	                							<td>&nbsp;</td>
	                						</tr><!-- End .summary-shipping-estimate -->

	                						<tr class="summary-total">
	                							<td>Total:</td>
                                                {{-- @php $total + 20; @endphp --}}
	                							<td>${{ $total }}</td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="{{ url('checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="{{ url('categorylist')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
							@else
										<h6>Your Cart is Empty</h6>
										@endif
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        @endsection