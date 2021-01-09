<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('corral', 'CorralController')->only(['index', 'create', 'store', 'edit', 'update']);
Route::resource('tipo_animal', 'TipoAnimalController')->only(['index', 'create', 'store', 'edit', 'update']);
Route::resource('animal', 'AnimalController')->only(['index', 'create', 'store', 'edit', 'update']);
Route::get('reporte', 'ReporteController')->name('reporte');
