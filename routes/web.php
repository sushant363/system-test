<?php

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

Route::get('/', 'App\Http\Controllers\FormController@index');
Route::get('/save', function () {
    return view('welcome');
});

// Route::get('/list','App\Http\Controllers\FormController@index');

Route::post('/save','App\Http\Controllers\FormController@save')->name('form.submit');
