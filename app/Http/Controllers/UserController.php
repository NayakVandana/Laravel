<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function loadview(){
    //     return view('users');
    // }
    function loadview(){
        $data=['anil','sam','tonny'];
        return view('users',['users'=>$data]);
    }

}
