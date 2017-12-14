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
    return view('index');
});

Route::get('/pushLecture/{duration?}','LectureController@push_lecture');
Route::get('/','LectureController@index');
Route::get('/estadisticas','LectureController@viewEstadisticas');
Route::get('/datosporhora','LectureController@datosPorHora');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'lector'],function(){
	Route::get('/registrar','OtherController@show_register_lector_form')->name('registrar_lector');
});