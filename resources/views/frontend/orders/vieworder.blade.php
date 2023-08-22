 @extends('layouts.nowapp')
@section('content')
<main class="main">
        	<div class="page-header text-center" style="background-image: url('molla/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shipping<span>Details</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Order</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">
            				{{-- <form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
            				</form> --}}
            			</div><!-- End .checkout-discount -->
            			<form action="" method="POST">

							{{-- @foreach($orders as $orders) --}}
		                	<div class="row">
		                		<div class="col-lg-9">
									<a href="{{ url('myorder')}}" class="btn btn-warning text-white">Back</a><br/>
		                			<h2 class="checkout-title">Shipping Details</h2><!-- End .checkout-title -->
		                				
									<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name: {{ $orders->fname}}</label><br/><br/>
		                						
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name: {{ $orders->lname}}</label><br/><br/>
		                						
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Total Price: {{ $orders->total_price}} </label><br/><br/>
	            						

	            						<label>Country: {{ $orders->country}}</label><br/><br/>
	            						

	            						<label>Street address: {{ $orders->street}}</label><br/><br/>
	            						<label>Street address: {{ $orders->apartment}}</label><br/><br/>
	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City: {{ $orders->city}}</label>
		                						
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / County: {{ $orders->state}}</label>
		                						
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP: {{ $orders->zip}}</label>
		                					
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone: {{ $orders->phone}}</label>
		                						
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address: {{ Auth::user()->email }}</label>
	        							


	                					
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Order Details</h3><!-- End .summary-title -->
										@if($orders->count() > 0)
		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
													<th>Name</th>
		                							<th>Price</th>
                                                    <th>Quantity</th>
		                							<th>Image</th>
		                						</tr>
		                					</thead>
											  @foreach($orders->order_items as $order)
		                					<tbody>
												
                                            
												
		                						<tr>
		                							<td><a href="#">{{ $order->products->name ?? ''}}</a></td>
												
                                                    
                                                    <td>{{ Helper::currency_converter($order->price) }}</td>
		                						
		                							
		                							<td>{{ $order->qty }}</td>
		                						
		                							
		                							<td>
														<img src="{{ asset('assets/uploads/posts/'.$order->products->image) }}" width="50px" alt="">
														</td>
		                						</tr>
                                                                 
		                						
                               
		                					</tbody>
												@endforeach
											
		                				</table><!-- End .table table-summary -->

									<h4>Grand Total: {{ Helper::currency_converter($orders->total_price) }}</h4>
										
									</div>
							
		                		</aside><!-- End .col-lg-3 -->
								@endif
		                	{{-- </div><!-- End .row -->@endforeach --}}
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        @endsection