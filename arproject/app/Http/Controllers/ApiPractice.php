<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiPractice extends Controller
{
    function getData(){
       return [
        "name" => "Abdur Rahman Asim" ,
        "Year" => "2nd Year" ,
        "Age" => "19" ,
        "Department" => "IEM" ,
       ];
    }
}
