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

Route::get('/', ['uses' => 'GmailController@index', 'as' => 'gmails.index']);
Route::post('/{id}/update', ['uses' => 'GmailController@update', 'as' => 'gmails.update']);
Route::get('/datatables', ['uses' => 'GmailController@datatables', 'as' => 'gmails.datatables']);
