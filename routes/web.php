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


Route::group(['middleware' => 'CheckLogin'], function (){
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/adminRegistration', 'AdminController@getRegistration')->name('admin.registration');
    Route::post('/adminRegistration', 'AdminController@postRegistration');
    Route::get('/add/student', 'StudentController@newStudent')->name('add.student');
    Route::post('/add/student', 'StudentController@createStudent' );
    Route::get('/students/{class}', 'StudentController@index')->name('student');
    Route::get('/fees', 'AdminController@get_student_fee')->name('students.fees');
    Route::get('/class', 'AdminController@studentClass');
    Route::post('/fees', 'AdminController@post_student_fees');
    Route::get('/office/cost', 'AdminController@get_office_cost')->name('office.cost');
    Route::post('/office/cost', 'AdminController@post_office_cost');
    Route::get('/add/teacher', 'TeacherController@get_add_teacher')->name('add.teacher');
    Route::post('/add/teacher', 'TeacherController@post_add_teacher');
    Route::get('/teachers', 'TeacherController@index')->name('teacher.index');
    Route::get('/teacher/details/{id}', 'TeacherController@details')->name('teacher.details');
    Route::get('/teacher/delete/{id}', 'TeacherController@delete')->name('teacher.delete');
    Route::get('/teacher/delete/confirm/{id}', 'TeacherController@confirm_delete')->name('confirm.delete');
    Route::post('/teacher/details/{id}', 'TeacherController@giveSalary');
    Route::get('/cost/list', 'AdminController@cost_list')->name('cost.list');
    Route::post('/cost/list', 'AdminController@cost_list_search_by_date');
    Route::get('/students/fees/list/{class}', 'StudentController@students_fees_list')->name('fees.list');
    Route::post('/students/fees/list/{class}', 'StudentController@students_fees_list_search_by_date');
    Route::get('/total/account', 'AdminController@get_total_accounts')->name('total.account');
    Route::post('/total/account', 'AdminController@total_account_by_date');

    Route::get('/student/show/{id}', 'StudentController@show')->name('student.show');
    Route::get('student/delete/{id}', 'StudentController@delete')->name('student.delete');
    Route::get('student/confirm/delete/{id}', 'StudentController@confirmDelete')->name('student.confirm.delete');
    Route::get('change/password', 'AdminController@get_change_password')->name('change.password');
    Route::post('change/password', 'AdminController@post_change_password');
    Route::get('profile/edit', 'AdminController@edit')->name('profile.edit');
    Route::post('profile/edit', 'AdminController@update');
    Route::get('student/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('student/edit/{id}', 'StudentController@update');
    Route::get('cost/search', 'AdminController@search');
    Route::get('fees/list/search', 'StudentController@searchByNameOrId');

    Route::get('/logout', 'HomeController@logout')->name('admin.logout');

});


Route::get('/login', 'HomeController@getLogin')->name('admin.login');
Route::post('/login', 'HomeController@postLogin');



