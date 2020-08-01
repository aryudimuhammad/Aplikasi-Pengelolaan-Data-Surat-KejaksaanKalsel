<?php

namespace App\Http\Controllers;

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

        return view('admin.pengelolaan.panggilan.index', compact('data', 'penyidikan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Data Perintah Penyidikan Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            'perintah_penyidikan_id' => 'required|unique:panggilan_tersangkas',
            'no_panggilan' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'tgl_dipanggil' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'menghadap' => 'required',
            'keterangan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Panggilan_tersangka;
        $data->perintah_penyidikan_id = $request->perintah_penyidikan_id;
        $data->no_panggilan = $request->no_panggilan;
        $data->nama = $request->nama;
        $data->kota = $request->kota;
        $data->tgl_dipanggil = $request->tgl_dipanggil;
        $data->jam = $request->jam;
        $data->tempat = $request->tempat;
        $data->menghadap = $request->menghadap;
        $data->keterangan = $request->keterangan;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $penyidikan = Perintah_penyidikan::get();

        return view('admin.pengelolaan.panggilan.edit', compact('data', 'penyidikan'));
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
            'menghadap' => 'required',
            'keterangan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $data->perintah_penyidikan_id = $request->perintah_penyidikan_id;
        $data->no_panggilan = $request->no_panggilan;
        $data->nama = $request->nama;
        $data->kota = $request->kota;
        $data->tgl_dipanggil = $request->tgl_dipanggil;
        $data->jam = $request->jam;
        $data->tempat = $request->tempat;
        $data->menghadap = $request->menghadap;
        $data->keterangan = $request->keterangan;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Panggilan_tersangka::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
