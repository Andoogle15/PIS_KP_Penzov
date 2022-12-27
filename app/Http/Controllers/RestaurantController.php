<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function allData(){
        $estab = Establishment::all();
        return view('restaurants', ['data' => $estab]);
    }

}
