<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@check');
Route::post('password/forgot','App\Http\Controllers\ForgotController@forgot');
Route::post('password/reset','App\Http\Controllers\ForgotController@reset');
Route::post('/recover', 'App\Http\Controllers\AuthController@recover');

Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

    Route::get('/currentUser', 'App\Http\Controllers\AuthController@getAuthUser');
    Route::put('/editCurrentUser', 'App\Http\Controllers\AuthController@update');

    Route::get('/test', function(){
        return response()->json(['foo'=>'bar']);
    });

    Route::get('/categories/select', 'App\Http\Controllers\CategoriaController@select');
});

