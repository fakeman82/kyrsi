<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(3);
        return view("index",["all_courses"=>$courses, compact("courses")]);
    }

    

}
