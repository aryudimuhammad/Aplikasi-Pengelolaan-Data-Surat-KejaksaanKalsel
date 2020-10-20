<?php

namespace App\Http\Controllers;

use App\Warga;
use App\Pegawai;
use App\Panggilan_tersangka;
use App\Perintah_penyidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PanggilanTersangkaController extends Controller
{
    public function Index()
    {
        $data = Panggilan_tersangka::latest()->get();
        $penyidikan = Perintah_penyidikan::get();
        $pegawai = Pegawai::get();

        return view('admin.pengelolaan.panggilan.index', compact('data', 'penyidikan', 'pegawai'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Data Perintah Penyidikan Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            // 'perintah_penyidikan_id' => 'required|unique:panggilan_tersangkas',
            'no_panggilan' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'tgl_dipanggil' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $warga = new Warga;
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 4;
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

        $data = new Panggilan_tersangka;
        $data->perintah_penyidikan_id = $request->perintah_penyidikan_id;
        $data->pegawai_id = $request->pegawai_id;
        $data->warga_id = $warga->id;
        $data->no_panggilan = $request->no_panggilan;
        $data->kota = $request->kota;
        $data->tgl_dipanggil = $request->tgl_dipanggil;
        $data->jam = $request->jam;
        $data->tempat = $request->tempat;
        $data->keterangan = $request->keterangan;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $penyidikan = Perintah_penyidikan::get();
        $pegawai = Pegawai::get();

        return view('admin.pengelolaan.panggilan.edit', compact('data', 'penyidikan', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'perintah_penyidikan_id' => 'required',
            'no_panggilan' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'tgl_dipanggil' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $data->perintah_penyidikan_id = $request->perintah_penyidikan_id;
        $data->pegawai_id = $request->pegawai_id;
        $data->no_panggilan = $request->no_panggilan;
        $data->kota = $request->kota;
        $data->tgl_dipanggil = $request->tgl_dipanggil;
        $data->jam = $request->jam;
        $data->tempat = $request->tempat;
        $data->keterangan = $request->keterangan;
        $data->update();

        $warga = Warga::findOrFail($data->warga_id);
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 4;
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
        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $data->delete();

        $warga = Warga::findOrFail($data->warga_id);
        $warga->delete();

        return back();
    }
}
