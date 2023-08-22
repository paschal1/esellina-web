<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myorder(){
        
        $orders = Order::where('user_id', Auth::id())->get();

        return view('frontend.orders.my_order', compact('orders'));
    }

    public function adminorder(){
        
        $orders = Order::where('status', '0')->get();

        return view('admin.orders.index', compact('orders'));
    }

     public function orderhistory(){
        
        $orders = Order::where('status', '1')->get();

        return view('admin.orders.history', compact('orders'));
    }
     public function view($id){
        
        $order = Order::where('id', $id)->get();

        return view('admin.orders.view', compact('order'));
    }

    
     public function view_myorders($id){
        
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();

        return view('frontend.orders.vieworder', compact('orders'));
    }

    public function  user_account(){
        
        $users = User::where('id', Auth::id())->first();
         $orders = Order::where('user_id', Auth::id())->get();

        return view('frontend.user_dashboard', compact('users', 'orders'));
    }

   
    public function updateorder(Request $request,  $id){
         
        $orders = Order::find($id);
        
        $orders->status = $request->input('status');

        $orders->update();

        return redirect('adminorder')->with('status', 'Order Updated Successfully');
    }

    
}
