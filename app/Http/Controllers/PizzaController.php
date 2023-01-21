<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function allData(){
        $pizza = Dish::where('types_id', 5)->get();
        return view('pizza', ['data' => $pizza]);
    }
}
