<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function loadview(){
    //     return view('users');
    // }
    function loadview($user){
        return view('users',['user'=>$user]);
    }

}
