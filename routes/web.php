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
	$data = DB::table('carousel')->get();
	$foto = DB::table('foto')->get();
	$perangkat_desa = DB::table('perangkat_desa')->get();
	$berita = DB::table('berita')->join('users','users.id','=','created_by')->take(10)->get();
    return view('welcome',compact('foto','data','perangkat_desa','berita'));
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil_desa', 'pageController@profil_desa')->name('profil_desa');
Route::get('/wilayah', 'pageController@wilayah')->name('wilayah');
Route::get('/pemerintahan', 'pageController@pemerintahan')->name('pemerintahan');
Route::get('/berita_desa', 'pageController@berita_desa')->name('berita_desa');
Route::get('/berita_desa_list', 'pageController@berita_desa_list')->name('berita_desa_list');
Route::get('/page_berita_desa_list', 'pageController@page_berita_desa_list')->name('page_berita_desa_list');
Route::get('/pengumuman', 'pageController@pengumuman')->name('pengumuman');
Route::get('/pengumuman_list', 'pageController@pengumuman_list')->name('pengumuman_list');
Route::get('/kontak', 'pageController@kontak')->name('kontak');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', 'adminController@dashboard')->name('admin');
	Route::get('storage/uploads/user/thumbnail')->name('thumbnail');
	Route::get('carousel', 'adminController@carousel')->name('carousel');
	Route::post('save_carousel', 'adminController@save_carousel')->name('save_carousel');
	Route::get('foto', 'adminController@foto')->name('foto');
	Route::get('datatable_foto', 'adminController@datatable_foto')->name('datatable_foto');
	Route::post('save_foto', 'adminController@save_foto')->name('save_foto');
	Route::post('delete_foto', 'adminController@delete_foto')->name('delete_foto');
	Route::get('video', 'adminController@video')->name('video');
	Route::get('datatable_video', 'adminController@datatable_video')->name('datatable_video');
	Route::post('save_video', 'adminController@save_video')->name('save_video');
	Route::post('delete_video', 'adminController@delete_video')->name('delete_video');
	Route::get('berita', 'adminController@berita')->name('berita');
	Route::get('datatable_berita', 'adminController@datatable_berita')->name('datatable_berita');
	Route::post('save_berita', 'adminController@save_berita')->name('save_berita');
	Route::post('delete_berita', 'adminController@delete_berita')->name('delete_berita');

	Route::get('pengumuman', 'adminController@pengumuman')->name('pengumuman');
	Route::get('perangkat_desa', 'adminController@perangkat_desa')->name('perangkat_desa');
	Route::get('datatable_perangkat_desa', 'adminController@datatable_perangkat_desa')->name('datatable_perangkat_desa');
	Route::post('delete_perangkat_desa', 'adminController@delete_perangkat_desa')->name('delete_perangkat_desa');
	Route::post('save_perangkat_desa', 'adminController@save_perangkat_desa')->name('save_perangkat_desa');
});



