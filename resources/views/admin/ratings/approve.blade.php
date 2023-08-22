@extends('layouts.admin')

@section('content')

<div class="card m-50 p-50">
<div class="card-header">
    <h4>Approve
    </h4>
</div>
    <div class="card-body">
        <form action="{{ url('update/'.$ratings->id)}}" method="POST" enctype="multipart/form-data">
             @csrf
            @method('PUT')



             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{ $ratings->status == 1 ? 'checked':'' }} class="">
                </div>
            </div>


            <div class="col-md-12 mb-3">
                <input type="submit" value="Update" class="btn btn-danger">

            </div>
        </form>
    </div>
</div>

@endsection
