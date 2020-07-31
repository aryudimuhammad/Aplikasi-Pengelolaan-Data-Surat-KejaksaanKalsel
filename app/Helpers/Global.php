<?php

use App\Hasil_penyelidikan;
use App\Hasil_penyidikan;
use App\Panggilan_tersangka;
use App\Pegawai;
use App\Perintah_penyelidikan;
use App\Perintah_penyidikan;
use App\Permintaan_keterangan;
use App\Putusan_pengadilan;
use App\Surat_terima;

function totalpegawai()
{
    return Pegawai::count();
}

function totalsurat()
{
    return Surat_terima::count();
}

function totalpenyelidikan()
{
    return Perintah_penyelidikan::count();
}

function totalketerangan()
{
    return Permintaan_keterangan::count();
}

function totalhasilpenyelidikan()
{
    return Hasil_penyelidikan::count();
}

function totalpenyidikan()
{
    return Perintah_penyidikan::count();
}

function totalpanggilan()
{
    return Panggilan_tersangka::count();
}

function totalhasilpenyidikan()
{
    return Hasil_penyidikan::count();
}

function totalputusan()
{
    return Putusan_pengadilan::count();
}
