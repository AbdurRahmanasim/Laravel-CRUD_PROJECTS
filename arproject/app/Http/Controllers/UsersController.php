<?php

namespace App\Http\Controllers;
use App\Models\Device ;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewdata($id = null)
    {
        return $id ? Device::find($id) : Device::all() ;
    }
}
