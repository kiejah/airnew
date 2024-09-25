<?php

use App\Http\Controllers\PropertyApiController;
use App\Http\Controllers\AuthApiController;
use Illuminate\Http\Request;
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

Route::get('/properties',[PropertyApiController::class,'index']);
Route::get('/properties/{id}',[PropertyApiController::class,'show']);
Route::get('/properties/search/{name}',[PropertyApiController::class,'search']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('/logout',[AuthApiController::class,'logout']);  
});