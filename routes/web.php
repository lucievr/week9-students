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
    return view('index')->name('index');
});

Auth::routes();

Route::get('/student/{student_slug}', 'StudentController@show');
Route::get('/students', 'StudentController@index');

Route::post('/student/{student_slug}', 'StudentController@store');
