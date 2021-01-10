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

Route::resource('corral', 'ApiControllers\CorralController')->only(['index', 'store', 'update','show']);
Route::resource('tipo_animal', 'ApiControllers\TipoAnimalController')->only(['index', 'store', 'update','show']);
Route::resource('animal', 'ApiControllers\AnimalController')->only(['index', 'store', 'update','show']);
Route::get('corral/{id}/animales','ApiControllers\CorralController@traerAnimales');
Route::get('corral-all','ApiControllers\CorralController@all');
