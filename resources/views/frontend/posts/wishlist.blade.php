
@extends('layouts.nowapp')
@section('content')
   
        

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('molla/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Wishlist<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container ">
					<table class="table table-wishlist table-mobile">
						<thead>
							<tr>
								<th>Product</th>
								<th>Qauntity</th>
								<th>Price</th>
								<th>Stock Status</th>
								
								<th></th>
							</tr>
						</thead>
						@if($wish->count() > 0)
							
							@foreach ($wish as $item)
						<tbody class="product_data">
							
									<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="{{ asset('assets/uploads/posts/'.$item->products->image)}}" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">{{ $item->products->name}}</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td>
									<div class="product-details-quantity">
                                          <div class="input-group text-center mb-3" style="width: 130px">
                                            <button class="input-group-text decrementBtn">-</button>
                                            <input type="text" id="qty"  class="form-control text-center qty" name="qty" value="1" min="1" max="{{ $item->pro_qty }}" step="1" data-decimals="0" required>
                                            <button class="input-group-text incrementBtn">+</button>
                                        </div>
									</td>
								<input type="hidden"  class="pro_id" value="{{ $item->pro_id}}">
								<td class="price-col">{{ Helper::currency_converter($item->products->selling_price) }}</td>
								@if($item->products->qty >= $item->pro_qty)
								<td class="stock-col"><span class="in-stock">In stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2 addtocart"><i class="icon-cart-plus"></i>Add to Cart</button>
								</td>
								<td class="remove-col"><button class="btn-remove-wish"><i class="icon-close"></i></button></td>
								@else
								<td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
								</td>
								<td class="remove-col"><button class="btn-remove-wish"><i class="icon-close"></i></button></td>
								@endif
							</tr>	</tbody>
							@endforeach
							
								
							@else
								<h4>There is no Item on your wishlist</h4>
							@endif
					
					</table><!-- End .table table-wishlist -->
	            	<div class="wishlist-share">
	            		<div class="social-icons social-icons-sm mb-2">
	            			<label class="social-label">Share on:</label>
	    					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
	    					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
	    					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
	    					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
	    					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
	    				</div><!-- End .soial-icons -->
	            	</div><!-- End .wishlist-share -->
            	</div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
@endsection