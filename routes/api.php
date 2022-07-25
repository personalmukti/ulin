<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('projects', App\Http\Controllers\API\ProjectAPIController::class);




Route::resource('perencanaans', App\Http\Controllers\API\PerencanaanAPIController::class);


Route::resource('desas', App\Http\Controllers\API\DesaAPIController::class);


Route::resource('tes', App\Http\Controllers\API\TesAPIController::class);
