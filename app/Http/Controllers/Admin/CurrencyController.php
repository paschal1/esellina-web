<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

use Laravel\Ui\Presets\React;

class CurrencyController extends Controller
{
    
    public function currencyload(Request $request){
    // dd($request->all());
    session()->put('currency_code',$request->currency_code);

    $currency = Currency::where('currency_code', $request->currency_code)->first();

   session()->put('currency_symbol',$currency->currency_symbol);

   session()->put('exchange_rate',$currency->exchange_rate);

   $response['status']=true;
   return $response;
    }

    public function currency(){
        $currency = Currency::orderBy('id', 'DESC')->get();
        return view('admin.currency.index', compact('currency'));
    }

     public function edit_currency($id){
        $currency = Currency::find($id);
        return view('admin.currency.edit_currency', compact('currency'));
    }

public function addcurrency(){
        
        return view('admin.currency.add_currency');
    }


     public function insert(Request $request){
    
    $currency = new Currency;
    $currency->currency_name = $request->input('currency_name');
    $currency->currency_symbol = $request->input('currency_symbol');
    $currency->currency_code = $request->input('currency_code');
    $currency->exchange_rate = $request->input('exchange_rate');
    $currency ->status = $request->input('status') == TRUE ? '1':'0';

    $currency->save();
    return redirect('dashboard')->with('status', 'Currency Updated Successfully');

    }

    public function update_currency(Request $request, $id){
    
    $currency = Currency::find($id);
    $currency->currency_name = $request->input('currency_name');
    $currency->currency_symbol = $request->input('currency_symbol');
    $currency->currency_code = $request->input('currency_code');
    $currency->exchange_rate = $request->input('exchange_rate');
    $currency ->status = $request->input('status') == TRUE ? '1':'0';

    $currency->update();
    return redirect('currency')->with('status', 'Currency Updated Successfully');

    }

    public function delete($id){
      $currency = Currency::find($id);
      
      $currency->delete();
      return redirect('currency')->with('status', 'Currency Deleted Successfully');
    }


}



