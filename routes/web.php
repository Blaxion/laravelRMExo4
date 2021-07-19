<?php

// use App\Http\Controllers\administratorController;

use App\Http\Controllers\administratorController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\VegetableController;
use Illuminate\Support\Facades\Route;

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

Route::post('/adminAuth',[administratorController::class,'authentification']);
Route::resource('admin', administratorController::class);


Route::resource('fruits', FruitController::class);
Route::resource('vegetables', VegetableController::class);