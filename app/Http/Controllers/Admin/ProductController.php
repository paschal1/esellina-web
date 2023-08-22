<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products(){
        $products = Post::all();
        return view('admin.products.index', compact('products'));
    }

    public function add_products(){
      $user = Auth::user();
         $category = Category::all();
        return view('admin.products.add_product', compact('category','user'));
    }

    public function insert_pro(Request $request){
     $product = new Post();
    if($request->hasFile('image')){
      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/products', $filename);

     $product -> image = $filename;
    }
    $product ->user_id = $request->input('user_id');
     $product ->cate_id = $request->input('cate_id');
     $product ->name = $request->input('name');
     $product ->slug = $request->input('slug');
     $product ->small_description = $request->input('small_description');
     $product ->description = $request->input('description');
     $product ->original_price = $request->input('original_price');
     $product ->selling_price = $request->input('selling_price');
     $product ->tax = $request->input('tax');
     $product ->qty = $request->input('qty');
     $product ->status = $request->input('status') == TRUE ? '1':'0';
     $product ->trending = $request->input('trending') == TRUE ? '1':'0';
     $product ->meta_title = $request->input('meta_title');
     $product ->meta_descrip = $request->input('meta_descrip');
     $product ->meta_keywords = $request->input('meta_keywords');
     $product->save();
     return redirect('products')->with('status', 'Product Added Successfully');
    }
    public function editing ($id){
      $product = Post::find($id);
      return view('admin.products.edit_pro', compact('product'));
    }

    public function updateproduct(Request $request, $id){

        $product = Post::find($id);
      if($request->hasFile('image')){
        $path = 'assets/uploads/product'.$product->image;

        if(File::exists($path)){
          File::delete($path);
        }

      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/product', $filename);
      $product -> image = $filename;
      }

     $product ->name = $request->input('name');
     $product ->slug = $request->input('slug');
     $product ->small_description = $request->input('small_description');
     $product ->description = $request->input('description');
     $product ->original_price = $request->input('original_price');
     $product ->selling_price = $request->input('selling_price');
     $product ->tax = $request->input('tax');
     $product ->qty = $request->input('qty');
     $product ->status = $request->input('status') == TRUE ? '1':'0';
     $product ->trending = $request->input('trending') == TRUE ? '1':'0';
     $product ->meta_title = $request->input('meta_title');
     $product ->meta_descrip = $request->input('meta_descrip');
     $product ->meta_keywords = $request->input('meta_keywords');
     $product->save();
     return redirect('products')->with('status', 'Post Updated Successfully');

    }

    public function destroy($id){
        $product = Post::find($id);
        $path = 'assets/uploads/products'.$product->image;
        if(File::exists($path))
        {
            File::delete($path);
        }

        $product->delete();
        return redirect('products')->with('status', 'Product Deleted Successfully');
    }

    public function search(){
      $search = $_GET['query'];
      $products = Product::where('name', 'LIKE', '%'.$search.'%')->with('category')->take(9)->get();
      $posts = Post::where('name', 'LIKE', '%'.$search.'%')->take(9)->get();
      $users = User::where('name', 'LIKE', '%'.$search.'%')->take(9)->get();
      return view('home_search', compact('products', 'posts', 'users'));
    }
}



/// from

