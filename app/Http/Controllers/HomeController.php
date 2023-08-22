<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
use App\Models\Authorized;
use App\Models\Contact;
use App\Models\Currency;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $user = User::all();

            $posts = Post::paginate(12);
            $products = Post::all();
            $currency = Currency::where('status', '1')->get();
            $mostSoldProductId = DB::table('order_items')->select('post_id', DB::raw('SUM(qty) as total_quantity'))->groupBy('post_id')->orderByDesc('total_quantity')->value('post_id');
            $featuredProduct = Post::find($mostSoldProductId);
            $tproduct = Post::where('status', '1')->take(1)->get();
            $trending_category = Category::where('popular', '1')->take(15)->get();
            return view('home', compact('featuredProduct', 'trending_category', 'posts','products', 'currency', 'tproduct'));


    }




    public function Adminindex(){

        $orders = Order::where('status', '0')->paginate(6);
        $messages = Contact::paginate(3);
        return view('admin.index', compact('orders', 'messages'));
    }


}
