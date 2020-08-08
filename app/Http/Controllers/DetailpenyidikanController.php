<?php

namespace App\Http\Controllers;

use App\Perintah_penyidikan;
use App\Detailpenyidikan;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailpenyidikanController extends Controller
{

    public function index($id)
    {
        $penyidikan = Perintah_penyidikan::where('uuid', $id)->first();
        $data = Detailpenyidikan::OrderBy('id', 'Desc')->where('penyidikan_id', $penyidikan->id)->get();
        $pegawai = Pegawai::OrderBy('id','desc')->get();

        return view('admin.pengelolaan.penyidikan.detail.index', compact('data', 'penyidikan', 'pegawai'));
    }

    public function store(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Pegawai sudah terdaftar.'
        ];
        $validator = Validator::make($request->all(), [
            'pegawai_id' => 'required|unique:detailpenyidikans,pegawai_id',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $penyidikan = Perintah_penyidikan::where('uuid', $id)->first();

        $detail = new Detailpenyidikan;
        $detail->penyidikan_id = $penyidikan->id;
        $detail->pegawai_id = $request->pegawai_id;
        $detail->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function delete($id)
    {
        $data = detailpenyidikan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
