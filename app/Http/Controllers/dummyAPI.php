<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"vandana","email"=>"vandana@gmail.com","address"=>"vapi"];
    }
}
