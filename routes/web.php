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





Route::get('/', 'HomeController@index')->name('home');

Auth::routes();



Route::get('bloodpoints', 'ClientController@showBloodPoints')->middleware('auth');

// Route::get('/search_clients','AdminController@index')->name('search_clients')->middleware('auth');
// Route::get('/search_clients/action','AdminController@action')->name('search_clients.action')->middleware('auth');

Route::get('/live_search', 'LiveSearch@index')->middleware('auth');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action')->middleware('auth');

Route::get('profile/{phoneNumber}', 'AdminController@controllUser')->middleware('auth');

Route::get('statistics', 'AdminController@statisticsDetails')->name('statistics')->middleware('auth');

Route::post('updatebloodpoints', 'AdminController@editBloodPoints')->name('editBloodPoints')->middleware('auth');
Route::post('addpoint', 'AdminController@addPoint')->name('addPoint')->middleware('auth');
