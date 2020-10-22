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

Route::post('login', 'API\ClientController@login');
Route::post('register', 'API\ClientController@register');


Route::post('editbloodpoints','API\AdminController@editBloodPoints')->middleware('auth:api');

Route::get('livesearch','API\LiveSearch@searchUser')->middleware('auth:api');
Route::get('profile','API\AdminController@getuser')->middleware('auth:api');
Route::get('statistics','API\AdminController@statisticsDetails')->middleware('auth:api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
