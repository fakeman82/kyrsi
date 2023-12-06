<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Course;
use App\Models\Category;


class AdminController extends Controller
{
    public function index(){
        $applications = Application::all();
        foreach($applications as $key => $application){
            $applications[$key]->course_id = $this->get_course_from_id($application->course_id);
        }
        
        return view("admin.admin",[
            "applications"=>$applications,
            "category" => Category::all()
    ]);
    }
    protected function get_course_from_id($id_course){
        return Course::find($id_course)->title;
    }


    public function create_course(Request $request){
        $course_info = $request->all();
    
        Course::create([
            "id"=>$course_info["id"],
            "title"=>$course_info["title"],

        ]);
        return redirect("/admin");
    }
}
