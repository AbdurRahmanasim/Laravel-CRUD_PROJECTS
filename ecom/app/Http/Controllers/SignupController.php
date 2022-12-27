<?php

namespace App\Http\Controllers;

use App\Models\Signup ;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    function send(Request $req){
       $users = new Signup ;
       $users->name = $req->name ;
       $users->email = $req->email ;
       $users->contactnumber = $req->contactnumber ;
       $users->password = $req->password ;
       $users->save();
       return redirect('/login') ;
    }
}
