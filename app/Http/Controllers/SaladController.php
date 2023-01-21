<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class SaladController extends Controller
{
    public function allData(){
        $salad = Dish::where('types_id', 3)->get();
        return view('salad', ['data' => $salad]);
    }
}
