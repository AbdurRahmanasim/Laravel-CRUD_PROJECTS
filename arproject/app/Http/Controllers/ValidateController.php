<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    function textData(Request $req){

        $rules =array(
            'address' => "required" ,
            'name' => 'required | max:5 '
        );
        $validate = Validator::make($req->all(),$rules);
        if($validate->fails()){
            return $validate->errors();
        }
        else{
            return ['result' => 'Success'];
            }
    }
}
