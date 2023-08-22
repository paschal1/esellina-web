@extends('layouts.admin')

@section('content')

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with Currency Detials</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> Currency name </th>
                            <th> Currency symbol </th>
                            <th> Currency code </th>
                            <th> Exchange Rate to USD </th>
                            <th> Status </th>
                            <th> Creation Date </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($currency as $user_curr)
                          <tr class="table">
                            <td>{{ $user_curr->id}} </td>
                            <td> {{ $user_curr->currency_name}} </td>
                             <td> {{ $user_curr->currency_symbol}} </td>
                             <td> {{ $user_curr->currency_code}} </td>
                             <td> {{ $user_curr->exchange_rate}} </td>
                            <td> @if($user_curr->status == 1) Active @else inActive @endif </td>
                            
                            <td> {{ $user_curr->created_at}} </td>
                            <td> <a href="{{ url('edit_currency'.$user_curr->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('delete_currency'.$user_curr->id)}}" class="btn btn-danger">Delete</a>
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