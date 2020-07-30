<?php

namespace App\Http\Controllers;

use App\Hasil_penyidikan;
use App\Putusan_pengadilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PutusanPengadilanController extends Controller
{
    public function Index()
    {
        $data = Putusan_pengadilan::latest()->get();
        $hasil = Hasil_penyidikan::get();

        return view('admin.pengelolaan.keputusan.index', compact('data', 'hasil'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Nomor Surat Hasil Penyidikan Sudah ada.',
        ];
        $validator = Validator::make($request->all(), [
            'hasil_penyidikan_id' => 'required|unique:putusan_pengadilans',
            'nomor' => 'required',
            'dasar' => 'required',
            'pertimbangan' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Putusan_pengadilan;
        $data->hasil_penyidikan_id = $request->hasil_penyidikan_id;
        $data->nomor = $request->nomor;
        $data->dasar = $request->dasar;
        $data->pertimbangan = $request->pertimbangan;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Putusan_pengadilan::where('uuid', $id)->first();
        $hasil = Hasil_penyidikan::get();

        return view('admin.pengelolaan.keputusan.edit', compact('data', 'hasil'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'hasil_penyidikan_id' => 'required',
            'nomor' => 'required',
            'dasar' => 'required',
            'pertimbangan' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Putusan_pengadilan::where('uuid', $id)->first();
        $data->hasil_penyidikan_id = $request->hasil_penyidikan_id;
        $data->nomor = $request->nomor;
        $data->dasar = $request->dasar;
        $data->pertimbangan = $request->pertimbangan;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Putusan_pengadilan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
