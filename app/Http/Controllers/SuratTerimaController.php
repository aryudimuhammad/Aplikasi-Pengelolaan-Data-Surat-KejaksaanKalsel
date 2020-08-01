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

        return view('admin.pengelolaan.surat.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'integer' => 'Nomor Telepon/Kontak Harus Berupa Angka.',
        ];
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'nama_pelapor' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            // 'kontak' => 'required|integer',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Surat_terima;
        $data->nomor = $request->nomor;
        $data->nama_pelapor = $request->nama_pelapor;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->pekerjaan = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->uraian = $request->uraian;
        $data->status = 0;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit($id)
    {
        $data = Surat_terima::where('uuid', $id)->first();

        return view('admin.pengelolaan.surat.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'integer' => 'Nomor Telepon/Kontak Harus Berupa Angka.',
        ];
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'nama_pelapor' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            //'kontak' => 'required|integer',
            'uraian' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Surat_terima::where('uuid', $id)->first();
        $data->nomor = $request->nomor;
        $data->nama_pelapor = $request->nama_pelapor;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->tgl_lahir = $request->tgl_lahir;
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
