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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data-pengguna', 'AdminController@showDataPengguna')->name('showDataPengguna');
Route::get('/hapus-data-pengguna/{id}', 'AdminController@deleteDataPengguna')->name('deleteDataPengguna');


Route::get('/data-kriteria', 'AdminController@showDataKriteria')->name('showDataKriteria');


Route::get('/data-alternatif', 'AdminController@showDataAlternatif')->name('showDataAlternatif');
Route::get('/tambah-data-alternatif', 'AdminController@showTambahDataAlternatif')->name('showTambahDataAlternatif');
Route::post('/tambah-data-alternatif', 'AdminController@postTambahDataAlternatif')->name('postTambahDataAlternatif');
Route::get('/hapus-data-alternatif/{id}', 'AdminController@deleteDataAlternatif')->name('deleteDataAlternatif');
Route::get('/ubah-data-alternatif/{id}', 'AdminController@showUbahDataAlternatif')->name('showUbahDataAlternatif');
Route::post('/ubah-data-alternatif/{id}', 'AdminController@postUbahDataAlternatif')->name('postUbahDataAlternatif');


Route::get('/ahp-hasil-alternatif', 'AdminController@showAHPHasilAlternatif')->name('showAHPHasilAlternatif');
Route::post('/ahp-hasil-alternatif', 'AdminController@postAHPHasilAlternatif')->name('postAHPHasilAlternatif');


Route::get('/ahp-perangkingan', 'AdminController@showAHPPerangkingan')->name('showAHPPerangkingan');


Route::get('/vikor', 'AdminController@showMetodeVIKOR')->name('showVIKOR');
Route::post('/vikor', 'AdminController@postVikorBobot')->name('postVikorBobot');


Route::get('/grafik-perbandingan', 'AdminController@showGrafikPerbandingan')->name('showGrafikPerbandingan');


Route::get('/ahp', 'AdminController@showAHP')->name('showAHP');

Route::group(['prefix' => 'matriks'], function () {
    Route::get('/perbandingan-antar-kriteria', 'AdminController@showAHPPerbandinganAntarKriteria')->name('showAHPPerbandinganAntarKriteria');
    Route::post('/perbandingan-antar-kriteria', 'AdminController@postAHPPerbandinganAntarKriteria')->name('postAHPPerbandinganAntarKriteria');

    Route::get('/perbandingan-jumlah-tanggungan', 'AdminController@showAHPPerbandinganJumlahTanggungan')->name('showAHPPerbandinganJumlahTanggungan');
    Route::post('/perbandingan-jumlah-tanggungan', 'AdminController@postAHPPerbandinganJumlahTanggungan')->name('postAHPPerbandinganJumlahTanggungan');


    Route::get('/perbandingan-pekerjaan-kepala-keluarga', 'AdminController@showAHPPerbandinganPekerjaanKepalaKeluarga')->name('showAHPPerbandinganPekerjaanKepalaKeluarga');
    Route::post('/perbandingan-pekerjaan-kepala-keluarga', 'AdminController@postAHPPerbandinganPekerjaanKepalaKeluarga')->name('postAHPPerbandinganPekerjaanKepalaKeluarga');


    Route::get('/perbandingan-penghasilan-perbulan', 'AdminController@showAHPPerbandinganPenghasilanPerbulan')->name('showAHPPerbandinganPenghasilanPerbulan');
    Route::post('/perbandingan-penghasilan-perbulan', 'AdminController@postAHPPerbandinganPenghasilanPerbulan')->name('postAHPPerbandinganPenghasilanPerbulan');


    Route::get('/perbandingan-pendidikan-kepala-keluarga', 'AdminController@showAHPPerbandinganPendidikanKepalaKeluarga')->name('showAHPPerbandinganPendidikanKepalaKeluarga');
    Route::post('/perbandingan-pendidikan-kepala-keluarga', 'AdminController@postAHPPerbandinganPendidikanKepalaKeluarga')->name('postAHPPerbandinganPendidikanKepalaKeluarga');


    Route::get('/perbandingan-sumber-air', 'AdminController@showAHPPerbandinganSumberAir')->name('showAHPPerbandinganSumberAir');
    Route::post('/perbandingan-sumber-air', 'AdminController@postAHPPerbandinganSumberAir')->name('postAHPPerbandinganSumberAir');
});

