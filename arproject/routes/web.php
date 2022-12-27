<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('send',[SendDataController::class,'sendData']);
Route::view('login','login');

