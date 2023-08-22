 @extends('layouts.admin')

@section('content')


                       <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer Feedback table</h4>
                    <p class="card-description"> Mail list
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>

                            <th> Email </th>
                            <th> Date </th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach($view as $message)
                          <tr>
                            <td>{{$message->id}} </td>

                                <td>

                               {{$message->email}}</td>

                            <td>@php

                                $date = Carbon\Carbon::parse($message->created_at);
                            @endphp
                            {{$formatDate = $date->diffForHumans();}} </td>
                          </tr>

                           @endforeach
                        </tbody>
                      </table>

                      {{$view->onEachSide(1)->links()}}
                    </div>
                  </div>
                </div>
              </div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->


                      @endsection
