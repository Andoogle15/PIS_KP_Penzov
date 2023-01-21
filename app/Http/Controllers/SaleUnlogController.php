<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleUnlogController extends Controller
{
    public function index(){
        return view('salesUnlog');
    }
}
