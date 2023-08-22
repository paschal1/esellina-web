@extends('layouts.admin')

@section('content')

<div class="card">
<div class="card-header">
    <h4>Edit or Update Currency</h4>
</div>
    <div class="card-body">
        <form action="{{ url('update_currency/'.$currency->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Name:</label>
                    <input type="text" value="{{ $currency->currency_name }}" name="currency_name" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Symbol:</label>
                    <input type="text" value="{{ $currency->currency_symbol }}" name="currency_symbol" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Code:</label>
                    <input type="text" value="{{ $currency->currency_code }}" name="currency_code" class="form-control">
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Exchange Rate:</label>
                    <input type="number" value="{{ $currency->exchange_rate }}" name="exchange_rate" class="form-control">
                </div>
            </div>
             
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox"  {{ $currency->status == 1 ? 'checked':'' }} name="status" class="">
                </div>
            </div>
            

           
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">
           
            </div>
        </form>
    </div>
</div>
    
@endsection