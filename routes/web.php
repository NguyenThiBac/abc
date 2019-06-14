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
//    return view('hello');
//});
//Route::get('/welcom/{$tuoi}',function($tuoi)
//{
//    return 'hello'.$tuoi ;
//});
//Route::get('/chao/{user'}'.function($')

Route::get('view', 'PageController@getNguoimuon');
Route::post('register','Controller@postResgiter');
Route::get('list','PageController@getStudents');
Route::get('modal_add','PageController@modalStudent')->name('modal_add');
Route::post('modal_add','PageController@postStudent')->name('modal_add');
