<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MembersController extends Controller
{
    //
    function index()
    {
      // return "One to Many";
      return  Member::find(2)-> getDevice;      
    }
}
