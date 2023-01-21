<?php

namespace App\Http\Controllers;

use App\Models\Estab;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function allData(){
        $estab = Estab::all();
        return view('restaurants', ['data' => $estab]);
    }

}
