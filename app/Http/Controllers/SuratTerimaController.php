<?php

namespace App\Http\Controllers;

use App\Aduan;
use App\Surat_terima;
use App\Warga;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SuratTerimaController extends Controller
{
    public function Index()
    {
        $data = Surat_terima::latest()->get();
        $aduan = Aduan::latest()->get();

        return view('admin.pengelolaan.surat.index', compact('data', 'aduan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'number' => 'Nomor Telepon/Kontak Harus Berupa Angka.',
        ];
        $validator = Validator::make($request->all(), [
            // 'nomor' => 'required',
            'alias' => 'required',
            'ortu' => 'required',
            'ortu' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }
        //warga
        $warga = new Warga;
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 1;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->agama = $request->agama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->kewarganegaraan = $request->kewarganegaraan;
        $warga->ortu = $request->ortu;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->alamat = $request->alamat;
        $warga->kontak = $request->kontak;
        $warga->save();

        //tanggal
        $d = Carbon::now()->translatedFormat('d');
        $m = Carbon::now()->translatedFormat('m');
        $y = Carbon::now()->translatedFormat('Y');

        //surat terima
        $data = new Surat_terima;
        $data->warga_id = $warga->id;
        $data->aduan_id = $request->aduan_id;
        //$data->nomor = $request->nomor;
        $data->nomor = 0;
        $data->uraian = $request->uraian;
        $data->status = 0;
        $data->save();

        $data->nomor = "SP/$data->id/P.1/$d/$m/$y";
        $data->update();


        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Surat_terima::where('uuid', $id)->first();
        $aduan = Aduan::latest()->get();

        return view('admin.pengelolaan.surat.edit', compact('data', 'aduan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Surat_terima::where('uuid', $id)->first();
        $data->aduan_id = $request->aduan_id;
        $data->nomor = $request->nomor;
        $data->uraian = $request->uraian;
        $data->update();

        $warga = Warga::findOrFail($data->warga_id);
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 1;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->agama = $request->agama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->kewarganegaraan = $request->kewarganegaraan;
        $warga->ortu = $request->ortu;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->alamat = $request->alamat;
        $warga->kontak = $request->kontak;
        $warga->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Surat_terima::where('uuid', $id)->first();
        $data->delete();

        $warga = Warga::findorFail($data->warga_id);
        $warga->delete();

        return back();
    }
}
