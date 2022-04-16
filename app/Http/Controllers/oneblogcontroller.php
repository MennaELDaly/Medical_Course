<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Department;
use App\Models\Team;


class oneblogcontroller extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::get();
        $teams =  Team::get();
        $departments =  Department::get();
        return view('one_of_Articles',compact('blogs','teams','departments'));
    }
}
