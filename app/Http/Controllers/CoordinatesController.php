<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinatesController extends Controller
{
    public function setCoordinates(Request $request){
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        //session
        $request->session()->put('latitude', $latitude);
        $request->session()->put('longitude', $longitude);
        return response()->json(['status'=> 'Thanks enjoy your search for product, or make a post to sell.!']);


    }
}
