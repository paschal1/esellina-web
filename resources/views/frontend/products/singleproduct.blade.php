@extends('layouts.mainapp')
@section('title'.$product->name)



@section('content')
<div class="py-3 mb-4 shadow-1m bg-warning border-top">
    <div class="container">
    <h6 class="mb-0">Collections / {{ $product->category->name}} / {{ $product->name}}</h6>
</div>
</div>

{{-- @foreach($product as $pro) --}}
<div class="container">
    <div class="card shadow mt-5 mb-5 product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/uploads/products/'.$product->image)}}" class="w-100" alt="">
                </div>

                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$product->name}} 
                        @if($product->trending == '1')
                        <label for="" style="font-size: 16px;" class="float-end badge bg-danger trending_tag">{{ $product->trending == '1'? 'Trending':''}}</label>
                        @endif
                    </h2>

                    <hr>
                    <label for="" class="me-3">Orignal Price: <s>&#8358;{{$product->original_price}} </s></label>
                    <label for="" class="fw-bold">Selling Price: &#8358;{{$product->selling_price}} </label>
                
                    <p class="mt-3">
                        {{ $product->small_description }}
                    </p>
                    <hr>
                    @if($product->qty > 0) 
                    <label for="" class="badge bg-success">In Stock</label>
                     @else
                    <label for="" class="badge bg-danger">Out of Stock</label>
                     @endif 

                    

                        <div class="wrapper">

                            <input type="hidden" value="{{ $product->id }}" class="pro_id">
                            <label for="quantity">Quantity: </label>
                            <button class="decre" id="dec" style="width: 20px; height:25px;">-</button>
                            <input type="text"  value="0" id="qty" style="height:25px; margin-left:3px; width:20px;" readonly>
                            <button class="incre" id="inc" style="width: 20px; height:25px; margin-left:13px;">+</button>
                        </div>

                        <div class="col-md-10">
                            <br/>
                            <button type="button" class="btn btn-success me-3 addtocartbtn float-start">Add to wishlist <i class="fas fa-heart"></i></button>
                             <button type="button" class="btn btn-danger me-3 float-start">Add to cart  <i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                       
   {{-- @endforeach                 --}}
        

@endsection

@section('script')

<script>

    $(document).ready(function(){

        $('.addtocartbtn').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.pro_id').val();
            var product_qty = $(this).closest('.product_data').find('#qty').val();
           
            $.ajaxSetup({
                header:{
                    "x-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: '/add_to_cart',
                data:{
                   'product_id' : product_id, 
                   'product_qty' : product_qty,
                } ,
                success: function(response){
                    alert(response.status);
                }
            });

        });

let addBtn = document.querySelector('#dec');
let subBtn = document.querySelector('#inc');
let qty = document.querySelector('#qty');

addBtn.addEventListener('click', ()=>{
    qty.value = parseInt(qty.value) + 1;
});

subBtn.addEventListener('click', ()=>{
    qty.value = parseInt(qty.value) - 1;
});
    });


</script>

@endsection