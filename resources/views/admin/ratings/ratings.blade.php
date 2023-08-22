@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Table with Review & Ratings Detials</h4>
                     <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> User name  </th>
                            <th> User email</th>
                            <th> Product name </th>
                            <th> Date </th>
                            <th> Review </th>
                            <th> Ratings </th>
                            <th> Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ratings as $user)
                          <tr class="table">
                            <td>{{ $user['id']}} </td>
                            <td>{{ $user['user']['name']}} </td>
                            <td>{{ $user['user']['email']}} </td>
                            <td>{{ $user['post']['name']}} </td>
                            <td> {{ $user['created_at']}} </td>
                             <td> {{ $user['review']}} </td>
                             <td>{{ $user['rating']}} </td>

                            <td> @if($user['status'] == 0) Pending @else Approved @endif </td>
                            @if($user['status'] == 0)
                            <td> <a href="{{ url('approve'.$user["id"]) }}" class="btn btn-warning"> Approve</a>
                              @else
                              <td> <a href="{{ url('approve'.$user["id"]) }}" class="btn btn-danger"> De-approve</a>
                              @endif
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
