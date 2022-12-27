<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;


class SecondCourseController extends Controller
{
    public function allData(){
        $second_course = Dish::where('types_id', 2)->get();
        return view('secondCourse', ['data' => $second_course]);
    }
}

