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

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminhome', ['as'=>'adminhome','uses'=>'adminController@admin']);
Route::get('listpark', ['as'=>'listpark','uses'=>'adminController@listpark']);
Route::get('order', ['as'=>'order','uses'=>'adminController@order']);
Route::get('status/{id}', ['as'=>'status','uses'=>'adminController@status']);
