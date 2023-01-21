<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function allData(){
        $drinks= Dish::where('types_id', 4)->get();
        return view('drinks', ['data' => $drinks]);
    }
}
