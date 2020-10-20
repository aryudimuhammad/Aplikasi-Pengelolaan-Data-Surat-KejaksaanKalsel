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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'Checkrole:1']], function () {
    //route Dashboard
    Route::get('/', 'HomeController@index')->name('dashboard');

    //route Jabatan
    Route::get('/master/jabatan', 'JabatanController@index')->name('jabatanIndex');
    Route::post('/master/jabatan', 'JabatanController@create')->name('jabatanCreate');
    Route::put('/master/jabatan', 'JabatanController@edit')->name('jabatanEdit');
    Route::delete('/master/jabatan/{id}', 'JabatanController@delete')->name('jabatanDelete');

    //route jenisaduan
    Route::get('/master/jenisaduan', 'AduanController@index')->name('jenisaduanIndex');
    Route::post('/master/jenisaduan', 'AduanController@create')->name('jenisaduanCreate');
    Route::put('/master/jenisaduan', 'AduanController@edit')->name('jenisaduanEdit');
    Route::delete('/master/jenisaduan/{id}', 'AduanController@delete')->name('jenisaduanDelete');

    //route jenisaduan
    Route::get('/master/warga', 'WargaController@index')->name('wargaIndex');
    Route::post('/master/warga', 'WargaController@create')->name('wargaCreate');
    Route::put('/master/warga', 'WargaController@edit')->name('wargaEdit');
    Route::delete('/master/warga/{id}', 'WargaController@delete')->name('wargaDelete');

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
    Route::delete('/Surat/Delete/{id}', 'SuratTerimaController@delete')->name('terimaDelete');
    Route::get('/Surat/Terima/{id}', 'SuratTerimaController@edit')->name('terimaEdit');
    Route::post('/Surat/Terima/{id}', 'SuratTerimaController@update')->name('terimaUpdate');

    //route Perintah Penyelidikan
    Route::get('/perintah/penyelidikan', 'PerintahPenyelidikanController@index')->name('penyelidikanIndex');
    Route::post('/perintah/penyelidikan', 'PerintahPenyelidikanController@create')->name('penyelidikanCreate');
    Route::get('/perintah/penyelidikan/show/{id}', 'PerintahPenyelidikanController@show')->name('penyelidikanShow');
    Route::get('/perintah/penyelidikan/{id}', 'PerintahPenyelidikanController@edit')->name('penyelidikanEdit');
    Route::post('/perintah/penyelidikan/{id}', 'PerintahPenyelidikanController@update')->name('penyelidikanUpdate');
    Route::delete('/perintah/penyelidikan/delete/{id}', 'PerintahPenyelidikanController@delete')->name('penyelidikanDelete');

    //route Permintaan Keterangan
    Route::get('/permintaan/keterangan', 'PermintaanKeteranganController@index')->name('keteranganIndex');
    Route::post('/permintaan/keterangan', 'PermintaanKeteranganController@create')->name('keteranganCreate');
    Route::get('/permintaan/keterangan/show/{id}', 'PermintaanKeteranganController@show')->name('keteranganShow');
    Route::get('/permintaan/keterangan/{id}', 'PermintaanKeteranganController@edit')->name('keteranganEdit');
    Route::post('/permintaan/keterangan/{id}', 'PermintaanKeteranganController@update')->name('keteranganUpdate');
    Route::delete('/permintaan/keterangan/delete/{id}', 'PermintaanKeteranganController@delete')->name('keteranganDelete');

    //route Hasil Penyelidikan
    Route::get('/hasil/penyelidikan', 'HasilPenyelidikanController@index')->name('hasilpenyelidikanIndex');
    Route::post('/hasil/penyelidikan', 'HasilPenyelidikanController@create')->name('hasilpenyelidikanCreate');
    Route::get('/hasil/penyelidikan/show/{id}', 'HasilPenyelidikanController@show')->name('hasilpenyelidikanShow');
    Route::get('/hasil/penyelidikan/{id}', 'HasilPenyelidikanController@edit')->name('hasilpenyelidikanEdit');
    Route::post('/hasil/penyelidikan/{id}', 'HasilPenyelidikanController@update')->name('hasilpenyelidikanUpdate');
    Route::delete('/hasil/penyelidikan/delete/{id}', 'HasilPenyelidikanController@delete')->name('hasilpenyelidikanDelete');

    //route Perintah Penyidikan
    Route::get('/perintah/penyidikan', 'PerintahPenyidikanController@index')->name('perintahpenyidikanIndex');
    Route::post('/perintah/penyidikan', 'PerintahPenyidikanController@create')->name('perintahpenyidikanCreate');
    Route::get('/perintah/penyidikan/show/{id}', 'PerintahPenyidikanController@show')->name('perintahpenyidikanShow');
    Route::get('/perintah/penyidikan/{id}', 'PerintahPenyidikanController@edit')->name('perintahpenyidikanEdit');
    Route::post('/perintah/penyidikan/{id}', 'PerintahPenyidikanController@update')->name('perintahpenyidikanUpdate');
    Route::delete('/perintah/penyidikan/delete/{id}', 'PerintahPenyidikanController@delete')->name('perintahpenyidikanDelete');

    //route Panggilan Tersangka
    Route::get('/panggilan/tersangka', 'PanggilanTersangkaController@index')->name('panggilanIndex');
    Route::post('/panggilan/tersangka', 'PanggilanTersangkaController@create')->name('panggilanCreate');
    Route::get('/panggilan/tersangka/show/{id}', 'PanggilanTersangkaController@show')->name('panggilanShow');
    Route::get('/panggilan/tersangka/{id}', 'PanggilanTersangkaController@edit')->name('panggilanEdit');
    Route::post('/panggilan/tersangka/{id}', 'PanggilanTersangkaController@update')->name('panggilanUpdate');
    Route::delete('/panggilan/tersangka/delete/{id}', 'PanggilanTersangkaController@delete')->name('hasilpanggilanDelete');

    //route Penetapan Tersangka
    Route::get('/penetapan/tersangka', 'PenetapanTersangkaController@index')->name('penetapanIndex');
    Route::post('/penetapan/tersangka', 'PenetapanTersangkaController@create')->name('penetapanCreate');
    Route::get('/penetapan/tersangka/show/{id}', 'PenetapanTersangkaController@show')->name('penetapanShow');
    Route::get('/penetapan/tersangka/{id}', 'PenetapanTersangkaController@edit')->name('penetapanEdit');
    Route::post('/penetapan/tersangka/{id}', 'PenetapanTersangkaController@update')->name('penetapanUpdate');
    Route::delete('/penetapan/tersangka/delete/{id}', 'PenetapanTersangkaController@delete')->name('hasilpenetapanDelete');

    //route Hasil Penyidikan
    Route::get('/hasil/penyidikan', 'HasilPenyidikanController@index')->name('hasilpenyidikanIndex');
    Route::post('/hasil/penyidikan', 'HasilPenyidikanController@create')->name('hasilpenyidikanCreate');
    Route::get('/hasil/penyidikan/show/{id}', 'HasilPenyidikanController@show')->name('hasilpenyidikanShow');
    Route::get('/hasil/penyidikan/{id}', 'HasilPenyidikanController@edit')->name('hasilpenyidikanEdit');
    Route::post('/hasil/penyidikan/{id}', 'HasilPenyidikanController@update')->name('hasilpenyidikanUpdate');
    Route::delete('/hasil/penyidikan/delete/{id}', 'HasilPenyidikanController@delete')->name('hasilpenyidikanDelete');

    //route Putusan Pengadilan
    Route::get('/putusan/pengadilan', 'PutusanPengadilanController@index')->name('putusanIndex');
    Route::post('/putusan/pengadilan', 'PutusanPengadilanController@create')->name('putusanCreate');
    Route::get('/putusan/pengadilan/show/{id]', 'PutusanPengadilanController@show')->name('putusanShow');
    Route::get('/putusan/pengadilan/{id}', 'PutusanPengadilanController@edit')->name('putusanEdit');
    Route::post('/putusan/pengadilan/{id}', 'PutusanPengadilanController@update')->name('putusanUpdate');
    Route::delete('/putusan/pengadilan/delete/{id}', 'PutusanPengadilanController@delete')->name('putusanDelete');

    //route Setting Admin
    Route::get('/admin/setting', 'UserController@settingindex')->name('settingIndex');
    Route::post('/admin/setting', 'UserController@settingedit')->name('settingEdit');
    Route::patch('/admin/setting', 'UserController@settingpassword')->name('settingPassword');

    //route Form Tabel Admin
    Route::get('/admin/user', 'UserController@index')->name('userIndex');
    Route::post('/admin/user', 'UserController@create')->name('userCreate');
    Route::put('/admin/user', 'UserController@edit')->name('userEdit');
    Route::delete('/admin/user/delete/{id}', 'UserController@destroy')->name('userDelete');

    //route detailpenyelidikan tambah penyelidik
    Route::get('/perintah/penyelidikan/detai/{id}', 'DetailpenyelidikanController@index')->name('detailpenyelidikanIndex');
    Route::post('/perintah/penyelidikan/detai/{id}', 'DetailpenyelidikanController@store')->name('detailpenyelidikanStore');
    Route::delete('/perintah/penyelidikan/detail/delete/{id}', 'DetailpenyelidikanController@delete')->name('detailpenyelidikanStore');

    //route detailpenyidikan tambah penyidik
    Route::get('/perintah/penyidikan/detai/{id}', 'DetailpenyidikanController@index')->name('detailpenyidikanIndex');
    Route::post('/perintah/penyidikan/detai/{id}', 'DetailpenyidikanController@store')->name('detailpenyidikanStore');
    Route::delete('/perintah/penyidikan/detail/delete/{id}', 'DetailpenyidikanController@delete')->name('detailpenyidikanStore');

    //route detailpanggilantersangka tambah jaksa
    Route::get('/perintah/panggilan/detai/{id}', 'DetailpanggilanController@index')->name('detailpanggilanIndex');
    Route::post('/perintah/panggilan/detai/{id}', 'DetailpanggilanController@store')->name('detailpanggilanStore');
    Route::delete('/perintah/panggilan/detail/delete/{id}', 'DetailpanggilanController@delete')->name('detailpanggilanStore');

    //route laporan
    Route::get('/admin/report/suratterima', 'ReportController@suratterima')->name('suratterima');
    Route::get('/admin/report/perintahpenyelidikan', 'ReportController@perintahpenyelidikan')->name('perintahpenyelidikan');
    Route::get('/admin/report/permintaanketerangan', 'ReportController@permintaanketerangan')->name('permintaanketerangan');
    Route::get('/admin/report/hasilpenyelidikan', 'ReportController@hasilpenyelidikan')->name('hasilpenyelidikan');
    Route::get('/admin/report/perintahpenyidikan', 'ReportController@perintahpenyidikan')->name('perintahpenyidikan');
    Route::get('/admin/report/panggilantersangka', 'ReportController@panggilantersangka')->name('panggilantersangka');
    Route::get('/admin/report/penetapantersangka', 'ReportController@penetapantersangka')->name('penetapantersangka');
    Route::get('/admin/report/hasilpenyidikan', 'ReportController@hasilpenyidikan')->name('hasilpenyidikan');
    Route::get('/admin/report/putusanpengadilan', 'ReportController@putusanpengadilan')->name('putusanpengadilan');
    Route::get('/admin/report/suratterimaformat/{id}', 'ReportController@suratterimaformat')->name('suratterimaformat');
    Route::get('/admin/report/perintahpenyelidikanformat/{id}', 'ReportController@perintahpenyelidikanformat')->name('perintahpenyelidikanformat');
    Route::get('/admin/report/permintaanketeranganformat/{id}', 'ReportController@permintaanketeranganformat')->name('permintaanketeranganformat');
    Route::get('/admin/report/hasilpenyelidikanformat/{id}', 'ReportController@hasilpenyelidikanformat')->name('hasilpenyelidikanformat');
    Route::get('/admin/report/perintahpenyidikanformat/{id}', 'ReportController@perintahpenyidikanformat')->name('perintahpenyidikanformat');
    Route::get('/admin/report/panggilantersangkaformat/{id}', 'ReportController@panggilantersangkaformat')->name('panggilantersangkaformat');
    Route::get('/admin/report/hasilpenyidikanformat/{id}', 'ReportController@hasilpenyidikanformat')->name('hasilpenyidikanformat');
    Route::get('/admin/report/putusanpengadilanformat/{id}', 'ReportController@putusanpengadilanformat')->name('putusanpengadilanformat');
    Route::get('/admin/report/penetapantersangkaformat/{id}', 'ReportController@penetapantersangkaformat')->name('penetapantersangkaformat');

    //cetak keseluruhan
    Route::get('/admin/report/suratterima/keseluruhan', 'ReportController@suratterimakeseluruhan')->name('suratterimakeseluruhan');
    Route::get('/admin/report/perintahpenyelidikan/keseluruhan', 'ReportController@perintahpenyelidikankeseluruhan')->name('perintahpenyelidikankeseluruhan');
    Route::get('/admin/report/permintaanketerangan/keseluruhan', 'ReportController@permintaanketerangankeseluruhan')->name('permintaanketerangankeseluruhan');
    Route::get('/admin/report/hasilpenyelidikan/keseluruhan', 'ReportController@hasilpenyelidikankeseluruhan')->name('hasilpenyelidikankeseluruhan');
    Route::get('/admin/report/perintahpenyidikan/keseluruhan', 'ReportController@perintahpenyidikankeseluruhan')->name('perintahpenyidikankeseluruhan');
    Route::get('/admin/report/panggilantersang/kakeseluruhan', 'ReportController@panggilantersangkakeseluruhan')->name('panggilantersangkakeseluruhan');
    Route::get('/admin/report/panggilantersang/kakeseluruhan', 'ReportController@penetapantersangkakeseluruhan1')->name('penetapantersangkakeseluruhan1');
    Route::get('/admin/report/hasilpenyidikan/keseluruhan', 'ReportController@hasilpenyidikankeseluruhan')->name('hasilpenyidikankeseluruhan');
    Route::get('/admin/report/putusanpengadilan/keseluruhan', 'ReportController@putusanpengadilankeseluruhan')->name('putusanpengadilankeseluruhan');
    Route::get('/admin/report/penetapantersangka/keseluruhan', 'ReportController@penetapantersangkakeseluruhan')->name('penetapantersangkakeseluruhan');
});
