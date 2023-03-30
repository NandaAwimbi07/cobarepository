<?php

namespace App\Http\Controllers;

use File;
use App\Http\Controllers\Controller;
use App\Models\prestasi_mhs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ManajemenPenghargaan extends Controller
{
    public function index()
    {
        $data = [
            'prestasi' => prestasi_mhs::all()
        ];
        return view('admin.penghargaan.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.penghargaan')
        ];
        return view('admin.penghargaan.create', $data);
    }

    //fungsi insert
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/penghargaan');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_prestasi' => $filename]);
        prestasi_mhs::create($request->only(['nama_prestasi', 'foto_prestasi', 'peraih_prestasi', 'tahun_prestasi', 'desc_prestasi']));
        return redirect()->route('admin.penghargaan')->with('success', 'Data Peraih Prestasi berhasil di tambahkan');
    }

    //form edit
    public function edit($id)
    {
        $data = [
            'prestasi'  => prestasi_mhs::find($id),
            'action' => route('admin.update.penghargaan', $id)
        ];
        return view('admin.penghargaan.form', $data);
    }

    //fungsi update
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = prestasi_mhs::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/penghargaan');
            if (file_exists($path . '/' . $data->foto_buku)) {
                File::delete($path . '/' . $data->foto_buku);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_prestasi' => $filename]);
        prestasi_mhs::where('id', $request->id)->update($request->only(['nama_prestasi', 'foto_prestasi', 'peraih_prestasi', 'tahun_prestasi', 'desc_prestasi']));
        return redirect()->route('admin.penghargaan')->with('success', 'Data Peraih Penghargaan berhasil di update');
    }

    public function destroy($id)
    {
        $data = prestasi_mhs::findOrFail($id);

        if (file_exists(public_path('images/penghargaan' . $data->foto_penghargaan))) {
            File::delete(public_path('images/penghargaan' . $data->foto_penghargaan));
        }
        $data->delete();
        return redirect()->route('admin.penghargaan')->with('success', 'Data Penghargaan berhasil di Hapus');
    }
}
