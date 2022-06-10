<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;

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

Route::get('/home',[CargoController::class,'create']);

// Route::get('/home','CargoController@create')->name('create');

Route::post('file/import',[CargoController::class,'import']);

Route::get('cargo/view',[CargoController::class,'view'])->name('cargo.view');

// Route::post('cargo/view','CargoController@view')->name('import');

