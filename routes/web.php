<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\YahooController;
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

// Route::get('/', function () {
//     // return view('login');
// });
// Route::post("registerUser", [UserController::class,'register']);
// Route::view("register","registerUser");

Route::post("loginUser", [UserController::class,'login']);
Route::view("login","loginUser");

 
Route::resource('/', YahooController::class);


