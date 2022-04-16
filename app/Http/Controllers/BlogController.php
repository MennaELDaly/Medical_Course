<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Department;
use App\Models\Team;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::get();
        return view('medicalarticles',compact('blogs'));
    }

    public function show($id)
    {
        //
        $blogs = Blog::get();
        //
            $blog =  Blog::find($id);
            $teams =  Team::get();
            $departments =  Department::get();
            return view('one_of_Articles',compact('blogs','blog','teams','departments'));
            // dd($courses);
        
    }
}
