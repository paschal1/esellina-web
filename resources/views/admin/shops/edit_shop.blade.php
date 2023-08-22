@extends('layouts.admin')

@section('content')

<div class="card mx-auto" style="width: 50%;">
<div class="card-header">
    <h4>Edit  Your Shop Details
    </h4>
</div>
    <div class="card-body">
        <form action="{{ url('adminupdate_shop/'.$shop->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Shop Name:</label>
                    <input type="text" name="shop_name" class="form-control" value="{{$shop->shop_name}}">
                    @if($errors->has('shop_name'))
                    <span class="text-danger">{{ $errors->first('shop_name')}}</span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Shop Phone Number:</label>
                    <input type="text" name="shop_phone" class="form-control" value="{{$shop->shop_phone}}">
                     @if($errors->has('shop_phone'))
                    <span class="text-danger">{{ $errors->first('shop_phone')}}</span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Shop Email Address:</label>
                    <input type="email" name="shop_email" class="form-control" value="{{$shop->shop_email}}" >
                     @if($errors->has('shop_email'))
                    <span class="text-danger">{{ $errors->first('shop_email')}}</span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Shop Address:</label>
                    <input type="text" name="shop_address" class="form-control" value="{{$shop->shop_address}}">
                     @if($errors->has('shop_address'))
                    <span class="text-danger">{{ $errors->first('shop_address')}}</span>
                    @endif
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" id="" class="form-control" rows="3" >{{ $shop->description }}</textarea>
                </div>
            </div>


         <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Shop Website:</label>
                    <input type="url" name="website" class="form-control" value="{{ $shop->website }}">
                     @if($errors->has('website'))
                    <span class="text-danger">{{ $errors->first('website')}}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control" >
                 @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image')}}</span>
                    @endif
            </div>
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>

@endsection
