<?php

namespace App\Http\Controllers;

use App\Panggilan_tersangka;
use App\Detailpanggilan;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailpanggilanController extends Controller
{

    public function index($id)
    {
        $panggilan = Panggilan_tersangka::where('uuid', $id)->first();
        $data = Detailpanggilan::OrderBy('id', 'Desc')->where('panggilan_id', $panggilan->id)->get();
        $pegawai = Pegawai::OrderBy('id','desc')->get();

        return view('admin.pengelolaan.panggilan.detail.index', compact('data', 'panggilan', 'pegawai'));
    }

    public function store(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
            'unique' => 'Pegawai sudah terdaftar.'
        ];
        $validator = Validator::make($request->all(), [
            'pegawai_id' => 'required|unique:Detailpanggilans,pegawai_id',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $panggilan = Panggilan_tersangka::where('uuid', $id)->first();

        $detail = new Detailpanggilan;
        $detail->panggilan_id = $panggilan->id;
        $detail->pegawai_id = $request->pegawai_id;
        $detail->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function delete($id)
    {
        $data = Detailpanggilan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
