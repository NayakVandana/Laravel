<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view("login","users");
// Route::get("users",[UserController::class,'testRequest']);
// Route::post("users",[UserController::class,'testRequest']);
// Route::put("users",[UserController::class,'testRequest']);
Route::delete("users",[UserController::class,'testRequest']);






