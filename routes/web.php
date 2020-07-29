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
