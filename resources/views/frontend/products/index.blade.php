@extends('layouts.mainapp')
@section('title')
{{$category->name}}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-1m bg-warning border-top">
    <div class="container">
    <h4 class="mb-0">Collections / {{ $category->name}} </h4>
</div>
</div>

<div class="py">
    <div class="container" >
        <div class="row">

            <div class="col-md-12">
                <div class="row">

                    
                    @foreach($products as $pro)

                    
                             <div class="col-md-3 mt-3">
                                
                <div class="card" >
                    
                    <img src="{{asset('assets/uploads/products/'.$pro->image)}}" alt="category image" class="img-thumbnail h-4" style="height: 200px;">
                   <a href="{{url('category/'.$category->slug.'/'.$pro->slug)}}">
                    <div class="card-body" style="align-content: center; align-text:center;">
                        
                       <span class=""> <h5>{{ $pro->name}}</h5></span>
                        <span class="float-start">&#8358;{{ $pro->selling_price }}</span>
                        <span class="float-end"><s>&#8358;{{ $pro->original_price }}</s></span>

                    
                    </div>
                </div>
            </a>
            </div>
                       
                   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection