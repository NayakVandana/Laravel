<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\UserAuth; 

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

Route::view('profile','profile');
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login');
});

Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::post("user",[UserAuth::class,'userLogin']);







