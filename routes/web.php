<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController; 
// use App\Http\Controllers\UserAuth; 
// use App\Http\Controllers\StoreController; 
// use App\Http\Controllers\UploadController; 
use App\Http\Controllers\MembersController;

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
Route::get('list',[MembersController::class,'list']);
Route::get('delete/{id}',[MembersController::class,'delete']);

Route::get('edit/{id}',[MembersController::class,'showData']);
Route::post('edit',[MembersController::class,'update']);









