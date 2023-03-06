<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PlaygroundController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playground', 'App\Http\Controllers\PlaygroundController@index')->name('playground');
Route::get('/fetch', 'App\Http\Controllers\PlaygroundController@fetch')->name('fetch');