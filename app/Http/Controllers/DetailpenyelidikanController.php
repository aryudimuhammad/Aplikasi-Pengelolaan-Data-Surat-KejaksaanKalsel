<?php

namespace App\Http\Controllers;

use App\Perintah_penyelidikan;
use App\Detailpenyelidikan;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailpenyelidikanController extends Controller
{

    public function index($id)
    {
        $penyelidikan = Perintah_penyelidikan::where('uuid', $id)->first();
        $data = Detailpenyelidikan::OrderBy('id', 'Desc')->where('penyelidikan_id', $penyelidikan->id)->get();
        $pegawai = Pegawai::OrderBy('id','desc')->get();

        return view('admin.pengelolaan.penyelidikan.detail.index', compact('data', 'penyelidikan', 'pegawai'));
    }

    public function store(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Pegawai sudah terdaftar.'
        ];
        $validator = Validator::make($request->all(), [
            'pegawai_id' => 'required|unique:detailpenyelidikans,pegawai_id',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $penyelidikan = Perintah_penyelidikan::where('uuid', $id)->first();

        $detail = new Detailpenyelidikan;
        $detail->penyelidikan_id = $penyelidikan->id;
        $detail->pegawai_id = $request->pegawai_id;
        $detail->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function delete($id)
    {
        $data = detailpenyelidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
