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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');

Route::post('/tasks', 'TaskController@store');

Route::put('/tasks/{task}', 'TaskController@update');

Route::delete('/tasks/{task}', 'TaskController@destroy');