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


Route::group(['middleware' => 'web'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();

    Route::get('/tasks', 'TaskController@index');
    Route::get('/tasks/newTask', 'TaskController@newTask');
    Route::post('/tasks/save', 'TaskController@saveTask');
    Route::get('/tasks/{task}/update', 'TaskController@update');
    Route::patch('/tasks/{task}', 'TaskController@updating');
    Route::delete('/tasks/{task}', 'TaskController@delete');

});