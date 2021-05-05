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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/addEvent', function () {
    return view('addEvent');
});
Route::get('/showEvent', function () {
    return view('showEvent');
});
Route::get('login','App\Http\Controllers\AuthController@login');
Route::post('check', 'App\Http\Controllers\AuthController@check')->name('auth.check');
Route::get('check', 'App\Http\Controllers\AuthController@dashboard');
