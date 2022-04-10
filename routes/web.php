<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\onecoursecontroller;




Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/courses',[CourseController::class, 'index']);
    
Route::get('/medicalarticles',[BlogController::class, 'index']);

Route::get('/one_of_courses',[onecoursecontroller::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);

Route::get('/one_of_Articles', function () {
    return view('one_of_Articles');
});

