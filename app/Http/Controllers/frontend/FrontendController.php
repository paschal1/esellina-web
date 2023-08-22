<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
use App\Models\Authorized;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public function index(Request $request){


        $latitude = $request->session()->get('latitude');
        $longitude = $request->session()->get('longitude');
        // $latitude = floatval(10.5403000);
        // $longitude = floatval(7.4309000);
        $radius = 10;
        if($latitude && $longitude){
        // $posts = Post::posts($latitude, $longitude, $radius)->get();
        $posts = Post::selectRaw("(6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians(longitude)) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude))) as distance")
         ->having('distance', '<', $radius)
        ->orderBy('distance', 'asc')
        ->paginate(9);
        }else{
            $posts = Post::paginate(9);
        }

            $users = User::all();
            $authorized = Authorized::where('authorized','1')->get();
            $mostSoldProductId = DB::table('order_items')->select('post_id', DB::raw('SUM(qty) as total_quantity'))->groupBy('post_id')->orderByDesc('total_quantity')->value('post_id');
            $featuredProduct = Post::find($mostSoldProductId)->with('user');
            $trending_category = Category::where('popular', '1')->take(15)->get();
            return view('frontend.index', compact('featuredProduct', 'trending_category', 'posts', 'authorized', 'users'));


    }

    // $nearbyPosts = Post::selectRaw("
    //         id,
    //         name,
    //         slug,
    //         selling_price,
    //         image,
    //         wish_status,
    //         (6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude)))) AS distance
    //     ")
    //     ->having('distance', '<', $radius)
    //     ->orderBy('distance', 'asc');

    //   dd($nearbyPosts);

        // return response()->json($nearbypost);

    public function location(){
        session_start();
        if(isset($_POST['lat']) && isset($_POST['lon'])){
            $_SESSION['latitude'] = $_POST['latitude'];
            $_SESSION['longitude'] = $_POST['longitude'];
        }
    }

public function authorized(){



        return view('frontend.index', compact('authorized'));
    }

    public function category(){

        $category = Category::where('status','0')->get();

        return view('frontend.category', compact('category'));
    }

    public function  viewtime($slug){

        if(Category::where('slug', $slug)->exists()){

            $category = Category::where('slug', $slug)->first();

            $products = Post::where('cate_id', $category->id)->where('status','1')->get();

            return view('frontend.products.index', compact('category','products'));
        }else{
            return redirect('/')->with('category does not exist');
        }




    }

    public function viewpro($cate_slug, $pro_slug){
        if(Category::where('slug', $cate_slug)->exists()){
            if(Post::where('slug', $pro_slug)->exists()){

                $product = Post::where('slug', $pro_slug)->first();
                return view('frontend.products.singleproduct', compact('product'));

        } else{
            return redirect('/')->with('status', 'No such product found');
        }
        }else{
            return redirect('/')->with('status', 'No such category found');
        }
    }

    public function newArrival(){
            $newArrival = Post::latest()->take(16)->get();
            return view('frontend.index', compact('newArrival'));
        }

    public function featuredPost(){
    $fpost = Post::where('featured', '1')->latest()->get();
    return view('frontend.index', compact('fpost'));

}

}
