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

Auth::routes();

Route::get('/home', 'ApplicationController@index');
Route::get('/saved' ,'ApplicationController@ThanksPage' );
Route::post('/saved' ,'ApplicationController@store' );
Route::get('/admin/panel' ,'ApplicationController@admin_view');

?>
