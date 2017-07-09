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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/musica', 'PostController@music')->name('music');
Route::get('/videos', 'PostController@video')->name('video');
Route::get('/fotos', 'PostController@photo')->name('photo');


Route::post('/type/create', 'TypeController@store')->name('typecreate');
Route::post('/post/create', 'PostController@store')->name('postcreate');
Route::post('/detailpost/create', 'DetailPostController@store')->name('detailpostcreate');

//Route::get('home', 'TypeController@index');
Route::get('home', 'PostController@index');


Route::get('/posts', 'PostController@list');
Route::get('/types', 'TypeController@list');
Route::get('/posts/{id}', 'DetailPostController@index');

Route::get('post/edit/{id}', 'PostController@edit');
Route::post('post/edit/{id}', 'PostController@update')->name('updatepost');
Route::post('post/delete/{id}', 'PostController@destroy')->name('deletepost');


Route::get('type/edit/{id}', 'TypeController@edit');
Route::post('type/edit/{id}', 'TypeController@update')->name('updatetype');
Route::post('type/delete/{id}', 'TypeController@destroy')->name('deletetype');

Route::get('detailpost/edit/{id}', 'DetailPostController@edit');
Route::post('detailpost/edit/{id}', 'DetailPostController@update')->name('updatedetailpost');
Route::post('detailpost/delete/{id}', 'DetailPostController@destroy')->name('deletedetailpost');
