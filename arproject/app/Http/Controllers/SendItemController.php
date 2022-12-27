<?php

namespace App\Http\Controllers;
use App\Models\Device ;

use Illuminate\Http\Request;

class SendItemController extends Controller
{
    function mydata(Request $req)
    {
        $sendItem = new Device;
        $sendItem->name = $req->name ;
        $sendItem->email = $req->email ;
        $sendItem->address = $req->address ;
       $result =  $sendItem->save();

       if($result){
        return ['value' => 'Success'];
       }
       else{
        return ['value' => 'Failed Result'];

       }

    }
}
