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

Route::get('/', 'MainController@index')->name('main');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@post')->name('post');

Route::get('/documents', 'DocumentsController@index')->name('documents');

Route::get('/education', 'EducationController@index')->name('education');
Route::get('/education/{link}', 'EducationController@download_file')->name('download');

Route::get('/equipment', 'EquipmentController@index')->name('equipment');

Route::get('/vacancy', 'VacancyController@index')->name('vacancy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
