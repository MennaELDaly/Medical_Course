<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\onecoursecontroller;
use App\Http\Controllers\oneblogcontroller;



Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/courses',[CourseController::class, 'index']);
    
Route::get('/medicalarticles',[BlogController::class, 'index']);


Route::get('/course/{id}', [CourseController::class, 'show']);

Route::get('/one_of_Articles', [oneblogcontroller::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/courses/{id}',[coursecontroller::class, 'show']);
