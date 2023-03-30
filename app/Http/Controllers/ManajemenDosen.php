<?php

namespace App\Http\Controllers;

use File;
use App\Http\Controllers\Controller;
use App\Models\dosen;
use Illuminate\Http\Request;

class ManajemenDosen extends Controller
{

    public function index()
    {
        $data = [
            'dosen' => dosen::all()
        ];
        return view('admin.dosen.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store')
        ];
        return view('admin.dosen.create', $data);
    }

    //fungsi insert
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/dosen');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_dosen' => $filename]);
        dosen::create($request->only(['nama_dosen', 'foto_dosen', 'gender_dosen', 'nip_nik_dosen', 'nidn_dosen', 'jabatan_dosen', 'email_dosen', 'notelp_dosen', 'alamat_dosen']));
        return redirect()->route('admin.dosen')->with('success', 'Data Dosen berhasil di tambahkan');
    }

    //form edit
    public function edit($id)
    {
        $data = [
            'dosen'  => dosen::find($id),
            'action' => route('admin.update', $id)
        ];
        return view('admin.dosen.form', $data);
    }

    //fungsi update
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = dosen::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/dosen');
            if (file_exists($path . '/' . $data->foto_buku)) {
                File::delete($path . '/' . $data->foto_buku);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_dosen' => $filename]);
        dosen::where('id', $request->id)->update($request->only(['nama_dosen', 'foto_dosen', 'gender_dosen', 'nip_nik_dosen', 'nidn_dosen', 'jabatan_dosen', 'email_dosen', 'notelp_dosen', 'alamat_dosen']));
        return redirect()->route('admin.dosen')->with('success', 'Data Dosen berhasil di update');
    }

    public function destroy($id)
    {
        $data = dosen::findOrFail($id);

        if (file_exists(public_path('images/dosen' . $data->foto_dosen))) {
            File::delete(public_path('images/dosen' . $data->foto_dosen));
        }
        $data->delete();
        return redirect()->route('admin.dosen')->with('success', 'Data Dosen berhasil di Hapus');
    }
}
