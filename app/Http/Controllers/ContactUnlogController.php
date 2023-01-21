<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUnlogController extends Controller
{
    public function index(){
        return view('contactsUnlog');
    }
}
