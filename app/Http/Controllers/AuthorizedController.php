<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Authorized;
use App\Models\User;

class AuthorizedController extends Controller
{
    public function authorized(){

        $authorized = Authorized::where('authorized','1')->get();

        return view('frontend.index', compact('authorized'));
    }

     public function authorize_user(){

        $authorize = User::all();

        return view('admin.authorize.authorize_user', compact('authorize'));
    }

    public function authorize(Request $request) {
      
         $authorize = new Authorized();
         $authorize->user_id = $request->input('user_id');
          $authorize->authorize = $request->input('authorized') == TRUE ? '1':'0';
          $authorize->save;
    }

       

    
}
