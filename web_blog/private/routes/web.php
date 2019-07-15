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

Route::get('/halamanawal', function () {
    return view('templatefilm');
});

Route::get('/aboutfilm', function () {
    return view('filmuser.aboutfilm');
});

Route::get('/negara', function () {
    return view('filmuser.negarafilm');
});

Route::get('/tahun', function () {
    return view('filmuser.tahunfilm');
});

Route::get('/genre', function () {
    return view('filmuser.genrefilm');
});

Route::get('dtpengunjung', function () {
    return view('admin.dtpengunjung');
});

Route::get('profil', function () {
    return view('admin.profil');
});

Route::get('login', 'BlogController@index');

Route::get('/', function(){
    return view('admin.logaktivitas');
});

Route::get('post', function () {
    return view('admin.post');
});





//katalog film2
Route::resource('/list-post', 'BlogController');
Route::get('/add-post', 'BlogController@create')->name('add');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');
