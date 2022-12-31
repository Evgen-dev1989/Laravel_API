<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/token', function (Request $request) {$token = $request->session()->token();$token = csrf_token();});


Route::get('/clients', 'App\Http\Controllers\ClientsController@allData')->name('clients');

Route::post('/clients/form', 'App\Http\Controllers\ClientsController@form')->name('form');
