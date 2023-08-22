<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminShopController extends Controller
{
     public function adminlistshop(){

        $shops = Shop::paginate(16);

        return view('admin.shops.shop', compact('shops'));
    }

//      public function list($shop){

//         $shops = Shop::with(['category.post' => function ($query){ $query->take(8);}])->find($shop);
//         $categories = $shops->category()->paginate(16);

//         $mostSoldProductId = DB::table('order_items')->select('post_id', DB::raw('SUM(qty) as total_quantity'))->groupBy('post_id')->orderByDesc('total_quantity')->value('post_id');
//         $featuredProduct = Post::find($mostSoldProductId);

//         return view('admin.shops.cate_product', compact('shops', 'categories', 'featuredProduct'));
//     // }
// }

// public function listproduct($cate){
//     $posts = Category::with('post')->find($cate);
//     $post = $posts->post()->paginate(16);
//     return view('admin.shops.posts', compact('posts', 'post'));
// }

     public function edit($id){

        $shop = Shop::find($id);
        return view('admin.shops.edit_shop', compact('shop'));
    }

    public function post_shop(){
        return view('admin.shops.shop_form');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[

            'shop_name' => 'required',
            'shop_email' => 'required|email|unique:shops',
            'shop_phone' => 'required',
            'shop_address' => 'required',
            'website' => 'required',
            'image' => 'required|image|max:2048',


        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $shop = new Shop();

    if($request->hasFile('image')){

      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/shops', $filename);
      $shop->image = $filename;

    }
        $shop->user_id = Auth::user()->id;
        $shop->shop_name = $request->input('shop_name');
        $shop->shop_email = $request->input('shop_email');
        $shop->shop_phone = $request->input('shop_phone');
        $shop->shop_address = $request->input('shop_address');
         $shop->description = $request->input('description');
        $shop->website = $request->input('website');

        $shop->save();

        return redirect('adminlistshop')->with('status','Shop added Successfully');
    }

    public function update_shop(Request $request, $id){

        $validator = Validator::make($request->all(),[

            'shop_name' => 'required',
            'shop_email' => 'required',
            'shop_phone' => 'required',
            'shop_address' => 'required',
            'website' => 'required',



        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $shop =  Shop::find($id);
         if($request->hasFile('image')){
        $path = 'assets/uploads/shops'.$shop->image;

        if(File::exists($path)){
          File::delete($path);
        }

      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/shops', $filename);
      $shop -> image = $filename;
      }
        $shop->shop_name = $request->input('shop_name');
        $shop->shop_email = $request->input('shop_email');
        $shop->shop_phone = $request->input('shop_phone');
        $shop->shop_address = $request->input('shop_address');
         $shop->description = $request->input('description');
        $shop->website = $request->input('website');

        $shop->update();

        return redirect('adminlistshop')->with('status','Shop Updated Successfully');

    }

    public function delete($id){

        $shop = Shop::find($id);
         $path = 'assets/uploads/shops'.$shop->image;
        if(File::exists($path))
        {
            File::delete($path);
        }

        $shop->delete();
        return redirect('adminlistshop')->with('status','Shop Deleted Successfully');

    }
}
