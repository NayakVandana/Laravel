<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UserController extends Controller
{    
        //  function testRequest()
        //  {
        //    echo"form submited";
        //  } 

        //submited data get 
        function testRequest(Request $req)
         {
           return $req->input();
         } 
}
