<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ApiPractice;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SendItemController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('getData',[ApiPractice::class,"getData"]);
Route::get('getmyData/{id?}',[UsersController::class,"viewData"]);

Route::post('sendItem' , [SendItemController::class,'mydata']);
Route::put('update' , [UpdateController::class,'update']);

Route::get('search/{name}' , [SearchController::class,'search']);

Route::post('validate' , [ValidateController::class,'textData']);

Route::post('upload' , [FileController::class,'upload']);


