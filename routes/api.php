<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware'=>['auth:sanctum'],'as'=>'.api'],function(){
    Route::get('logout', [AuthController::class, 'logout']);
    Route::apiResource('bonus_points', App\Http\Controllers\Api\BonusPointController::class);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
