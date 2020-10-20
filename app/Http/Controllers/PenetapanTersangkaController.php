<?php

namespace App\Http\Controllers;

use App\Panggilan_tersangka;
use App\PenetapanTersangka;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PenetapanTersangkaController extends Controller
{
    public function Index()
    {
        $data = PenetapanTersangka::latest()->get();
        $panggilan = Panggilan_tersangka::get();

        return view('admin.pengelolaan.penetapan.index', compact('data', 'panggilan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Nomor Penyelidikan Sudah ada.'
        ];
        $validator = Validator::make($request->all(), [
            // 'panggilan_tersangka_id' => 'required|unique:penetapan_tersangkas',
            'keterangan' => 'required',
            'nomor_surat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new PenetapanTersangka;
        $data->panggilan_tersangka_id = $request->panggilan_tersangka_id;
        $data->keterangan = $request->keterangan;
        $data->nomor_surat = $request->nomor_surat;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = PenetapanTersangka::where('uuid', $id)->first();
        $panggilan = Panggilan_tersangka::get();

        return view('admin.pengelolaan.penetapan.edit', compact('data', 'panggilan'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'keterangan' => 'required',
            'panggilan_tersangka_id' => 'required',
            'nomor_surat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = PenetapanTersangka::where('uuid', $id)->first();
        $data->panggilan_tersangka_id = $request->panggilan_tersangka_id;
        $data->keterangan = $request->keterangan;
        $data->nomor_surat = $request->nomor_surat;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = PenetapanTersangka::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
