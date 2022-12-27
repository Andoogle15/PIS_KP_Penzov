<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Database\Eloquent\Model;



class FirstCourseController extends Controller
{
//    public function allData(){
//        $first_course = new Dish;
//        return view('firstCourse', ['data' =>$first_course->where('types_id', 1)->get()]);
//    }

    public function allData(){
        $first_course = Dish::where('types_id', 1)->get();
        return view('firstCourse', ['data' => $first_course]);
    }
}
