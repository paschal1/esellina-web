@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('order-history')}}" class="btn btn-warning text-white">Order History</a><br/>
                    <h4 class="card-title">Table with new Orders Detials</h4>
                     <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> Order Date  </th>
                            <th> Tracking Number </th>
                            <th> Total Price </th>
                            <th> Status </th>
                           
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $user)
                          <tr class="table">
                            <td>{{ $user->id}} </td>
                            <td> {{ $user->created_at}} </td>
                             <td> {{ $user->tracking_no}} </td>
                            <td> {{$user->total_price}}</td>
                            <td> @if($user->status == 0) Pending @else Approved @endif </td>
                            
                            <td> <a href="{{ url('admin/views/'.$user->id) }}" class="btn btn-warning">View</a>
                            <a href="{{ url('deleteuser'.$user->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                            
                          </tr>
                         @endforeach
                         
                        </tbody>
                      </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
