@extends('layouts.admin')

@section('content')

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

<div class="card">
<div class="card-header">
    <h4>Add Category</h4>
</div>
    <div class="card-body">
        <form action="{{ url('insert_category')}}" method="POST" enctype="multipart/form-data">
            @csrf
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
            {{-- <input type="hidden" name="user_id" value="{{$user->id}}"> --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Slug:</label>
                    <input type="text" name="slug" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" id="" class="form-control" rows="3"></textarea>
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
                    <label>Popular</label>
                    <input type="checkbox" name="popular">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Descrip</label>
                     <textarea name="meta_descrip" id="" class="form-control" rows="3"></textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Meta Keywords</label>
                     <textarea name="meta_keywords" id="" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>

   </div>
</div>
</div>

@endsection
