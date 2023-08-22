<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Authorized;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AuthorizeController extends Controller
{
   
        public function edit_user($id){

        $users = User::find($id);
        
        return view('admin.authorized.authorize_user', compact('users'));
    }

     public function editinguser(Request $request, $id) {
      
         $authorized = User::find($id);
        
         if($request->hasFile('image')){
        $path = 'assets/uploads/category'.$authorized->image;

        if(File::exists($path)){
          File::delete($path);
        }
      $file = $request->file('avatar');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('storage/users-avatar', $filename);
      $authorized -> avatar = $filename;
      }
    $authorized ->name = $request->input('name');
     $authorized ->email = $request->input('email');
    
     $authorized ->role_as = $request->input('role_as') == TRUE ? '1':'0';
     $authorized ->authorize = $request->input('authorize') == TRUE ? '1':'0';
          $authorized->update();;
           return redirect('authorize_user')->with('status', 'User Authorized Successfully');
    }

    
    public function view_users(){

        $users = User::all();
        
        return view('admin.authorized.users', compact('users'));
    }

    // public function authorize_user(){

    //     $users = User::all();

    //     return view('admin.authorized.authorize_user', compact('users'));
    // }
}
