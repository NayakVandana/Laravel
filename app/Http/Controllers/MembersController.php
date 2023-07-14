<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //
    function operations()
    {
         

        // ** get data


        //echo "code will be here";
        // $data= DB::table('members')->get();
        // return view('list',['data'=>$data]);
      

        //** only 4 id data get data
        // return DB::table('members')
        // ->where('id',4)->get();  
        
        // return DB::table('members')
        // ->where('address','vapi')->get();


        //** find data

        // return (array)DB::table('members')->find(4);


        //** count data

        //return (array)DB::table('members')->count();



        //** insert data

        // return DB::table('members')
        // ->insert([
        //    'name'=>'ruhi',
        //    'email'=>'ruhi@gmail.com',
        //    'address'=>'vapi',
        // ]);



        //** Update data

        // return DB::table('members')
        // ->where('id',4)
        // ->update([
        //    'name'=>'ruhi medam',
        //    'email'=>'ruhi@gmail.com',
        //    'address'=>'vapi',
        // ]);



        //** Update data

        return DB::table('members')
        ->where('id',4)->delete();
    } 
}
