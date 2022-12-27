<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantUnlogController extends Controller
{
    public function index(){
        return view('restaurantsUnlog');
    }
}
