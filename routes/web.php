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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('student_view','StudInsertController@view');
Route::get('edit-records','StudInsertController@editrecords');
Route::get('edit/{id}','StudInsertController@edit');
Route::get('edit/{id}','StudInsertController@show');
Route::delete('student_delete','StudInsertController@delete');