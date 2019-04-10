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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/login', 'HomeController@getLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/adminRegistration', 'adminController@getRegistration')->name('admin.registration');
Route::post('/adminRegistration', 'adminController@postRegistration');
Route::get('/add/student', 'StudentController@newStudent')->name('add.student');
Route::post('/add/student', 'StudentController@createStudent' );
Route::get('/students', 'StudentController@index')->name('student');
Route::get('/students/fees', 'AdminController@get_student_fee')->name('students.fees');
Route::get('/students/class', 'AdminController@studentClass');
Route::post('/students/fees', 'AdminController@post_student_fees');
Route::get('/office/cost', 'AdminController@office_cost')->name('office.cost');

