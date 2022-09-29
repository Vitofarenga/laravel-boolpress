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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Api')->group(function(){
       Route::get('/posts', 'PostController@index');
       Route::get('/posts/{id}', 'PostController@show');

       Route::get('/categories', 'CategoryController@index');
       Route::get('/categories/{id}', 'CategoryController@show');

       Route::get('/users', 'UserController@index');
       Route::get('/users/{id}', 'UserController@show');
});