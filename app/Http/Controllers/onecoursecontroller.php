<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Team;
use App\Models\Accreditation;
use App\Models\Department;


class onecoursecontroller extends Controller
{
    //
    public function index()
    {
        $courses =  Course::get();
        $teams =  Team::get();
        $departments =  Department::get();
        $accreditations =  Accreditation::get();
        return view('one_of_courses', compact('courses','teams','accreditations','departments'));
    }
}
