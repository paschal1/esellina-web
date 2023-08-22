<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function ratings(){

        $ratings = Rating::with(['user','post'])->get()->toArray();
        return view('admin.ratings.ratings', compact('ratings'));
    }

     public function approve($id){

        $ratings = Rating::find($id);
        return view('admin.ratings.approve', compact('ratings'));
    }

    public function update(Request $request, $id){

        $ratings = Rating::find($id);
        $ratings ->status = $request->input('status') == TRUE ? '1':'0';
        $ratings->update();
        return redirect('ratings')->with('You approved the user ratings.');
    }
}
