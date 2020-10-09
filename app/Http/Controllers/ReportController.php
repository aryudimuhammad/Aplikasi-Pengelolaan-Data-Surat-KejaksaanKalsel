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
use App\Warga;
use App\Aduan;
use Auth;

class ReportController extends Controller
{
    public function suratterima(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];

        $data = Surat_terima::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);


        $pdf = PDF::loadview('admin/report/suratterima', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-SuratTerima-pdf');
    }

    public function suratterimakeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;

        $data = Surat_terima::all();


        $pdf = PDF::loadview('admin/report/suratterimakeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-SuratTerima-pdf');
    }

    public function perintahpenyidikan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Perintah_penyidikan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/perintahpenyidikan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-Perintah_penyidikan-pdf');
    }

    public function perintahpenyidikankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Perintah_penyidikan::all();

        $pdf = PDF::loadview('admin/report/perintahpenyidikankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-Perintah_penyidikan-pdf');
    }

    public function perintahpenyelidikan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Perintah_penyelidikan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/perintahpenyelidikan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-Perintah_penyelidikan-pdf');
    }

    public function perintahpenyelidikankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Perintah_penyelidikan::all();

        $pdf = PDF::loadview('admin/report/perintahpenyelidikankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-Perintah_penyelidikan-pdf');
    }

    public function permintaanketerangan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Permintaan_keterangan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/permintaanketerangan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-permintaan_keterangan-pdf');
    }


    public function permintaanketerangankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Permintaan_keterangan::all();

        $pdf = PDF::loadview('admin/report/permintaanketerangankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-permintaan_keterangan-pdf');
    }

    public function panggilantersangka(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Panggilan_tersangka::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/panggilantersangka', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-panggilan_tersangka-pdf');
    }

    public function panggilantersangkakeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Panggilan_tersangka::all();

        $pdf = PDF::loadview('admin/report/panggilantersangkakeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-panggilan_tersangka-pdf');
    }

    public function putusanpengadilan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Putusan_pengadilan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/putusanpengadilan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-putusan_pengadilan-pdf');
    }

    public function putusanpengadilankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Putusan_pengadilan::all();

        $pdf = PDF::loadview('admin/report/putusanpengadilankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-putusan_pengadilan-pdf');
    }

    public function hasilpenyelidikan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Hasil_penyelidikan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/hasilpenyelidikan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-hasil_penyelidikan-pdf');
    }

    public function hasilpenyelidikankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Hasil_penyelidikan::all();

        $pdf = PDF::loadview('admin/report/hasilpenyelidikankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-hasil_penyelidikan-pdf');
    }

    public function hasilpenyidikan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $role = Auth::user()->keterangan;
        $date = explode("-", $request->month);
        $month = $date[0];
        $year = $date[1];
        $data = Hasil_penyidikan::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        $periode = Carbon::createFromFormat('m', $month);

        $pdf = PDF::loadview('admin/report/hasilpenyidikan', compact('data', 'now', 'user', 'month', 'year', 'periode', 'role'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-hasil_penyidikan-pdf');
    }

    public function hasilpenyidikankeseluruhan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $user = Auth::user()->name;
        $data = Hasil_penyidikan::all();

        $pdf = PDF::loadview('admin/report/hasilpenyidikankeseluruhan', compact('data', 'now', 'user'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-hasil_penyidikan-pdf');
    }

    public function suratterimaformat($id)
    {
        $now = Carbon::now()->format('d F Y');
        $time = Carbon::now()->format('h:i');
        $surat = Surat_terima::where('uuid', $id)->first();
        $data = Warga::where('id', $surat->warga_id)->first();

        $pdf = PDF::loadview('admin/report/terima', compact('data', 'now', 'time', 'surat'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Surat_Terima-pdf');
    }

    public function perintahpenyidikanformat($id)
    {
        $now = Carbon::now()->translatedformat('d F Y');
        $data = Perintah_penyidikan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratperpenyidikan', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-Perintah_penyidikan-pdf');
    }

    public function perintahpenyelidikanformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Perintah_penyelidikan::where('uuid', $id)->first();
        $pegawai = Pegawai::where('id', $data->pegawai_id)->first();

        $pdf = PDF::loadview('admin/report/suratperpenyelidikan', compact('data', 'now', 'pegawai'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-Perintah_penyelidikan-pdf');
    }

    public function permintaanketeranganformat($id)
    {
        $now = Carbon::now()->translatedformat('d F Y');
        $data = Permintaan_keterangan::where('uuid', $id)->first();

        $pdf = PDF::loadview('admin/report/suratpermintaanket', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('surat-permintaan_keterangan-pdf');
    }

    public function panggilantersangkaformat($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $hari = Carbon::parse($data->tgl_dipanggil)->translatedFormat('l');
        $tgl = Carbon::parse($data->tgl_dipanggil)->translatedFormat('d F Y');
        $jam = Carbon::parse($data->tgl_dipanggil)->translatedFormat('h:i');

        $pdf = PDF::loadview('admin/report/suratpanggilanter', compact('data', 'now', 'hari', 'tgl', 'jam'));
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
        $keterangan = Permintaan_keterangan::where('id', $data->permintaan_keterangan_id)->first();
        $penyelidikan = Perintah_penyelidikan::where('id', $keterangan->perintah_penyelidikan_id)->first();
        // dd($penyelidikan);
        $pdf = PDF::loadview('admin/report/surathaspenyelidikan', compact('data', 'now', 'penyelidikan'));
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
