<?php

namespace App\Http\Controllers;

use App\Hasil_penyelidikan;
use App\Permintaan_keterangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HasilPenyelidikanController extends Controller
{
    public function Index()
    {
        $data = Hasil_penyelidikan::latest()->get();
        $keterangan = Permintaan_keterangan::get();

        return view('admin.pengelolaan.hasil_penyelidikan.index', compact('data', 'keterangan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Data Perihal Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            'permintaan_keterangan_id' => 'required|unique:hasil_penyelidikans',
            'no_pol' => 'required',
            'isi_surat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Hasil_penyelidikan;
        $data->permintaan_keterangan_id = $request->permintaan_keterangan_id;
        $data->no_pol = $request->no_pol;
        $data->isi_surat = $request->isi_surat;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Hasil_penyelidikan::where('uuid', $id)->first();
        $keterangan = Permintaan_keterangan::get();

        return view('admin.pengelolaan.hasil_penyelidikan.edit', compact('data', 'keterangan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'permintaan_keterangan_id' => 'required',
            'no_pol' => 'required',
            'isi_surat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Hasil_penyelidikan::where('uuid', $id)->first();
        $data->permintaan_keterangan_id = $request->permintaan_keterangan_id;
        $data->no_pol = $request->no_pol;
        $data->isi_surat = $request->isi_surat;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Hasil_penyelidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
