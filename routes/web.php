<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GroupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoboticsKitController;

Route::resource('groups', GroupController::class);
Route::resource('robotics-kits', RoboticsKitController::class);
Route::resource('courses', CourseController::class);