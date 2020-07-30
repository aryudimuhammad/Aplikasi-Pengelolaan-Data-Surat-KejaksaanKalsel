<?php

namespace App\Http\Controllers;

use App\Hasil_penyelidikan;
use App\Perintah_penyidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerintahPenyidikanController extends Controller
{
    public function Index()
    {
        $data = Perintah_penyidikan::latest()->get();
        $hasil = Hasil_penyelidikan::get();

        return view('admin.pengelolaan.penyidikan.index', compact('data', 'hasil'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'No.Pol Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            'hasil_penyelidikan_id' => 'required|unique:perintah_penyidikans',
            'pertimbangan' => 'required',
            'dasar' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Perintah_penyidikan;
        $data->hasil_penyelidikan_id = $request->hasil_penyelidikan_id;
        $data->pertimbangan = $request->pertimbangan;
        $data->dasar = $request->dasar;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Perintah_penyidikan::where('uuid', $id)->first();
        $hasil = Hasil_penyelidikan::get();

        return view('admin.pengelolaan.penyidikan.edit', compact('data', 'hasil'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'hasil_penyelidikan_id' => 'required',
            'pertimbangan' => 'required',
            'dasar' => 'required',
            'untuk' => 'required',
            'dikeluarkan_di' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Perintah_penyidikan::where('uuid', $id)->first();
        $data->hasil_penyelidikan_id = $request->hasil_penyelidikan_id;
        $data->pertimbangan = $request->pertimbangan;
        $data->dasar = $request->dasar;
        $data->untuk = $request->untuk;
        $data->dikeluarkan_di = $request->dikeluarkan_di;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Perintah_penyidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
