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


Route::group(["namespace" => "\App\Http\Controllers"], function () {
    Route::view("register", "registerForm")->middleware("guest");
    Route::post('register', "AuthController@register");
    Route::view('login', 'login')->middleware("guest");
    Route::post('login', "AuthController@login");
    Route::post("logout", "AuthController@logout");
});

Route::get("home", function () {
    return view('home');
})->middleware("auth")->name("home");



