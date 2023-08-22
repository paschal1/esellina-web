<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Post;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function add_to_cart(Request $request){
        $product_id = $request->input('pro_id');
         $product_qty = $request->input('qty');

         if(Auth::check()){

            $pro_check = Post::where('id', $product_id)->first();

            if($pro_check){

                if(Cart::where('pro_id', $product_id)->where('user_id', Auth::id())->exists()){
                  
                    return response()->json(['status' => $pro_check->name." Already Added to Cart"]); 
                }else{

                
                if(Cart::where('pro_id', $product_id)->where('user_id', Auth::id())->exists()){
                    return response()->json(['status' => $pro_check->name." Already Added to Cart"]);
                }else{
                $cartitem = new Cart();
                $cartitem->pro_id = $product_id;
                $cartitem->user_id = Auth::id();
                $cartitem->pro_qty = $product_qty;
                $cartitem->save();
                return response()->json(['status' => $pro_check->name." Added to Cart"]);
            }
        }

        }
         }else{
            return response()->json(['status' => "Login to Continue"]);
         }

         
    }

    public function view_cart() {

            $cartlist = Cart::where('user_id', Auth::id())->get();
            return view('frontend.cart', compact('cartlist'));
         }

    
public function cartcount() {

            $cartcount = Cart::where('user_id', Auth::id())->get()->count();
            return response()->json(['count' => $cartcount]);
         }

     public function remove(Request $request){
         if(Auth::check()){
        $pro_id = $request->input('pro_id');

        if(Cart::where('pro_id', $pro_id)->where('user_id', Auth::id())->exists()){

            $cartlist = Cart::where('pro_id', $pro_id)->where('user_id', Auth::id())->first();
            $cartlist->delete();
             return response()->json(['status' => "Cart item Deleted Successfully"]);
        }
        
        }else{
            return response()->json(['status' => "Login to Continue"]);
         }

         
         }
        
public function update_cart(Request $request){
        $pro_id = $request->input('pro_id');
         $prod_qty = $request->input('qty');

          if(Auth::check()){

            if(Cart::where('pro_id', $pro_id)->where('user_id', Auth::id())->exists()){

                $cart = Cart::where('pro_id', $pro_id)->where('user_id', Auth::id())->first();
                $cart->pro_qty = $prod_qty;
                $cart->update();
                return response()->json(['status' => "Qauntity Updated"]);
            }
         }
       }

    }

