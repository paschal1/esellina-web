@extends('layouts.admin')

@section('content')
 <div class="col-12 grid-margin stretch-card">
                <div class="card">

<div class="card-header">
    <h4>Update Or Authorize User
    </h4>
</div>
   
                  <div class="card-body">
                    <h4 class="card-title">Fill the Form </h4>
                    <p class="card-description"> To Update User Information </p>
                    <form class="forms-sample" action="{{ url('editing_user/'.$users->id)}}"  method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                        <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" style="border: 2px solid gray;" name="name" class="form-control" id="exampleInputName1" value="{{$users->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email"  style="border: 2px solid gray;" name="email" class="form-control" id="exampleInputEmail3" value="{{ $users->email}}">
                      </div>
                     
                      <div class="form-group">
                        
                        <div class="input-group col-xs-12">
                          {{-- <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image"> --}}
                          {{-- <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span> --}} <input type="file" name="avatar" class="form-control"><br/>
                          
                         @if ($users->avatar)
                         <img src="{{asset('storage/users-avatar'.$users->avatar)}}" alt=" User Profile image">
                         @endif
                        
                        </div>
                      </div>
                       <div class="row">
                <div class="col-md-6 mb-3">
                    <label>User Role</label>
                    <input type="checkbox" name="role_as" {{ $users->role_as == 1 ? 'checked':'' }} class="">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <label>Authorization Status</label>
                    <input type="checkbox" {{ $users->authorize == 1 ? 'checked':'' }} name="authorize">
                </div>
            </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              
           
                
        
    </div>
</div>
    
@endsection