@extends('layouts.admin')

@section('content')
 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
<div class="card">
<div class="card-header">
    <h4>Edit or Update Category</h4>
</div>
    <div class="card-body">
        <form action="{{ url('update_category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

             <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="cate_id" id="" class="form-control"   required>
                        <option value="">Select a Category</option>
                        @foreach ($shop as $item)
                        <option value="Select">Select</option>
                           <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" value="{{ $category->name }}" name="name" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Slug:</label>
                    <input type="text" value="{{ $category->slug }}" name="slug" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" id=""  class="form-control" rows="3">{{ $category->description }}</textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox"  {{ $category->status == 1 ? 'checked':'' }} name="status" class="">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <label>Popular</label>
                    <input type="checkbox" {{ $category->popular == 1 ? 'checked':''  }} name="popular">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Descrip</label>
                     <textarea name="meta_descrip" value="" id="" class="form-control" rows="3">{{ $category->meta_descrip }}</textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Keywords</label>
                     <textarea name="meta_keywords" id="" value="" class="form-control" rows="3">{{ $category->meta_keywords }}</textarea>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" value="" class="form-control">
            </div>
        @if ($category->image)
        <img src="{{asset('assets/uploads/category'.$category->image)}}" alt=" category image">
        @endif
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>
</div>

</div>

@endsection
