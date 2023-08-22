@extends('layouts.admin')

@section('content')

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with users Detials</h4>
                    <p class="card-description"> Check out <code>.table-{color}</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> Full name </th>
                            <th> Email </th>
                            <th> Account Type </th>
                            <th> Authorization Type </th>
                            <th> Creation Date </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                          <tr class="table">
                            <td>{{ $user->id}} </td>
                            <td> {{ $user->name}} </td>
                             <td> {{ $user->email}} </td>
                            <td> @if($user->role_as == 1) Admin @else User @endif </td>
                            <td> @if($user->authorize == 1) Authorized @else Not Authorized @endif </td>
                            <td> {{ $user->created_at}} </td>
                            <td> <a href="{{ url('edituser'.$user->id) }}" class="btn btn-warning">Edit</a>
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

              
@endsection