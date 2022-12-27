<?php

namespace App\Http\Controllers;
use App\Models\Device ;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search($name){
      return Device::where('name', "like" , '%'.$name.'%')->get();
    }
}
