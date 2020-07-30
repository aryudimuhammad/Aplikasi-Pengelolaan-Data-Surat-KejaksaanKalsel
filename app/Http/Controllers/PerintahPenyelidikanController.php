<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Perintah_penyelidikan;
use App\Surat_terima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerintahPenyelidikanController extends Controller
{
    public function Index()
    {
        $data = Perintah_penyelidikan::latest()->get();
        $terima = Surat_terima::get();
        $pegawai = Pegawai::get();

        return view('admin.pengelolaan.penyelidikan.index', compact('data', 'terima', 'pegawai'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Nomor Penyelidikan Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            'no_penyelidikan' => 'required|unique:perintah_penyelidikans',
            'pertimbangan' => 'required',
            'dasar' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Perintah_penyelidikan;
        $data->surat_terima_id = $request->surat_terima_id;
        $data->pegawai_id = $request->pegawai_id;
        $data->no_penyelidikan = $request->no_penyelidikan;
        $data->pertimbangan = $request->pertimbangan;
        $data->dasar = $request->dasar;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Perintah_penyelidikan::where('uuid', $id)->first();
        $terima = Surat_terima::get();
        $pegawai = Pegawai::get();

        return view('admin.pengelolaan.penyelidikan.edit', compact('data', 'terima', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'no_penyelidikan' => 'required',
            'pertimbangan' => 'required',
            'dasar' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Perintah_penyelidikan::where('uuid', $id)->first();
        $data->surat_terima_id = $request->surat_terima_id;
        $data->pegawai_id = $request->pegawai_id;
        $data->no_penyelidikan = $request->no_penyelidikan;
        $data->pertimbangan = $request->pertimbangan;
        $data->dasar = $request->dasar;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Perintah_penyelidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
