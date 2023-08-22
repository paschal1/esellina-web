<?php
use App\Http\Controllers\Admin\AuthorizeController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\UserRatingController;
use App\Http\Controllers\NewsEmailController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShopController;
// use Chatify\Http\Controllers\Api\MessagesController;
use Chatify\Http\Controllers\MessagesController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',[FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware'=>['auth', 'IsAdmin']], function(){
//     Route::get('/dashboard', function(){
//         return view('admin.dashboard');
//     });


// });
Route::post('add_to_wishlist', [WishlistController::class, 'add_towishlist']);
Route::get('/search', [ProductController::class, 'search']);
Route::post('add_to_cart', [CartController::class, 'add_to_cart']);
 Route::post('update_cart', [CartController::class, 'update_cart']);
 Route::post('btn-remove-wish', [WishlistController::class, 'remove']);
 Route::get('load-wishlist-data', [WishlistController::class, 'wishlistcount']);



Route::middleware(['auth'])->group(function(){

    // Route::get('/{id}', 'MessagesController@index')->name('user');
    Route::get('load-cart-data', [CartController::class, 'cartcount']);
    Route::get('cart', [CartController::class, 'view_cart']);
    Route::post('btn-remove', [CartController::class, 'remove']);
    Route::get('checkout', [CheckoutController::class, 'checkoutnow']);
    Route::get('myorder', [UserController::class, 'myorder']);
    Route::get('view_myorders/{id}', [UserController::class, 'view_myorders']);

    Route::post('proceed_to_pay', [CheckoutController::class, 'paynow']);
     Route::any('place_order', [CheckoutController::class, 'place_order']);
     Route::any('verify-pay', [CheckoutController::class, 'verify']);
    Route::get('post', [PostController::class, 'post']);
    Route::post('insert_post', [PostController::class, 'insert_post']);
    Route::get('view_posts', [PostController::class, 'view_posts']);
    Route::get('myposts', [PostController::class, 'myposts']);
    Route::get('wishlist', [WishlistController::class, 'wishlist']);
    Route::get('single/{cate_slug}/{prod_slug}', [PostController::class, 'single']);
    Route::get('categorylist', [PostController::class, 'categorylist']);
    Route::get('editpost/{id}', [PostController::class, 'editpost']);
    Route::put('updatepost/{id}', [PostController::class, 'updatepost']);
    Route::get('deletepost{id}', [PostController::class, 'destroy']);
    Route::put('updatewishlist/{id}', [WishlistController::class, 'updatewishlist']);
    Route::get('user-dashboard', [UserController::class, 'user_account']);
    Route::get('shoppost', [ShopController::class, 'post_shop']);
    Route::get('singleshop', [ShopController::class, 'view_singleshop']);
    Route::get('viewshop', [ShopController::class, 'view_shop']);


     Route::get('editshop/{id}', [ShopController::class, 'edit']);
     Route::get('deleteshop{id}', [ShopController::class, 'delete']);
     Route::post('update_shop/{id}', [ShopController::class, 'update_shop']);
    Route::get('list/{shop}', [ShopController::class, 'list']);
   Route::get(' listallcate/{cate}', [ShopController::class, 'listproduct']);
     Route::post('postshop', [ShopController::class, 'store']);
     Route::post('/add-rating', [UserRatingController::class, 'store']);
Route::post('newsletter', [NewsEmailController::class, 'storeNewsEmail']);



});

Route::middleware(['auth', 'IsAdmin'])->group(function(){

    // Route::get('/dashboard', function(){
    //     return view('admin.index');
    // });
    Route::get('/Adashboard', [App\Http\Controllers\HomeController::class, 'Adminindex'])->name('Adashboard');
     Route::get('category', [FrontendController::class, 'category']);
     Route::get('viewtime{slug}', [FrontendController::class, 'viewtime']);
     Route::get('category/{cate_slug}/{pro_slug}', [FrontendController::class, 'viewpro']);




     Route::get('adminorder', [UserController::class, 'adminorder']);
     Route::get('order-history', [UserController::class, 'orderhistory']);
     Route::get('admin/views/{id}', [UserController::class, 'view']);
     Route::put('updateorder/{id}', [UserController::class, 'updateorder']);
          Route::get('messages', [ContactController::class, 'messages']);



    Route::get('/index', [CategoryController::class, 'category']);

    Route::get('add_category', [CategoryController::class, 'addcategory']);

    Route::post('insert_category', [CategoryController::class, 'insert']);

    Route::get('currency', [CurrencyController::class, 'currency']);
    Route::get('edit_currency{id}', [CurrencyController::class, 'edit_currency']);
     Route::put('update_currency/{id}', [CurrencyController::class, 'update_currency']);
     Route::get('add-currency', [CurrencyController::class, 'addcurrency']);
    Route::post('add_currency', [CurrencyController::class, 'insert']);
    Route::get('delete_currency{id}', [CurrencyController::class, 'delete']);


    Route::get('edit_pro{id}', [CategoryController::class, 'editcategory']);
    Route::put('update_category/{id}', [CategoryController::class, 'updatecategory']);
    Route::get('delete{id}', [CategoryController::class, 'delete']);

    Route::get('products', [ProductController::class, 'products']);

    Route::get('add_products', [ProductController::class, 'add_products']);

     Route::post('insert_product', [ProductController::class, 'insert_pro']);

     Route::get('editing{id}', [ProductController::class, 'editing']);

     Route::put('update_product/{id}', [ProductController::class, 'updateproduct']);

     Route::get('delete-product{id}', [ProductController::class, 'destroy']);

     Route::get('authorize_user',  [AuthorizeController::class, 'authorize_user']);

     Route::get('edituser{id}', [AuthorizeController::class, 'edit_user']);

     Route::get('view_users',  [AuthorizeController::class, 'view_users']);

      Route::put('editing_user/{id}', [AuthorizeController::class, 'editinguser']);

      #ratings
      Route::get('ratings',  [RatingController::class, 'ratings']);
      Route::put('update/{id}', [RatingController::class, 'update']);
       Route::get('approve{id}', [RatingController::class, 'approve']);

       //get email newsletter for admin
       Route::get('viewnewsletter', [NewsEmailController::class, 'letter']);
       Route::get('/admin/email', [NewsEmailController::class, 'index'])->name('email.index');
        Route::post('/admin/email/send', [NewsEmailController::class, 'sendEmail'])->name('email.send');
     //Route::get('/dashboard', 'Admin.FrontendController@Index');
        // Route::get('categories', 'Admin\CategoryController@Index');
        //admin shop
           Route::get('admineditshop/{id}', [AdminShopController::class, 'edit']);
     Route::get('admindeleteshop{id}', [AdminShopController::class, 'delete']);
     Route::post('adminupdate_shop/{id}', [AdminShopController::class, 'update_shop']);
    Route::get('adminlistshop', [AdminShopController::class, 'adminlistshop']);
   Route::get('adminlistallcate/{cate}', [AdminShopController::class, 'listproduct']);
     Route::post('adminpostshop', [AdminShopController::class, 'store']);
     Route::get('adminshoppost', [AdminShopController::class, 'post_shop']);
    });


    Route::get('contact_us', [ContactController::class, 'contact_us']);
    Route::post('connect', [ContactController::class, 'connect'])->name('connect');
    Route::get('about_us', [ContactController::class, 'about_us']);
    Route::post('currency-load', [CurrencyController::class, 'currencyload']);
     Route::post('/location', [CoordinatesController::class,'setCoordinates']);

