<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JabatanController extends Controller
{
    public function Index()
    {
        $data = Jabatan::latest()->get();

        return view('admin.master.jabatan.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'jabatan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Jabatan;
        $data->jabatan = $request->jabatan;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    public function edit(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'jabatan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Jabatan::find($request->id);
        $data->jabatan = $request->jabatan;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Jabatan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
