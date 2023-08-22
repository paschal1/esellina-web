@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
<div class="row">
    @foreach($order as $orders)
		                		<div class="col-lg-9">
									<a href="{{ url('adminorder')}}" class="btn btn-warning text-white">Back</a><br/>
		                			<h2 class="checkout-title">Shipping Details</h2><!-- End .checkout-title -->
		                				
									<div class="row">
		                					<div class="col-sm-6">
		                						<label>Full Name: {{ $orders->fname.' '.$orders->lname }}</label><br/><br/>
		                						
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

	                					{{-- <label>Email address: {{ $order->email }}</label> --}}
	        							
@endforeach

	                					
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Order Details</h3><!-- End .summary-title -->
										
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
												
                                                    
                                                    <td>${{ $order->price}}</td>
		                						
		                							
		                							<td>{{ $order->qty }}</td>
		                						
		                							
		                							<td>
														<img src="{{ asset('assets/uploads/posts/'.$order->products->image) }}" width="50px" alt="">
														</td>
		                						</tr>
                                                                 
		                						
                               
		                					</tbody>
												@endforeach
											
		                				</table><!-- End .table table-summary -->

									<h4>Grand Total: ${{ $orders->total_price }}</h4>
										
									</div>
                                    <label for="">Order Status</label>
                                    <form action="{{ url('updateorder/'.$order->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
							<select name="status" id="" class="form-select"  aria-label="Default select" required>
                       
                                 <option {{ $order->status == '0' ? 'Selected' : ''}} value="0">Pending</option>
                           <option  {{ $order->status == '1' ? 'Selected' : ''}} value="1">Completed</option>  
                        
                    </select><br/>
                    <button type="submit" class="btn btn-danger text-white">Update</button><br/>
		                		</form>
                            </aside><!-- End .col-lg-3 -->
                    
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection