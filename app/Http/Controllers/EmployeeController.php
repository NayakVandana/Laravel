<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getData()
    {
        //return "Hello from Controller";

        //**get data employee table
        //return DB::table('employee')->get();

       
        //**join
        // return DB::table('employee')
        // ->join('company','employee.id','=','company.employee_id')
        // ->get();


         //**join with select condition
        // return DB::table('employee')
        // ->join('company','employee.id','=','company.employee_id')
        // ->select('company.*','employee.*')
        // ->get();

        //**join with where and name according find condition
        // return DB::table('employee')
        // ->join('company','employee.id','=','company.employee_id')
        // ->where('employee.name','nirali')
        // ->get();


         //**join with where and id according find condition
        // return DB::table('employee')
        // ->join('company','employee.id','=','company.employee_id')
        // ->where('employee.id','2')
        // ->get();


         //**join with where and ony name fetch according find condition
        //  return DB::table('employee')
        //  ->join('company','employee.id','=','company.employee_id')
        //  ->where('employee.id','2')
        //  ->select('employee.name')
        //  ->get();


         //**join with where and company name fetch according find condition
         return DB::table('employee')
         ->join('company','employee.id','=','company.employee_id')
         ->where('employee.id','2')
         ->select('employee.name','company.name')
         ->get();
    
    }
}
