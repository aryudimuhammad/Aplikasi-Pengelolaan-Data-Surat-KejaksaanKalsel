<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('admin.admin.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            'required' => 'Nama harus diisi.',
            'email' => ':attribute harus benar.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'image' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
            'same' => 'Konfirmasi Password Salah.',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'unique:users|email',
            'password' => 'same:konfirmasi_password',
            'gambar' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        $data->password = Hash::make($request->password);
        $data->gambar = $request->pict;
        if ($request->pict) {
            $request->file('pict')->move('images/profile/', $request->file('pict')->getClientOriginalName());
            $data->gambar = $request->file('pict')->getClientOriginalName();
            $data->save();
        } else {
            $data->gambar = 'default.png';
        }
        $data->save();

        return back()->with('success', 'Data berhasil disimpan');
    }

    public function edit(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            // 'required' => 'Nama harus diisi.',
            'email' => ':attribute harus benar.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'image' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
            // 'same' => 'Konfirmasi Password Salah.',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email',
            // 'password' => 'same:konfirmasi_password',
            'gambar' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        if ($request->gambar) {
            $request->file('gambar')->move('images/profile/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->update();
        } elseif (!$request->gambar) {
            $data->gambar = $data->gambar;
        }
        $data->update();

        if ($request->password_lama && $request->password_baru) {
            $messages = [
                'required' => ':attribute harus di isi.',
                'min' => ':attribute minimal harus 3 karakter.',
                'same' => 'Konfirmasi Password Salah.',
                // 'unique' => ':attribute sudah ada'
            ];
            $validator = Validator::make($request->all(), [
                'password_lama' => ['required'],
                'konfirmasi_password' => ['required'],
                'password_baru' => ['same:konfirmasi_password', 'min:3'],
                // 'email' => 'unique:users'
            ], $messages);

            if ($validator->fails()) {
                return back()->with('warning', $validator->errors()->all()[0])->withInput();
            }

            if (Hash::check($request->password_lama, $data->password)) {
                $data->password = Hash::make($request->password_baru);
            } else {
                return back()->with('warning', 'Password yang Anda Masukkan Salah');
            }
        } elseif (!$request->password_lama && !$request->password_baru && !$request->konfirmasi_password) {
            $data->password = Hash::make($data->password);
        } else {
            return back()->with('warning', 'Password Harus Diisi.');
        }

        $data->update();

        return back()->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = User::where('uuid', $id)->first();

        $data->delete();

        return back();
    }

    public function settingindex()
    {
        return view('admin.setting.index');
    }

    public function settingedit(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            'email' => ':attribute harus benar.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'image' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email',
            'gambar' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        if ($request->pict) {
            $request->file('pict')->move('images/profile/', $request->file('pict')->getClientOriginalName());
            $data->gambar = $request->file('pict')->getClientOriginalName();
            $data->update();
        } elseif (!$request->pict) {
            $data->gambar = $data->gambar;
        }
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function settingpassword(Request $request)
    {
        $data = User::find(Auth::user()->id);
        if ($request->password_lama && $request->password_baru) {
            $messages = [
                'required' => ':attribute harus di isi.',
                'min' => ':attribute minimal harus 3 karakter.',
                'same' => 'Konfirmasi Password Salah.',
                // 'unique' => ':attribute sudah ada'
            ];
            $validator = Validator::make($request->all(), [
                'password_lama' => ['required'],
                'konfirmasi_password' => ['required'],
                'password_baru' => ['same:konfirmasi_password', 'min:3'],
                // 'email' => 'unique:users'
            ], $messages);

            if ($validator->fails()) {
                return back()->with('warning', $validator->errors()->all()[0])->withInput();
            }

            if (Hash::check($request->password_lama, $data->password)) {
                $data->password = Hash::make($request->password_baru);
            } else {
                return back()->with('warning', 'Password yang Anda Masukkan Salah');
            }
        } elseif (!$request->password_lama && !$request->password_baru && !$request->konfirmasi_password) {
            $data->password = Hash::make($data->password);
        } else {
            return back()->with('warning', 'Password Harus Diisi.');
        }

        $data->update();

        return back()->with('success', 'Password Berhasil Diubah');
    }
}
