@extends('layouts.frontender')

@section('content')

<div class="card mx-auto" style="width: 50%;">
<div class="card-header">
    <h4>Add Or Post A Product
    </h4>
</div>
    <div class="card-body">
        <form action="{{ url('insert_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(Auth::user()->authorized == 1 || Auth::user()->role_as == 1 )
             <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="shop_id" id="" class="form-control"   required>
                        <option value="">Select a Shop</option>
                        @foreach ($shop as $item)

                           <option value="{{$item->id}}">{{$item->shop_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
@endif
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="cate_id" id="" class="form-control"   required>
                        <option value="">Select a Category</option>
                        @foreach ($category as $item)
                           <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="hidden" class="hidden" name="user_id" value="{{$user->id}}">
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Slug:</label>
                    <input type="text" name="slug" class="form-control" required>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Small Description</label>
                    <textarea name="small_description" id="" class="form-control" rows="3" required></textarea>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" id="" class="form-control" rows="3" required></textarea>
                </div>
            </div>
        <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Orignal Price</label>
                    <input type="number" name="original_price" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Selling Price</label>
                    <input type="number" name="selling_price" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" name="tax" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" class="">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <label>Treding</label>
                    <input type="checkbox" name="trending">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Descrip</label>
                     <textarea name="meta_descrip" id="" class="form-control" rows="3" required></textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Keywords</label>
                     <textarea name="meta_keywords" id="" class="form-control" rows="3" required></textarea>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>

@endsection
