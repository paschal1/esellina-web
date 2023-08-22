<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Post;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class CheckoutController extends Controller
{
    public function checkoutnow(){
        $old_cartitem = Cart::where('user_id', Auth::id())->get();
        foreach($old_cartitem as $item)
        {
            if(Post::where('id', $item->pro_id)->where('qty', '>=', $item->pro_qty)->exists()){

                $removeitem = Cart::where('user_id', Auth::id())->where('pro_id', $item->pro_id)->first();
                // $removeitem->delete();
            }
        }

        $cartitem = Cart::where('user_id', Auth::id())->get();

        return view('frontend.shops.checkout', compact('cartitem'));
    }


     public function place_order(Request $request){
        // $curl = curl_init();
        // $scr = 'sk_test_b8d583c64ecd6f9007d8b7ae9d172afcaf548c29';
        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => "",
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_SSL_VERIFYHOST => 0,
        //         CURLOPT_SSL_VERIFYPEER => 0,
        //         CURLOPT_TIMEOUT => 30,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => "GET",
        //         CURLOPT_HTTPHEADER => array(
        //         "Authorization: Bearer $scr",
        //         "Cache-Control: no-cache",
        //         ),
        //     ));

            // $response = curl_exec($curl);
            // $err = curl_error($curl);

            // curl_close($curl);
            // $data = json_decode($response);
            // return [$data];

        $order = new Order();
         $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->country = $request->input('country');
        $order->street = $request->input('street');
        $order->apartment = $request->input('apartment');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zip = $request->input('zip');
        $order->tracking_no =  'esellina'.rand(5551,6661);
        $order->note = $request->input('note');
        $order->shipping_fee = $request->input('shipping');
        $order->payment_id = $request->input('payment_id');
        $order->payment_mode = $request->input('payment_mode');

        $total = 0;
        $total_price = 'total_price';


        $cartitem_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitem_total as $pos){
            $total += $pos->posts->selling_price;

        }
        $order->$total_price = $total;
        $order->save();

        $order->id;
        $cartitem = Cart::where('user_id', Auth::id())->get();
        foreach($cartitem as $item){
            Order_item::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'post_id' => $item->pro_id,
                'qty' => $item->pro_qty,
                'price' => $item->posts->selling_price,
            ]);

            $post = Post::where('id', $item->pro_id)->first();
            $post->qty = $post->qty - $item->pro_qty;
            $post->update();

            // $posts = Post::find($post->id);
            // if($posts){
            // $sale = new Sale();
            // $sale->product_id = $posts->id;
            // $sale->qauntity_sold = $item->qty;
            // $sale->sale_amount = $posts->price * $sa;
            // $sale->save();

            // }
        }

        if(Auth::user()->street == null){

            $user = User::where('id', Auth::id())->first();

        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->coupon = $request->input('coupon');
        $user->cname = $request->input('cname');
        $user->phone = $request->input('phone');
        $user->country = $request->input('country');
        $user->street = $request->input('street');
        $user->apartment = $request->input('apartment');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip = $request->input('zip');
        $user->account = $request->input('account') == TRUE ? '1':'0';
        $user->ship =   $request->input('ship') == TRUE ? '1':'0';
        $user->notes = $request->input('note');
        $user->update();

        }
        $cartitem = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitem);

        if($request->input('payment_mode') == "Paid by Paystack"){
            return response()->json(['status'=> 'Order placed Successfully']);
        }
           return redirect('home')->with('status', 'Order placed Successfully');

     }


     public function paynow(Request $request){

        $cartitem = Cart::where('user_id', Auth::id())->get();
        $total_price = 0;
        $shipping = 0;
        foreach($cartitem as $item){
             $shipping += $item->pro_qty * 10;
            $total_price += $item->posts->selling_price * $item->pro_qty + $shipping;
        }




        $firstname     = $request->input('firstname');
        $lastname   = $request->input('lastname,');
        $cname   = $request->input('cname');
        $countryname   = $request->input('countryname');
        $address1   = $request->input('address1');
        $address2   = $request->input('address2');
        $town   = $request->input('town');
        $statename   = $request->input('statename');
        $postal   = $request->input('postal');
        $phoneno   = $request->input('phoneno');
        $emailaddress   = $request->input('emailaddress');
        $create   = $request->input('create');
        $shipping    = $request->input('shipping ');
        $comment   = $request->input('comment,');

        return response()->json([
            'firstname'=>  $firstname,
            'lastname'=>  $lastname,
            'cname'=>  $cname,
            'countryname'=>  $countryname,
            'address1'=>  $address1,
            'address2'=>  $address2,
            'town'=>  $town,
            'statename'=>  $statename,
             'postal'=>  $postal,
            'phoneno'=>  $phoneno,
            'emailaddress'=>  $emailaddress,
             'create'=>  $create,
            'shipping'=>  $shipping,
            'comment'=>  $comment,
            'total_price'=>  $total_price
        ]);
     }


       public function verify(Request $request){

           $curl = curl_init();
            $scr = 'sk_test_b8d583c64ecd6f9007d8b7ae9d172afcaf548c29';
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transaction/{$request->transaction_id}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $scr",
                "Content-Type: application/json",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            $data = json_decode($response);
            return [$data];
        // $transaction_id = ;


        }
}
