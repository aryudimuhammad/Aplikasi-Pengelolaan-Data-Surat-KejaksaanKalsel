<?php

namespace App\Http\Controllers;

use App\Jabatan;
use App\Pangkat;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    public function Index()
    {
        $data = Pegawai::latest()->get();
        $pangkat = Pangkat::get();
        $jabatan = Jabatan::get();

        return view('admin.master.pegawai.index', compact('data', 'pangkat', 'jabatan'));
    }

    public function create(Request $request)
    {
        $messages = [
            'unique' => 'NRP Sudah Terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'jabatan' => 'required',
            'pangkat' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nrp' => 'unique:pegawais|required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Pegawai;
        $data->jabatan_id = $request->jabatan;
        $data->pangkat_id = $request->pangkat;
        $data->nama = $request->nama;
        $data->nrp = $request->nrp;
        $data->telp = $request->telp;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit(Request $request)
    {
        $messages = [
            'unique' => 'NRP Sudah Terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'jabatan' => 'required',
            'pangkat' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nrp' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Pegawai::find($request->id);
        $data->jabatan_id = $request->jabatan;
        $data->pangkat_id = $request->pangkat;
        $data->nama = $request->nama;
        $data->nrp = $request->nrp;
        $data->telp = $request->telp;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Pegawai::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
