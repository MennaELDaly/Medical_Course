<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Team;
use App\Models\Accreditation;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::get();
        return view('courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
/*
    class CoursesController extends Controller
    {
        //
        public function index()
        {
    
           $courses =  courses::get();
           return view('eldwrat',compact('courses'));
        }
    
        public function show($id)
        {
            $courses =  courses::get();
            //
            $course =  courses::find($id);
            $doctor =  doctor::get();
            $accreditation =  accreditation::get();
            return view('orthodontics',compact('courses','course','doctor','accreditation'));
           // dd($courses);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $courses =  Course::get();
            //
            $courses =  Course::find($id);
            $teams =  Team::get();
            $accreditations =  Accreditation::get();
            return view('one_of_courses',compact('courses','courses','teams','accreditations'));
           // dd($courses);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
