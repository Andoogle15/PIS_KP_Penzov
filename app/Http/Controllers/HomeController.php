<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Establishment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function allData(){
        $first = Dish::where('id', 2)->get();
        $second = Dish::where('id', 8)->get();
        $third = Dish::where('id', 12)->get();
        $fouth = Dish::where('id', 18)->get();
        $five = Dish::where('id', 15)->get();
        $six = Dish::where('id', 23)->get();
        $seven = Establishment::all();
        return view('home', [
            'one' => $first,
            'two' => $second,
            'three' => $third,
            'four' => $fouth,
            'five' => $five,
            'six' => $six,
            'seven' => $seven
        ]);
    }
}
