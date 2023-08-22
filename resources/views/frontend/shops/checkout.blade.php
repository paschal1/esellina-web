 @extends('layouts.nowapp')
@section('content')
<main class="main">
        	<div class="page-header text-center" style="background-image: url('molla/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">
            				<form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate coupon">Have a coupon? <span>Click here to enter your code</span></label>
            				</form>
            			</div><!-- End .checkout-discount -->
            			<form  method="POST" action="{{url('place_order')}}"  id="paymentnow">
							
							@csrf

							<input type="hidden" class="id" name="id" value="{{ Auth::user()->id }}" class="shipping">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input type="text" name="fname" id="fname" value="{{ Auth::user()->fname }}" class="form-control firstname" required>
		                					<span id="firstname_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input type="text" name="lname" id="lname" class="form-control lastname" value="{{ Auth::user()->lname }}" required>
		                					<span id="lastname_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Company Name (Optional)</label>
	            						<input type="text" class="form-control cname"  name="cname" value="{{ Auth::user()->cname }}">
										<span id="cname_error" class="text-danger"></span>
	            						<label>Country *</label>
	            						<input type="text" class="form-control countryname" name="country" value="{{ Auth::user()->country }}" required>
										<span id="countryname_error" class="text-danger"></span>
	            						<label>Street address *</label>
	            						<input type="text" class="form-control address1" name="street" value="{{ Auth::user()->street }}" placeholder="House number and Street name" required>
	            						<span id="address1_error" class="text-danger"></span>
										<input type="text" class="form-control address2" name="apartment" value="{{ Auth::user()->apartment }}" placeholder="Appartments, suite, unit etc ..." required>
										<span id="address2_error" class="text-danger"></span>
	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control town" required>
		                					<span id="town_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / County *</label>
		                						<input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control statename" required>
		                					<span id="statename_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="text" name="zip" value="{{ Auth::user()->zip }}" class="form-control postal" required>
		                					<span id="postal_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="tel" name="phone" value="{{ Auth::user()->phone }}" class="form-control phone" required>
		                					<span id="phoneno_error" class="text-danger"></span>
											</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address *</label>
	        							<input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control emailaddress" required>
										<span id="emailaddress_error" class="text-danger"></span>
	        							<div class="custom-control custom-checkbox">
											<input type="checkbox" name="account" {{ Auth::user()->account == 1 ? 'checked':'' }} class="custom-control-input create" id="checkout-create-acc">
											<label class="custom-control-label"  for="checkout-create-acc">Create an account?</label>
										</div><!-- End .custom-checkbox -->

										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input shipping" name="ship" {{ Auth::user()->ship == 1 ? 'checked':'' }} id="checkout-diff-address">
											<label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
										</div><!-- End .custom-checkbox -->

	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control comment" name="note" value="{{ Auth::user()->notes }}" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
										@if($cartitem->count() > 0)
		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
                                                    <th>Qty</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
												
                                                @php $total = 0; $shipping = 0; @endphp
                                                @foreach($cartitem as $cart)
                                                @php 
                                                
                                                $shipping += $cart->pro_qty * 10;
												$total += $cart->posts->selling_price * $cart->pro_qty + $shipping;

                                                @endphp
												
												<input type="hidden" name="shipping" value="{{ $shipping }}" class="shipping">
		                						<tr>
		                							<td><a href="#">{{ $cart->posts->name}}</a></td>
		                							
                                                    <td>{{ $cart->pro_qty}}</td>
                                                    
                                                    <td>${{ $cart->posts->selling_price}}</td>
		                						</tr>
                                               

		                						@endforeach
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>${{ $total }}</td>
		                						</tr><!-- End .summary-subtotal -->
                                                
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>${{ $shipping }}</td>
		                						</tr>
                                                                 
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>${{ $total }}</td>
													<input type="hidden" class="amount" name="shipping" value="{{ $total }}" class="shipping">
													{{-- <input type="hidden" id="amount" value="{{$total}}"> --}}
		                						</tr><!-- End .summary-total -->

                               
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                {{-- <button type="submit" onclick="payWithPaystack()" class="collapsed btn btn-primary razorpay-btn" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    pay With Paystack
														</button> --}}
														<button type="submit"  class="collapsed btn btn-primary payWithPaystack"> Paystack </button>
										            </h2><br/>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->


											<div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                {{-- <button type="submit" onclick="payWithPaystack()" class="collapsed btn btn-primary razorpay-btn" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    pay With Paystack
														</button> --}}
														<button type="submit"  class="collapsed btn btn-danger payWithFlutter"> FlutterWave </button>
										            </h2><br/>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <input class="collapsed" type="radio" name="payment_mode" value="Cash on delivery" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                   
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
										                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="{{ asset('molla/assets/images/payments-summary.png')}}" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div><!-- End .summary -->
									@else

							   <tr>
								<td> No Product in Cart</td>
								
							   </tr>
							   @endif
		                		</aside><!-- End .col-lg-3 -->
								
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        @endsection

		@section('scripts')
		 
		 <script src="https://js.paystack.co/v1/inline.js"></script>

     <script src="https://checkout.flutterwave.com/v3.js"></script>
	 <script>
$(function() {
	$("#paymentnow").submit(function (e){
		e.preventDefault();

		var id = $(".id").val();
		var fname = $(".fname").val();
		var lname = $(".lname").val();
		var email = $(".emailaddress").val();
		var phone = $(".phone").val();
		var amount = 100;
		var name = fname+' '+lname;

		makePayment(amount, id, email, phone, name);

	});
});




function makePayment(amount, consumer_id, email, phone_number, name) {
  FlutterwaveCheckout({
    public_key: "FLWPUBK-c43052110ffcbcb460ddc33a9803e751-X",
    tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
    amount,
    currency: "NGN",
	payment_options: "card, banktransfer, ussd",
    
    meta: {
      consumer_id,
      consumer_mac: "92a3-912ba-1192a",
    },
    customer: {
      email,
      phone_number,
      name,
	  
    },

	callback: function(data){
		var transaction_id = data.transaction_id;
		//make ajax request 
		var _token = $("input[name='_token']").val();
		  
        $.ajax({
            //method
            type: 'POST',
            //action
            url: {{ URL ::to('verify-pay')}}+transaction_id,
            //header
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //data
            data: { 
				transaction_id,
				_token,         
            
            },
            
             success: function (response) {
                // alert(responseb.status);
                 swal(response.status);
                 window.location.href = "/myorder";
                 
            }
        })
	},
	onclose: function(){

	},
    customizations: {
      title: "The Esellina Store",
      description: "Payment for an awesome cruise",
      logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
    },
  });
}
	 </script>
		@endsection