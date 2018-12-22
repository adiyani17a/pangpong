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
    $berita = DB::table('berita')->selectRaw("users.*,berita.*,berita.id as berita_id")->join('users','users.id','=','created_by')->take(10)->get();
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

Route::get('/potensi_desa_list', 'pageController@potensi_desa_list')->name('potensi_desa_list');
Route::get('/page_potensi_desa_list', 'pageController@page_potensi_desa_list')->name('page_potensi_desa_list');
Route::get('/potensi_desa', 'pageController@potensi_desa')->name('potensi_desa');

Route::get('/produk_unggulan_list', 'pageController@produk_unggulan_list')->name('produk_unggulan_list');
Route::get('/page_produk_unggulan_list', 'pageController@page_produk_unggulan_list')->name('page_produk_unggulan_list');
Route::get('/produk_unggulan', 'pageController@produk_unggulan')->name('produk_unggulan');
Route::get('/kontak', 'pageController@kontak')->name('kontak');
Route::get('page_foto', 'pageController@page_foto')->name('page_foto');
Route::get('page_video', 'pageController@page_video')->name('page_video');

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
	Route::get('edit_berita', 'adminController@edit_berita')->name('edit_berita');
	Route::get('datatable_berita', 'adminController@datatable_berita')->name('datatable_berita');
	Route::post('save_berita', 'adminController@save_berita')->name('save_berita');
	Route::post('delete_berita', 'adminController@delete_berita')->name('delete_berita');

	Route::get('pengumuman', 'adminController@pengumuman')->name('pengumuman');
	Route::get('perangkat_desa', 'adminController@perangkat_desa')->name('perangkat_desa');
	Route::get('datatable_perangkat_desa', 'adminController@datatable_perangkat_desa')->name('datatable_perangkat_desa');
	Route::post('delete_perangkat_desa', 'adminController@delete_perangkat_desa')->name('delete_perangkat_desa');
	Route::post('save_perangkat_desa', 'adminController@save_perangkat_desa')->name('save_perangkat_desa');

	Route::get('admin_profil_desa', 'adminController@admin_profil_desa')->name('admin_profil_desa');
	Route::post('save_profil_desa', 'adminController@save_profil_desa')->name('save_profil_desa');

	Route::get('admin_wilayah', 'adminController@admin_wilayah')->name('admin_wilayah');
	Route::post('save_wilayah', 'adminController@save_wilayah')->name('save_wilayah');

	Route::get('admin_pemerintahan', 'adminController@admin_pemerintahan')->name('admin_pemerintahan');
	Route::post('save_pemerintahan', 'adminController@save_pemerintahan')->name('save_pemerintahan');

	Route::get('potensi', 'adminController@potensi')->name('potensi');
	Route::get('edit_potensi', 'adminController@edit_potensi')->name('edit_potensi');
	Route::get('datatable_potensi', 'adminController@datatable_potensi')->name('datatable_potensi');
	Route::post('save_potensi', 'adminController@save_potensi')->name('save_potensi');
	Route::post('delete_potensi', 'adminController@delete_potensi')->name('delete_potensi');



});



