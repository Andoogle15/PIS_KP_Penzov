<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index(){
        return view('establishment');
    }
}
