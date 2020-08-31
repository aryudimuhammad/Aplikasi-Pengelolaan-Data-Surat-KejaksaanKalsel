<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use App\Hasil_penyelidikan;
use App\Hasil_penyidikan;
use App\Jabatan;
use App\Panggilan_tersangka;
use App\Pangkat;
use App\Pegawai;
use App\Perintah_penyelidikan;
use App\Perintah_penyidikan;
use App\Permintaan_keterangan;
use App\Putusan_pengadilan;
use App\Surat_terima;

class ReportController extends Controller
{
    public function suratterima()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Surat_terima::all();

        $pdf = PDF::loadview('admin/report/suratterima', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-SuratTerima-pdf');
    }

    public function perintahpenyidikan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Perintah_penyidikan::all();

        $pdf = PDF::loadview('admin/report/perintahpenyidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-Perintah_penyidikan-pdf');
    }

    public function perintahpenyelidikan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Perintah_penyelidikan::all();

        $pdf = PDF::loadview('admin/report/perintahpenyelidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-Perintah_penyelidikan-pdf');
    }

    public function permintaanketerangan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Permintaan_keterangan::all();

        $pdf = PDF::loadview('admin/report/permintaanketerangan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-permintaan_keterangan-pdf');
    }

    public function panggilantersangka()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Panggilan_tersangka::all();

        $pdf = PDF::loadview('admin/report/panggilantersangka', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-panggilan_tersangka-pdf');
    }

    public function putusanpengadilan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Putusan_pengadilan::all();

        $pdf = PDF::loadview('admin/report/putusanpengadilan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-putusan_pengadilan-pdf');
    }

    public function hasilpenyelidikan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Hasil_penyelidikan::all();

        $pdf = PDF::loadview('admin/report/hasilpenyelidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-hasil_penyelidikan-pdf');
    }

    public function hasilpenyidikan()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Hasil_penyidikan::all();

        $pdf = PDF::loadview('admin/report/hasilpenyidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-hasil_penyidikan-pdf');
    }
    public function suratterimaformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Surat_terima::all();

        $pdf = PDF::loadview('admin/report/terima', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Surat_Terima-pdf');
    }

    public function perintahpenyidikanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Perintah_penyidikan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratperpenyidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-Perintah_penyidikan-pdf');
    }

    public function perintahpenyelidikanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Perintah_penyelidikan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratperpenyelidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-Perintah_penyelidikan-pdf');
    }

    public function permintaanketeranganformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Permintaan_keterangan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratpermintaanket', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-permintaan_keterangan-pdf');
    }

    public function panggilantersangkaformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Panggilan_tersangka::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratpanggilanter', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-panggilan_tersangka-pdf');
    }

    public function putusanpengadilanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Putusan_pengadilan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratputusan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-putusan_pengadilan-pdf');
    }

    public function hasilpenyelidikanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Hasil_penyelidikan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/surathaspenyelidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-hasil_penyelidikan-pdf');
    }

    public function hasilpenyidikanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Hasil_penyidikan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/surathaspenyidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-hasil_penyidikan-pdf');
    }
}
