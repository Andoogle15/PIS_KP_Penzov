<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeOrderController extends Controller
{
    public function index(){
        return view('orderpage');
    }
}
