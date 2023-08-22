@extends('layouts.mainapp')
@section('title')
Category
@endsection

@section('content')

<div class="py">
    <div class="container" >
        <div class="row">

            <div class="col-md-12">
                <div class="row">

                    <h4>All Categories</h4>
                    @foreach($category as $cate)

                    
                             <div class="col-md-3 mt-3">
                                <a href="{{ url('viewtime'.$cate->slug) }}">
                <div class="card" >
                    
                    <img src="{{asset('assets/uploads/category/'.$cate->image)}}" alt="category image" class="img-thumbnail h-4" style="height: 200px;">
                    <div class="card-body" style="align-content: center; align-text:center;">
                        
                       <span class=""> <h5>{{ $cate->name}}</h5></span>

                     <p>{{ $cate->description}}</p>
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