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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil_desa', 'pageController@profil_desa')->name('profil_desa');
Route::get('/wilayah', 'pageController@wilayah')->name('wilayah');
Route::get('/pemerintahan', 'pageController@pemerintahan')->name('pemerintahan');
Route::get('/berita_desa', 'pageController@berita_desa')->name('berita_desa');
Route::get('/berita_desa_list', 'pageController@berita_desa_list')->name('berita_desa_list');
Route::get('/pengumuman', 'pageController@pengumuman')->name('pengumuman');
Route::get('/pengumuman_list', 'pageController@pengumuman_list')->name('pengumuman_list');
Route::get('/kontak', 'pageController@kontak')->name('kontak');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', 'adminController@dashboard')->name('admin');
	Route::get('storage/uploads/user/thumbnail')->name('thumbnail');
});



