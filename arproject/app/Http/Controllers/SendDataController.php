<?php

namespace App\Http\Controllers;
use App\Models\Device ;
use Illuminate\Http\Request;

class SendDataController extends Controller
{
    function sendData(Request $req){
      $mydata = new Device ;
      $mydata->name = $req->name ;
      $mydata->email = $req->email ;
      $mydata->address = $req->address ;
      $mydata->save();
      return redirect('/api/getmyData');
    }
}
