<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $courses = \App\Models\Course::all();
    return view('rocket', compact('courses'));
});




//courses
Route::group(["namespace"=>"\App\Http\Controllers","middleware"=>"auth"],function (){
    Route::view("createCourse", ["uses" => "createCourse", "as" => "createCourse"]);
    Route::get("listCourses", "CourseController@all");
    Route::post("createCourse", "CourseController@store");
    Route::put("updateCourse/{course}","CourseController@update");
    Route::delete("deleteCourse/{course}", "CourseController@delete");
    Route::get("editCourse/{course}", "CourseController@edit");

});


//auth
Route::group(["namespace" => "\App\Http\Controllers"], function () {
    Route::view("register", "registerForm")->middleware("guest");
    Route::post('register', "AuthController@register");
    Route::view('login', ["uses" => 'login', "as" => "login"])->middleware("guest");
    Route::post('login', "AuthController@login");
    Route::post("logout", "AuthController@logout");
});

Route::get("home", function () {
    return view('home');
})->middleware("auth")->name("home");



