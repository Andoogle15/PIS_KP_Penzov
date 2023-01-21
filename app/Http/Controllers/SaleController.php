<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        $first = Dish::where('id', 2)->get();
        $second = Dish::where('id', 8)->get();
        $third = Dish::where('id', 12)->get();
        $fouth = Dish::where('id', 18)->get();
        $five = Dish::where('id', 15)->get();
        $six = Dish::where('id', 23)->get();
        return view('sales', [
            'one' => $first,
            'two' => $second,
            'three' => $third,
            'four' => $fouth,
            'five' => $five,
            'six' => $six
        ]);
    }


}
