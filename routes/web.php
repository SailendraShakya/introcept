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

Route::get('/', 'FormsController@getIndex');
Route::post('forms/create', 'FormsController@store');
Route::get('forms/listing', 'FormsController@listing');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
