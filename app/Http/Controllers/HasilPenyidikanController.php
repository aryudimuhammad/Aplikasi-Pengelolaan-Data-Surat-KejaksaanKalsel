<?php

namespace App\Http\Controllers;

use App\Hasil_penyidikan;
use App\Panggilan_tersangka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HasilPenyidikanController extends Controller
{
    public function Index()
    {
        $data = Hasil_penyidikan::latest()->get();
        $panggilan = Panggilan_tersangka::get();

        return view('admin.pengelolaan.hasil_penyidikan.index', compact('data', 'panggilan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Nama Tersangka Sudah ada.',
        ];
        $validator = Validator::make($request->all(), [
            'panggilan_tersangka_id' => 'required|unique:hasil_penyidikans',
            'nomor_surat' => 'required',
            'klasifikasi' => 'required',
            'kepada' => 'required',
            'dikeluarkan_di' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Hasil_penyidikan;
        $data->panggilan_tersangka_id = $request->panggilan_tersangka_id;
        $data->nomor_surat = $request->nomor_surat;
        $data->klasifikasi = $request->klasifikasi;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->uraian = $request->uraian;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Hasil_penyidikan::where('uuid', $id)->first();
        $panggilan = Panggilan_tersangka::get();

        return view('admin.pengelolaan.hasil_penyidikan.edit', compact('data', 'panggilan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'panggilan_tersangka_id' => 'required',
            'nomor_surat' => 'required',
            'klasifikasi' => 'required',
            'kepada' => 'required',
            'dikeluarkan_di' => 'required',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Hasil_penyidikan::where('uuid', $id)->first();
        $data->panggilan_tersangka_id = $request->panggilan_tersangka_id;
        $data->nomor_surat = $request->nomor_surat;
        $data->klasifikasi = $request->klasifikasi;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->uraian = $request->uraian;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Hasil_penyidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
