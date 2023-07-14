<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{   
      
        function operations()
         {
            // echo "code will be here";
            

            //** get data 
            // return DB::table('members')->get();


            // ** sum data 
            //return DB::table('members')->sum('id');



            // ** min data 
            // return DB::table('members')->min('id');


            // ** min data 
            //return DB::table('members')->max('id');


            // ** min data 
            return DB::table('members')->avg('id');
         } 
}
