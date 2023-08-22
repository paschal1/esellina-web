<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
     public function add_towishlist(Request $request){

       if(Auth::check()){
         $prod_id = $request->input('pro_id');
        if(Post::find($prod_id)){
            $wishlist = new Wishlist();
            $wishlist->pro_id = $prod_id;
            $wishlist->user_id = Auth::id();
            $wishlist->save();
            return response()->json(['status' => "Product Added Successfully"]); 
        }else{
            return response()->json(['status' => "Product Does not Exist"]); 
        }
       }else{
         return response()->json(['satus' => "Login to Continue"]);
       }
      }
   

     public function wishlist(){
        $wish = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.posts.wishlist', compact('wish'));

    }

    
    public function wishlistcount() {

            $wishlistcount = Wishlist::where('user_id', Auth::id())->get()->count();
            return response()->json(['count' => $wishlistcount]);
         }

     public function remove(Request $request){
         if(Auth::check()){
        $pro_id = $request->input('pro_id');

        if(Wishlist::where('pro_id', $pro_id)->where('user_id', Auth::id())->exists()){

            $cartlist = Wishlist::where('pro_id', $pro_id)->where('user_id', Auth::id())->first();
            $cartlist->delete();
             return response()->json(['status' => "Wishlist item Deleted Successfully"]);
        }
        
        }else{
            return response()->json(['status' => "Login to Continue"]);
         }

         
         }
}
