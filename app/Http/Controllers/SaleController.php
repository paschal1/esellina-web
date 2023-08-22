<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function fetch_fproduct(){

        $fproduct = Post::orderBySales()->first();
        return view('', compact(''));
    }
}
