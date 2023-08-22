      @extends('layouts.nowapp')
@section('content')
<main class="main">
        	<div class="page-header text-center" style="background-image: url('molla/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Orders<span>my order page</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row product_data">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											
											<th>Total Price</th>
											<th>Tracking Number</th>
                                            <th>Status</th>
                                             <th>Action</th>
											
											<th></th>
										</tr>
									</thead>

									<tbody>
                                       
										@if($orders->count() > 0)
                                        @foreach($orders as $cart)
										<tr class="product_data">
											
											
											<td class="price-col">{{ Helper::currency_converter($cart->total_price) }}</td>
											<td class="tracking-col">
                                                {{$cart->tracking_no}}
                                               
                                            </td>
                                            <td class="status-col">
                                                {{$cart->status == '0' ? 'pending' : 'successful'}}
                                               
                                            </td>


											
											<td class="remove-col"><a class="btn btn-primary" href="{{ url('view_myorders/'.$cart->id)}}">view</a></td>
										</tr>

                                        {{-- @php $total += $cart->posts->selling_price * $cart->pro_qty; @endphp --}}
                                        @endforeach
										@else
										<h6>Your Orders is Empty</h6>
										@endif
											
									</tbody>
								</table><!-- End .table table-wishlist -->

	                			
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        @endsection