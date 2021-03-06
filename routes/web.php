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

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('login',function()
{
	return view('login');
});
Route::get('try',function()
{
	return view('try');
});
Route::get('upload',function()
{
	return view('upload');
});
Route::get('file','FileController@showUploadForm')->name('upload.file');
Route::post('file','FileController@storeFile');

Route::group(['prefix'=>''],function(){
	Route::resource('users','CrudController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

