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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//index
Route::get('/', 'WelcomeController@index');
Route::get('/cari-jurusan', 'WelcomeController@jurusan');
Route::get('/riwayat-snmptn', 'WelcomeController@snmptn');
Route::get('/data-alumni', 'WelcomeController@alumni');
Route::get('/admin/dashboard', 'DashboardController@index');
//siswa
Route::get('/admin/siswa', 'SiswaController@index');
    //insert store
    Route::get('/admin/siswa/insert', 'SiswaController@insert');
    Route::post('/admin/siswa/store', 'SiswaController@store');
    //edit save
    Route::get('/admin/siswa/edit/{id}', 'SiswaController@edit');
    Route::post('/admin/siswa/save', 'SiswaController@save');
    //details and upload
    Route::get('/admin/siswa/details/{id}', 'SiswaController@details');
    Route::post('/admin/siswa/upload/{id}', 'SiswaController@upload');
    //delete trash and
    Route::get('/admin/siswa/delete/{id}', 'SiswaController@delete');
    Route::get('admin/siswa/trash', 'SiswaController@trash');
    //delete permanent restore
    Route::get('/admin/siswa/restore/{id}', 'SiswaController@restore');
    Route::get('/admin/siswa/perma-delete/{id}', 'SiswaController@deletepermanent');
    Route::get('/admin/siswa/permanents-delete', 'SiswaController@deletepermanents');
//rekomendasi
Route::get('/admin/rekomendasi/pt', 'PTController@index');
