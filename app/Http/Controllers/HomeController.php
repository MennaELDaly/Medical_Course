<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Team;
use App\Models\DoctorCourse;



class HomeController extends Controller
{
    //
    public function index()
    {
    
        $blogs = Blog::get();
       // $courses = Course::get();
        $teams = Team::get();
        $courses = Course::join('department', 'department.id', '=', 'courses.department_id')
        ->select('courses.*', 'department.name_ar as departmentarbic', 'department.name_en as departmentenglish')
        ->get();
    
        return view('home',compact('blogs','courses','teams'));
    }
}
