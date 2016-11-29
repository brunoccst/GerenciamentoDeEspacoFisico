<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/rooms', 'RoomController');
Route::resource('/disciplines', 'DisciplineController');
Route::resource('/course-classes', 'CourseClassController');
Route::resource('/grades', 'GradeController');
Route::resource('/change-requests', 'ChangeRequestController');
Route::resource('/logs', 'LogActivityController');
