@extends('layouts.admin')

@section('content')

<div class="card">
<div class="card-header">
    <h4>Add Currency</h4>
</div>
    <div class="card-body">
        <form action="{{ url('add_currency')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Name:</label>
                    <input type="text" value="" placeholder="Currency name"name="currency_name" class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Symbol:</label>
                    <input type="text" value="" placeholder="Symbol" name="currency_symbol" class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Currency Code:</label>
                    <input type="text" value="" placeholder="Code" name="currency_code" class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Exchange Rate:</label>
                    <input type="number" placeholder="Rate" value="" name="exchange_rate" class="form-control" required>
                </div>
            </div>
             
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox"   name="status" class="" required>
                </div>
            </div>
            

           
            <div class="col-md-12 mb-3">
                <input type="submit" value="Submit" class="btn btn-danger">
           
            </div>
        </form>
    </div>
</div>
    
@endsection