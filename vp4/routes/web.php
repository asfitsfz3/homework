<?php

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

Route::get('/', 'Start@showStartPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'ShowCategory@showCategory');
Route::get('/good', 'ShowGood@showGood');
Route::get('/order', 'MakeOrder@makeOrder');
Route::get('/cabinet', 'Cabinet@showCabinet');
Route::get('/fast_logout', 'Cabinet@showLogout');
Route::get('/createcat', 'AdminActions@createCategory');
Route::get('/deletecat', 'AdminActions@deleteCategory');
