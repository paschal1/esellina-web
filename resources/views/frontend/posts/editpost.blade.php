@extends('layouts.frontender')

@section('content')

<div class="card mx-auto">
<div class="card-header">
    <h4>Edit / Update Post
    </h4>
</div>
    <div class="card-body">
        <form action="{{ url('updatepost/'.$post->id)}}" method="POST" enctype="multipart/form-data">
             @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="cate_id" id="" class="form-control">
                        <option value="">Select a Category</option>

                           <option value="{{$post->category->id}}">{{$post->category->name}}</option>

                    </select>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" value="{{ $post->name }}" name="name" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Slug:</label>
                    <input type="text" value="{{ $post->slug }}" name="slug" class="form-control">
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Small Description</label>
                    <textarea name="small_description" id="" class="form-control" rows="3">{{ $post->small_description }}</textarea>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" id="" class="form-control" rows="3">{{ $post->description }}</textarea>
                </div>
            </div>
        <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Orignal Price</label>
                    <input type="number" name="original_price" value="{{ $post->original_price }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Selling Price</label>
                    <input type="number" name="selling_price" value="{{ $post->selling_price }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" name="tax" value="{{ $post->tax }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" name="qty" value="{{ $post->qty }}" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{ $post->status == 1 ? 'checked':'' }} class="">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <label>Treding</label>
                    <input type="checkbox" {{ $post->trending == 1 ? 'checked':'' }} name="trending">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Title</label>
                    <input type="text" value="{{ $post->meta_title }}" name="meta_title" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Descrip</label>
                     <textarea name="meta_descrip"  id="" class="form-control" rows="3">{{ $post->meta_descrip }}</textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Keywords</label>
                     <textarea name="meta_keywords" id="" class="form-control" rows="3">{{ $post->meta_keywords }}</textarea>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control">
            </div>
            @if ($post->image)
        <img src="{{asset('assets/uploads/products'.$post->image)}}" alt=" post image">
        @endif
            <div class="col-md-12 mb-3">
                <input type="submit" value="Update" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>

@endsection
