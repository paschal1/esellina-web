<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
   public function category(){
      $category = Category::all();
      return view('admin.category.index', compact('category'));
    }

    public function addcategory(){
      $user = Auth::user();
       $shop = Shop::all();
      return view('admin.category.add_category', compact('user','shop'));
    }

     public function insert(Request $request){
     $category = new Category();
    if($request->hasFile('image')){
      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/category', $filename);

      $category -> image = $filename;
    }

      $category ->user_id = Auth::user()->id;
      $category ->shop_id = $request->input('shop_id');
     $category ->name = $request->input('name');
     $category ->slug = $request->input('slug');
     $category ->description = $request->input('description');
     $category ->status = $request->input('status') == TRUE ? '1':'0';
     $category ->popular = $request->input('popular') == TRUE ? '1':'0';
     $category ->meta_title = $request->input('meta_title');
     $category ->meta_descrip = $request->input('meta_descrip');
     $category ->meta_keywords = $request->input('meta_keywords');
     $category->save();
     return redirect('index')->with('status', 'Category Added Successfully');
    }

    public function editcategory($id){
      $category = Category::find($id);
      return view('admin.category.edit', compact('category'));
    }

    public function updatecategory(Request $request, $id){
      $category = Category::find($id);
      if($request->hasFile('image')){
        $path = 'assets/uploads/category'.$category->image;

        if(File::exists($path)){
          File::delete($path);
        }
      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/category', $filename);
      $category -> image = $filename;
      }
      $category ->user_id = $request->input('user_id');
      $category ->shop_id = $request->input('shop_id');
    $category ->name = $request->input('name');
     $category ->slug = $request->input('slug');
     $category ->description = $request->input('description');
     $category ->status = $request->input('status') == TRUE ? '1':'0';
     $category ->popular = $request->input('popular') == TRUE ? '1':'0';
     $category ->meta_title = $request->input('meta_title');
     $category ->meta_descrip = $request->input('meta_descrip');
     $category ->meta_keywords = $request->input('meta_keywords');
     $category->update();
     return redirect('index')->with('status', 'Category Updated Successfully');
    }

    public function delete($id){
      $category = Category::find($id);
      if($category->image){
        $path = 'assets/uploads/category/'.$category->image;
        if(File::exists($path)){
          File::delete($path);
        }
      }
      $category->delete();
      return redirect('index')->with('status', 'Category Deleted Successfully');
    }
}
