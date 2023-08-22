<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Sale;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function post(){
         $user = Auth::user();
         $shop = Shop::all();
        $category = Category::all();
        return view('frontend.posts.post', compact('category', 'user', 'shop'));

    }

     public function view_posts(){
        // $posts = DB::table('posts')->paginate(9);
        $users = User::all();
        $posts = Post::paginate(16);
        return view('frontend.posts.view_posts', compact('posts', 'users'));
    }

     public function myposts(){
        // $posts = DB::table('posts')->paginate(9);
         $user = Auth::user();
         $id = $user->id;
         $posts = Post::paginate(9)->where('user_id', $id);
        // $posts = DB::select("SELECT * FROM posts WHERE user_id = '$user->id'")->paginate(9);
        return view('frontend.posts.myposts', compact('posts'));
    }

    public function insert_post(Request $request){
     $post = new Post();

     //retrieve latitude and longitude from session
     $latitude = $request->session()->get('latitude');
        $longitude = $request->session()->get('longitude');
        //check if the session is set and the user location is on
        if($latitude && $longitude){

    if($request->hasFile('image')){
      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/posts', $filename);

     $post -> image = $filename;
    }

    $post->latitude = $request->session()->get('latitude');
    $post->longitude = $request->session()->get('longitude');
    $post ->user_id = $request->input('user_id');
     $post ->cate_id = $request->input('cate_id');
     $post ->shop_id = $request->input('shop_id');
     $post ->name = $request->input('name');
     $post ->slug = $request->input('slug');
     $post ->small_description = $request->input('small_description');
     $post ->description = $request->input('description');
     $post ->original_price = $request->input('original_price');
     $post ->selling_price = $request->input('selling_price');
     $post ->tax = $request->input('tax');
     $post ->qty = $request->input('qty');
     $post ->status = $request->input('status') == TRUE ? '1':'0';
     $post ->trending = $request->input('trending') == TRUE ? '1':'0';
     $post ->meta_title = $request->input('meta_title');
     $post ->meta_descrip = $request->input('meta_descrip');
     $post ->meta_keywords = $request->input('meta_keywords');



     $post->save();
     return redirect('post')->with('status', 'Post Added Successfully');

  }else{
    //return error message telling the user to refresh and turn on location to be able to post
    return redirect('post')->with('status', 'To make a post make sure you allowed the site to access your location, this helps users to find product nearby!!');
  }
    }
    public function editpost ($id){
      $post = Post::find($id);
      return view('frontend.posts.editpost', compact('post'));
    }



    public function updatepost(Request $request, $id){

        $post = Post::find($id);
      if($request->hasFile('image')){
        $path = 'assets/uploads/posts'.$post->image;

        if(File::exists($path)){
          File::delete($path);
        }

      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/posts', $filename);
      $post -> image = $filename;
      }

     $post ->name = $request->input('name');
     $post ->slug = $request->input('slug');
     $post ->small_description = $request->input('small_description');
     $post ->description = $request->input('description');
     $post ->original_price = $request->input('original_price');
     $post ->selling_price = $request->input('selling_price');
     $post ->tax = $request->input('tax');
     $post ->qty = $request->input('qty');
     $post ->status = $request->input('status') == TRUE ? '1':'0';
     $post ->trending = $request->input('trending') == TRUE ? '1':'0';
     $post ->meta_title = $request->input('meta_title');
     $post ->meta_descrip = $request->input('meta_descrip');
     $post ->meta_keywords = $request->input('meta_keywords');
     $post->save();
     return redirect('myposts')->with('status', 'Post Updated Successfully');

    }



    public function categorylist(){
         $user = Auth::user();
        $category = Category::paginate(12);
        return view('frontend.shops.category_index', compact('category', 'user'));

    }


     public function single($cate_slug, $prod_slug){

      if(Category::where('slug', $cate_slug)->exists()){

        if(Post::where('slug', $prod_slug)->exists()){

          $posts = Post::where('slug', $prod_slug)->first();
          $like = Post::where('cate_id', $posts->cate_id)->get();
          //ratings fetch
          $ratings = Rating::with('user')->where('status',1)->where('post_id',$posts->id)->orderBy('id', 'Desc')->get()->toArray();

          //get average rating
          $ratingSum = Rating::where('status', 1)->where('post_id', $posts->id)->sum('rating');
          $ratingCount = Rating::where('status', 1)->where('post_id', $posts->id)->count();
          $averageRating = round($ratingSum/$ratingCount,2);
          $averageStarRating = round($ratingSum/$ratingCount);

        return view('frontend.posts.view_single_post', compact('posts', 'like', 'ratings', 'averageRating', 'averageStarRating'));

      }else{
        return redirect('/')->with('status', 'The link was broken!');
      }

      }else{
         return redirect('/')->with('status', 'The link was broken!');
      }


    }

    public function destroy($id){
        $post = Post::find($id);
        $path = 'assets/uploads/posts'.$post->image;
        if(File::exists($path))
        {
            File::delete($path);
        }

        $post->delete();
        return redirect('myposts')->with('status', 'Post Deleted Successfully');
    }

    public function search(){
      $search = $_GET['query'];
      $products = Product::where('name', 'LIKE', '%'.$search.'%')->with('category')->take(9)->get();
      $posts = Post::where('name', 'LIKE', '%'.$search.'%')->take(9)->get();
      $users = User::where('name', 'LIKE', '%'.$search.'%')->take(9)->get();
      return view('home_search', compact('products', 'posts', 'users'));
    }


}
