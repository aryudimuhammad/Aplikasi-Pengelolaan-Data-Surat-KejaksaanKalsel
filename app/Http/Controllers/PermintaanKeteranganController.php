<?php

namespace App\Http\Controllers;

use App\Perintah_penyelidikan;
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
            'lampiran' => 'required',
            'perihal' => 'required',
            'kepada' => 'required',
            'di_kota' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Permintaan_keterangan;
        $data->perintah_penyelidikan_id = $request->perintah_penyelidikan_id;
        $data->no_pol = $request->no_pol;
        $data->lampiran = $request->lampiran;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
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
            'lampiran' => 'required',
            'perihal' => 'required',
            'kepada' => 'required',
            'di_kota' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Permintaan_keterangan::where('uuid', $id)->first();
        $data->perintah_penyelidikan_id = $request->perintah_penyelidikan_id;
        $data->no_pol = $request->no_pol;
        $data->lampiran = $request->lampiran;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->di_kota = $request->di_kota;
        $data->uraian = $request->uraian;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Permintaan_keterangan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
