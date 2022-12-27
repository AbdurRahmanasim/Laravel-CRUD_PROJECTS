<?php

namespace App\Http\Controllers;
use App\Models\Device ;

use Illuminate\Http\Request;



class UpdateController extends Controller
{
    function update(Request $req){
       $updateUser = Device::find($req->id);
       $updateUser->name = $req->name ;
       $updateUser->email = $req->email ;
       $updateUser->address = $req->address ;
       $result = $updateUser->save();
       if($result){
        return ['result' => 'Success'];
       }
       else{
        return ['result' => 'Failed'];
       }
    }
}
