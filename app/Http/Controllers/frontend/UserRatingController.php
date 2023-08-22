<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRatingController extends Controller
{
   public function store(Request $request) {
    if ($request->isMethod('post')) {

        $data = $request->all();

        $ratingCount = Rating::where(['user_id' => Auth::user()->id, 'post_id' => $data['post_id']])->count();

        if ($ratingCount > 0) {
            $message = "Your rating already exists for this Product";
            return redirect()->back()->with('status', $message);
        } else {
            $me = new Rating();
            $me->user_id = Auth::user()->id;
            $me->post_id = $request->input('post_id');
            $me->review = $request->input('review');
            $me->rating = $request->input('rate');
            $me->status = 0;
            $me->save();
            return redirect()->back()->with('status', 'Review sent successfully. It will show once approved.');
        }
    }
}



    }

