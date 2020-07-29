<?php

namespace App\Http\Controllers;

use App\Pangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PangkatController extends Controller
{
    public function Index()
    {
        $data = Pangkat::latest()->get();

        return view('admin.master.pangkat.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'pangkat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Pangkat;
        $data->pangkat = $request->pangkat;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'pangkat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Pangkat::find($request->id);
        $data->pangkat = $request->pangkat;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Pangkat::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
