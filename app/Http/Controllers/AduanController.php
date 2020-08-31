<?php

namespace App\Http\Controllers;

use App\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aduan::latest()->get();

        return view('admin.master.jenisaduan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'jenis' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Aduan;
        $data->kode = $request->kode;
        $data->jenis = $request->jenis;
        $data->save();

        return back()->with('success', 'Data Behasil Disimpan.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $messages = [
            'required' => 'Data Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kode' => 'required',
            'jenis' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Aduan::find($request->id);
        $data->kode = $request->kode;
        $data->jenis = $request->jenis;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Aduan::where('uuid', $id)->first();
        $data->delete();

        return back();
    }
}
