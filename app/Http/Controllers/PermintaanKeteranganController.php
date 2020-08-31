<?php

namespace App\Http\Controllers;

use App\Perintah_penyelidikan;
use App\Warga;
use App\Permintaan_keterangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermintaanKeteranganController extends Controller
{
    public function Index()
    {
        $data = Permintaan_keterangan::latest()->get();
        $penyelidikan = Perintah_penyelidikan::latest()->get();

        return view('admin.pengelolaan.keterangan.index', compact('data', 'penyelidikan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Nomor Penyelidikan Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            'perintah_penyelidikan_id' => 'required|unique:permintaan_keterangans',
            'no_pol' => 'required',
            'perihal' => 'required',
            'nama' => 'required',
            'di_kota' => 'required',
            'uraian' => 'required',
            'nik' => 'required',
            'alias' => 'required',
            'tempat_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'ortu' => 'required',
            'pekerjaan' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $warga = new Warga;
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 2;
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

        $data = new Permintaan_keterangan;
        $data->perintah_penyelidikan_id = $request->perintah_penyelidikan_id;
        $data->warga_id = $warga->id;
        $data->no_pol = $request->no_pol;
        $data->perihal = $request->perihal;
        $data->di_kota = $request->di_kota;
        $data->uraian = $request->uraian;
        $data->save();



        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Permintaan_keterangan::where('uuid', $id)->first();
        $penyelidikan = Perintah_penyelidikan::latest()->get();

        return view('admin.pengelolaan.keterangan.edit', compact('data', 'penyelidikan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'no_pol' => 'required',
            'perihal' => 'required',
            'nama' => 'required',
            'di_kota' => 'required',
            'uraian' => 'required',
            'nik' => 'required',
            'alias' => 'required',
            'tempat_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'ortu' => 'required',
            'pekerjaan' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Permintaan_keterangan::where('uuid', $id)->first();
        $data->perintah_penyelidikan_id = $request->perintah_penyelidikan_id;
        $data->no_pol = $request->no_pol;
        $data->perihal = $request->perihal;
        $data->di_kota = $request->di_kota;
        $data->uraian = $request->uraian;
        $data->update();

        $warga = Warga::findOrFail($data->warga_id);
        $warga->nik = $request->nik;
        $warga->nama_warga = $request->nama;
        $warga->alias = $request->alias;
        $warga->status = 2;
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
        $data = Permintaan_keterangan::where('uuid', $id)->first();
        $data->delete();

        $warga = Warga::findOrFail($data->warga_id);
        $warga->delete();

        return back();
    }
}
