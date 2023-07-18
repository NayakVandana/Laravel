<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    //
    function add(Request $req)
    {
        $device = new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result)
        {
            return ["result"=>"Data has been saved"];
        }
        else{
            return ["result"=>"faild"];
        }
        
       
    }

    function update(Request $req){
        $device = Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result)
        {
            return ["result"=>"Data has been updated"];
        }
        else{
            return ["result"=>"faild"];
        }
    }



    function delete($id){

         
        $device=Device::find($id);
        $result = $device->delete();
        if($result)
        {
            return ["result"=>"Data has been deleted".$id];
        }
        else{
            return ["result"=>"faild"];
        }
        
    }
}
