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

Route::get('contact',
    ['as' => 'contact_create', 'uses' => 'ContactController@create']);

Route::post('contact',
    ['as' => 'contact_save', 'uses' => 'ContactController@save']);

Route::get('importTask',
    ['as' => 'importTask_create', 'uses' => 'importTaskController@create']);

Route::post('importTask',
    ['as' => 'importTask_import', 'uses' => 'importTaskController@import']);