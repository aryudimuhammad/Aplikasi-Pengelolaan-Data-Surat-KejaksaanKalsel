<?php

namespace App\Http\Controllers;

use App\Surat_terima;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SuratTerimaController extends Controller
{
    public function Index()
    {
        $data = Surat_terima::latest()->get();

        return view('admin.pengelolaan.terima.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'integer' => 'Nomor Telepon/Kontak Harus Berupa Angka.',
        ];
        $validator = Validator::make($request->all(), [
            'nama_pelapor' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kontak' => 'required|integer',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Surat_terima;
        $data->nama_pelapor = $request->nama_pelapor;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->uraian = $request->uraian;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'integer' => 'Nomor Telepon/Kontak Harus Berupa Angka.',
        ];
        $validator = Validator::make($request->all(), [
            'nama_pelapor' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kontak' => 'required|integer',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Surat_terima::find($request->id);
        $data->nama_pelapor = $request->nama_pelapor;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->uraian = $request->uraian;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Surat_terima::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
