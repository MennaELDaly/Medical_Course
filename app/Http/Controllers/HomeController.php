<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Team;

class HomeController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::get();
        $courses = Course::get();
        $teams = Team::get();
        return view('home',compact('blogs','courses','teams'));
    }
}
