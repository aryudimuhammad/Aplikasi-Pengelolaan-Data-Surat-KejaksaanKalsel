<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::group(['middleware' => ['auth', 'Checkrole:1,2']], function () {
    //route Dashboard
    Route::get('/admin', 'HomeController@index')->name('dashboard');

    //route Jabatan
    Route::get('/master/jabatan', 'JabatanController@index')->name('jabatanIndex');
    Route::post('/master/jabatan', 'JabatanController@create')->name('jabatanCreate');
    Route::put('/master/jabatan', 'JabatanController@edit')->name('jabatanEdit');
    Route::delete('/master/jabatan/{id}', 'JabatanController@delete')->name('jabatanDelete');

    //route Pangkat
    Route::get('/master/pangkat', 'PangkatController@index')->name('pangkatIndex');
    Route::post('/master/pangkat', 'PangkatController@create')->name('pangkatCreate');
    Route::put('/master/pangkat', 'PangkatController@edit')->name('pangkatEdit');
    Route::delete('/master/pangkat/{id}', 'PangkatController@delete')->name('pangkatDelete');

    //route Pegawai
    Route::get('/master/pegawai', 'PegawaiController@index')->name('pegawaiIndex');
    Route::post('/master/pegawai', 'PegawaiController@create')->name('pegawaiCreate');
    Route::put('/master/pegawai', 'PegawaiController@edit')->name('pegawaiEdit');
    Route::delete('/master/pegawai/{id}', 'PegawaiController@delete')->name('pegawaiDelete');

    //route Surat Terima
    Route::get('/Surat/Terima', 'SuratTerimaController@index')->name('terimaIndex');
    Route::post('/Surat/Terima', 'SuratTerimaController@create')->name('terimaCreate');
    Route::put('/Surat/Terima', 'SuratTerimaController@edit')->name('terimaEdit');
    Route::delete('/Surat/Terima/{id}', 'SuratTerimaController@delete')->name('terimaDelete');

    //route Perintah Penyelidikan
    Route::get('/perintah/penyelidikan', 'PerintahPenyelidikanController@index')->name('penyelidikanIndex');
    Route::post('/perintah/penyelidikan', 'PerintahPenyelidikanController@create')->name('penyelidikanCreate');
    Route::put('/perintah/penyelidikan', 'PerintahPenyelidikanController@edit')->name('penyelidikanEdit');
    Route::delete('/perintah/penyelidikan/{id}', 'PerintahPenyelidikanController@delete')->name('penyelidikanDelete');

    //route Permintaan Keterangan
    Route::get('/permintaan/keterangan', 'PermintaanKeteranganController@index')->name('keteranganIndex');
    Route::post('/permintaan/keterangan', 'PermintaanKeteranganController@create')->name('keteranganCreate');
    Route::put('/permintaan/keterangan', 'PermintaanKeteranganController@edit')->name('keteranganEdit');
    Route::delete('/permintaan/keterangan/{id}', 'PermintaanKeteranganController@delete')->name('keteranganDelete');

    //route Hasil Penyelidikan
    Route::get('/hasil/penyelidikan', 'HasilPenyelidikanController@index')->name('hasilpenyelidikanIndex');
    Route::post('/hasil/penyelidikan', 'HasilPenyelidikanController@create')->name('hasilpenyelidikanCreate');
    Route::put('/hasil/penyelidikan', 'HasilPenyelidikanController@edit')->name('hasilpenyelidikanEdit');
    Route::delete('/hasil/penyelidikan/{id}', 'HasilPenyelidikanController@delete')->name('hasilpenyelidikanDelete');

    //route Panggilan Tersangka
    Route::get('/panggilan/tersangka', 'PanggilanTersangkaController@index')->name('panggilanIndex');
    Route::post('/panggilan/tersangka', 'PanggilanTersangkaController@create')->name('panggilanCreate');
    Route::put('/panggilan/tersangka', 'PanggilanTersangkaController@edit')->name('panggilanEdit');
    Route::delete('/panggilan/tersangka/{id}', 'PanggilanTersangkaController@delete')->name('hasilpanggilanDelete');

    //route Hasil Penyidikan
    Route::get('/hasil/penyidikan', 'HasilPenyidikan@index')->name('hasilpenyidikanIndex');
    Route::post('/hasil/penyidikan', 'HasilPenyidikan@create')->name('hasilpenyidikanCreate');
    Route::put('/hasil/penyidikan', 'HasilPenyidikan@edit')->name('hasilpenyidikanEdit');
    Route::delete('/hasil/penyidikan/{id}', 'HasilPenyidikan@delete')->name('hasilpenyidikanDelete');

    //route Putusan Pengadilan
    Route::get('/putusan/pengadilan', 'HasilPenyidikan@index')->name('putusanIndex');
    Route::post('/putusan/pengadilan', 'HasilPenyidikan@create')->name('putusanCreate');
    Route::put('/putusan/pengadilan', 'HasilPenyidikan@edit')->name('putusanEdit');
    Route::delete('/putusan/pengadilan/{id}', 'HasilPenyidikan@delete')->name('putusanDelete');

    //route Setting Admin
    Route::get('/admin/setting', 'UserController@settingindex')->name('settingIndex');
    Route::post('/admin/setting', 'UserController@settingedit')->name('settingEdit');
    Route::patch('/admin/setting', 'UserController@settingpassword')->name('settingPassword');

    //route Form Tabel Admin
    Route::get('/admin/user', 'UserController@index')->name('userIndex');
    Route::post('/admin/user', 'UserController@create')->name('userCreate');
    Route::put('/admin/user', 'UserController@edit')->name('userEdit');
    Route::delete('/admin/user/delete/{id}', 'UserController@destroy')->name('userDelete');
});
