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


//Route::apiResource('elementos_lista','ElementosListaController');
//Route::get('tercero','TerceroController');
//Route::apiResource('tercero','TerceroController');


Route::get('tercero/', ['App\Http\Controllers\TerceroController','create']);/////mirar alumnos
Route::post('tercero/data', ['App\Http\Controllers\TerceroController','index']);/////
Route::post('tercero/{id?}', ['App\Http\Controllers\TerceroController','store']);
Route::delete('tercero/{id}', ['App\Http\Controllers\TerceroController', 'destroy']);
Route::get('tercero/{id}', ['App\Http\Controllers\TerceroController','show']);
Route::put('tercero/{id}', ['App\Http\Controllers\TerceroController', 'update']);





