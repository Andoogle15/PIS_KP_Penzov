<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function allData(){
        $est_first = Dish::where('types_id', 1)->get();
        $est_second = Dish::where('types_id', 2)->get();
        $est_salad = Dish::where('types_id', 3)->get();
        $est_drinks = Dish::where('types_id', 4)->get();
        $est_pizza = Dish::where('types_id', 5)->get();
        return view('establishment', [
            'first' => $est_first,
            'second' => $est_second,
            'salad' => $est_salad,
            'drinks' => $est_drinks,
            'pizza' => $est_pizza
        ]);
    }
}
