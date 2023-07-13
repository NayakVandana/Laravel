<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        //echo "db connection will be here";
        //echo DB::select("select * from users");
        return DB::select("select * from users");
    }

}
