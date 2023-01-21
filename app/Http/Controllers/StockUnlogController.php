<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockUnlogController extends Controller
{
    public function index(){
        return view('stocksUnlog');
    }
}
